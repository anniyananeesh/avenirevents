<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Promoter extends CI_Controller
{

    protected $message;
    protected $table;

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);
        $this->message = array();

        $this->table = TBL_COMPANY;

        $this->load->model('model_languages', 'modelLangAlias');

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

        @$height = $request->height;
        @$weight = $request->weight;
        @$bust = $request->bust;
        @$waist = $request->waist;
        @$hip = $request->hip;
        @$pant_size = $request->pant_size;
        @$hair_long = $request->hair_long;
        @$eye_color = $request->eye_color;
        @$dress_size = $request->dress_size;
        @$shoe_size = $request->shoe_size;
        @$language = $request->language;

        @$model_region = $request->model_region;
        @$model_age = $request->model_age;
        @$model_info = $request->model_info;
        @$model_gender = $request->model_gender;
        @$model_marrital_status = $request->model_marrital_status;
        @$model_exp = $request->model_exp;
        @$model_pref = $request->model_pref;

        $this->load->model('model_company');
        $code    = $this->model_company->genUniqCode();
        $orderby = $this->model_company->lastOrderID();
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
                $this->table . '.height' => @$height,
                $this->table . '.weight' => @$weight,
                $this->table . '.hip' => @$hip,
                $this->table . '.bust' => @$bust,
                $this->table . '.waist' => @$waist,
                $this->table . '.hair_long' => @$hair_long,
                $this->table . '.eye_color' => @$eye_color,
                $this->table . '.dress_size' => @$dress_size,
                $this->table . '.shoe_size' => @$shoe_size,
                $this->table . '.pant_size' => @$pant_size,
                $this->table . '.model_region' => @$model_region,
                $this->table . '.model_pref' => serialize(@$model_pref),
                $this->table . '.model_gender' => @$model_gender,
                $this->table . '.model_info' => @$model_info,
                $this->table . '.model_exp' => @$model_exp,
                $this->table . '.model_marrital_status' => @$model_marrital_status,
                $this->table . '.model_age' => @$model_age,
                $this->table . '.is_active' => 'N',
                $this->table . '.added_date' => date('Y-m-d h:i:s A')
            );

            $id = $this->model_company->insertRecord($save);

            $this->model_company->removeLangByModel($id);
            //Insert the languages spoken by the model
            for ($i = 0; $i < count(@$language); $i++) {
                $this->model_company->setLanguage($id, @$language[$i]);
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

        $this->load->model('model_company');
        $save = array(
            TBL_COMPANY . '.cv_path' => $file
        );

        $id = $this->model_company->updateRecord($save, @$id);

        if ($id) {
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
        $output_dir = COMPANY_CV_UP_PATH;

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
                    $Image1Name = "DOC-" . $Image1Name . strrchr($fileName, ".");

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
            TBL_COMPANY_IMAGES . '.company_fk' => $id,
            TBL_COMPANY_IMAGES . '.image' => $file,
            TBL_COMPANY_IMAGES . '.added_date' => date('Y-m-d h:i:s A')
        );

        $this->load->model('model_company');
        $this->model_company->updateCompanyPics($save);

        $data = array(
            'error' => FALSE,
            'message' => 'image updated'
        );

        echo json_encode($data);
    }

    public function upldPhotos()
    {
        $output_dir = COMPANY_IMAGE_UP_PATH;
        $thumb_dir  = COMPANY_THUMB_UP_PATH;

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
        $this->load->model('model_company');
        return $this->model_company->hasUsername(array(
            'email' => $username
        ));
    }

}
