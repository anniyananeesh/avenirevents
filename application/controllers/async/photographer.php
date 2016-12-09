<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photographer extends CI_Controller
{

    protected $message;
    protected $table;
    protected $image_up_path;
    protected $image_thumb_up_path;
    protected $cv_up_path;
    protected $user_images_table;

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);
        $this->message = array();

        $this->table               = TBL_PHOTOGRAPHER;
        $this->image_up_path       = PHOTOGRAPHER_IMAGE_UP_PATH;
        $this->image_thumb_up_path = PHOTOGRAPHER_THUMB_UP_PATH;
        $this->user_images_table   = TBL_PHOTOGRAPHER_IMAGES;
        $this->cv_up_path          = PHOTOGRAPHER_CV_UP_PATH;

        $this->load->model('model_languages', 'modelLangAlias');
        $this->load->model('model_photographer', 'modelNameAlias');

    }

    public function signup()
    {
        $postdata = file_get_contents("php://input");
        $request  = json_decode($postdata);

        $error = FALSE;

        @$name = $request->name;
        @$email = $request->email;
        @$phone = $request->phone;
        @$city = $request->city;
        @$country = $request->country;
        @$description = $request->description;

        @$language = $request->language;

        @$model_region = $request->model_region;
        @$model_age = $request->model_age;
        @$model_spl = $request->model_spl;
        @$model_gender = $request->model_gender;
        @$model_marrital_status = $request->model_marrital_status;
        @$model_exp = $request->model_exp;

        $code    = $this->modelNameAlias->genUniqCode();
        $orderby = $this->modelNameAlias->lastOrderID();
        $orderby = ($orderby->orderby != NULL) ? ++$orderby->orderby : 1;

        //Username checking
        if ($this->isAlreadyRegistered(@$email)) {
            $error = TRUE;
            $data  = array(
                'error' => TRUE,
                'message' => 'Email already taken'
            );
        }

        if (!$error) {

            $save = array(
                $this->table . '.orderby' => $orderby,
                $this->table . '.code' => $code,
                $this->table . '.name' => @$name,
                $this->table . '.contact_no' => @$phone,
                $this->table . '.email' => @$email,
                $this->table . '.description' => @$description,
                $this->table . '.city' => @$city,
                $this->table . '.country' => @$country,
                $this->table . '.model_region' => @$model_region,
                $this->table . '.model_spl' => @$model_spl,
                $this->table . '.model_gender' => @$model_gender,
                $this->table . '.model_exp' => @$model_exp,
                $this->table . '.model_marrital_status' => @$model_marrital_status,
                $this->table . '.model_age' => @$model_age,
                $this->table . '.is_active' => 'N',
                $this->table . '.added_date' => date('Y-m-d h:i:s A')
            );

            $id = $this->modelNameAlias->insertRecord($save);

            $this->modelNameAlias->removeLangById($id);
            //Insert the languages spoken by the model
            for ($i = 0; $i < count(@$language); $i++) {
                $this->modelNameAlias->setLanguage($id, @$language[$i]);
            }

            if ($id) {
                /*//Send an invitation email to registered user
                $this->load->library('email');
                $this->config->load('email', true);
                $this->email->from('info@avenirevents.com', 'Avenir Events');
                $this->email->to(@$email);
                $this->email->subject('Welcome to Avenir Events.com. Thanks for registering with us!');

                $full_name = @$first_name.' '.@$last_name;
                $email = @$email;
                $phone = @$contact_no;

                $notify = array(
                'full_name' => $full_name,
                'email' => $email
                );

                include_once(MISC_PATH . "/emails.php");
                $message = $registration_email;

                //Send email
                $this->email->message($message);
                $this->email->send();

                //Send a notify email to administrator email
                $this->send_notification($notify);*/

                $data = array(
                    'error' => FALSE,
                    'data' => array(
                        'pkey' => $id,
                        'code' => $code,
                        'name' => @$name,
                        'email' => @$email
                    ),
                    'message' => 'account created',
                    'code' => 200
                );

            } else {

                $data = array(
                    'error' => TRUE,
                    'message' => 'Something went wrong :(',
                    'code' => 400
                );
            }

        }

        echo json_encode($data);

    }

    public function setCV()
    {
        $postdata = file_get_contents("php://input");
        $request  = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $save = array(
            $this->table . '.cv_path' => $file
        );

        if ($this->modelNameAlias->updateRecord($save, @$id)) {
          
            $data = array(
                'error' => FALSE,
                'message' => 'account updated'
            );

        } else {

            $data = array(
                'error' => TRUE,
                'message' => 'Something went wrong :('
            );
        }

        echo json_encode($data);
    }

    public function upldCV()
    {
        $output_dir = $this->cv_up_path;

        if (isset($_FILES["cvFile"])) {
            $ret = array();

            $error = $_FILES["cvFile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData()
            if (!is_array($_FILES["cvFile"]["name"])) //single file
                {
                $fileName = $_FILES["cvFile"]["name"];

                $Image1Name = substr(md5(uniqid(rand())), 0, 15);
                $Image1Name = "DOC-" . $Image1Name . strrchr($fileName, ".");

                move_uploaded_file($_FILES["cvFile"]["tmp_name"], $output_dir . $Image1Name);
                $ret['file'] = $Image1Name;
            } else //Multiple files, file[]
                {
                $fileCount = count($_FILES["cvFile"]["name"]);

                for ($i = 0; $i < $fileCount; $i++) {
                    $fileName = $_FILES["cvFile"]["name"][$i];

                    $Image1Name = substr(md5(uniqid(rand())), 0, 15);
                    $Image1Name = "IMG-" . $Image1Name . strrchr($fileName, ".");

                    move_uploaded_file($_FILES["cvFile"]["tmp_name"][$i], $output_dir . $Image1Name);
                    $ret['file'] = $Image1Name;
                }

            }

            echo json_encode($ret);

        }
    }

    public function setPhoto()
    {
        $postdata = file_get_contents("php://input");
        $request  = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $save = array(
            $this->user_images_table . '.photographer_fk' => $id,
            $this->user_images_table . '.image' => $file,
            $this->user_images_table . '.added_date' => date('Y-m-d h:i:s A')
        );

        $this->modelNameAlias->updatePics($save);

        $data = array(
            'error' => FALSE,
            'message' => 'image updated'
        );

        echo json_encode($data);
    }

    public function upldPhotos()
    {
        $output_dir = $this->image_up_path;
        $thumb_dir  = $this->image_thumb_up_path;

        require_once(CLASSES_PATH . '/WideImage/WideImage.php');

        if (isset($_FILES["myfile"])) {
            $ret = array();

            $error = $_FILES["myfile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData()
            if (!is_array($_FILES["myfile"]["name"])) //single file
                {
                $fileName = $_FILES["myfile"]["name"];

                $Image1Name = substr(md5(uniqid(rand())), 0, 15);
                $Image1Name = "IMG-" . $Image1Name . strrchr($fileName, ".");

                move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $Image1Name);

                $img = WideImage::load($output_dir . $Image1Name);

                //Thumb Image
                $resized = $img->resize(254, 361, 'fill');
                $resized->saveToFile($thumb_dir . $Image1Name);

                $ret['file'] = $Image1Name;
            } else //Multiple files, file[]
                {
                $fileCount = count($_FILES["myfile"]["name"]);

                for ($i = 0; $i < $fileCount; $i++) {
                    $fileName = $_FILES["myfile"]["name"][$i];

                    $Image1Name = substr(md5(uniqid(rand())), 0, 15);
                    $Image1Name = "IMG-" . $Image1Name . strrchr($fileName, ".");

                    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $output_dir . $Image1Name);

                    $img = WideImage::load($output_dir . $Image1Name);

                    //Thumb Image
                    $resized = $img->resize(254, 361);
                    $resized->saveToFile($thumb_dir . $Image1Name);

                    $ret['file'] = $Image1Name;

                }

            }

            echo json_encode($ret);

        }

    }

    public function isAlreadyRegistered($username)
    {
        return $this->modelNameAlias->hasUsername(array(
            'email' => $username
        ));
    }

}
