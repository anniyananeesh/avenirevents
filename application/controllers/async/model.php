<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Controller
{

    protected $message;
    protected $table;

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);
        $this->message = array();

        $this->table = TBL_MODELS;

        $this->load->model('model_languages','modelLangAlias');

    }

    public function signup()
    {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

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
        @$model_spl = $request->model_spl;
        @$model_marrital_status = $request->model_marrital_status;
        @$model_exp = $request->model_exp;

        $this->load->model('model_models');
        $code = $this->model_models->genUniqCode();
        $orderby = $this->model_models->lastOrderID();
        $orderby = ($orderby->orderby != NULL) ? ++$orderby->orderby : 1;

        //Username checking
        if($this->isAlreadyRegistered(@$email))
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Email already taken'
            );
        }

        if(!$error)
        {

            $save = array(
               $this->table.'.orderby' => $orderby,
               $this->table.'.code' => $code,
               $this->table.'.name' => @$name,
               $this->table.'.contact_no' => @$phone,
               $this->table.'.email' => @$email,
               $this->table.'.description' => @$description,
               $this->table.'.city' => @$city,
               $this->table.'.country' => @$country,
               $this->table.'.height' => @$height,
               $this->table.'.weight' => @$weight,
               $this->table.'.hip' => @$hip,
               $this->table.'.bust' => @$bust,
               $this->table.'.waist' => @$waist,
               $this->table.'.hair_long' => @$hair_long,
               $this->table.'.eye_color' => @$eye_color,
               $this->table.'.dress_size' => @$dress_size,
               $this->table.'.shoe_size' => @$shoe_size,
               $this->table.'.pant_size' => @$pant_size,
               $this->table.'.model_region' => @$model_region,
               $this->table.'.model_spl' => serialize(@$model_spl),
               $this->table.'.model_info' => @$model_info,
               $this->table.'.model_exp' => @$model_exp,
               $this->table.'.model_age' => @$model_age,
               $this->table.'.is_active' => 'N',
               $this->table.'.added_date' => date('Y-m-d h:i:s A')
            );

            $id = $this->model_models->insertRecord($save);

            $this->model_models->removeLangByModel($id);
            //Insert the languages spoken by the model
            for($i=0; $i<count(@$language);$i++)
            {
                $this->model_models->setLanguage($id,@$language[$i]);
            }

            if($id)
            {
                //Send an invitation email to registered user
                $this->load->library('email');
                $this->config->load('email', true);
                $this->email->from(INFO_EMAIL, SITE_NAME);
                $this->email->to(@$email);
                $this->email->subject('Welcome to Avenir Events.com. Thanks for registering with us!');

                $full_name = @$name;
                $email = @$email;
                $phone = @$phone;
                $type = 'Model';

                $notify = array(
                    'full_name' => $full_name,
                    'email' => $email
                );

                include_once(MISC_PATH . "/emails.php");
                $message = $registration_email;

                //Send email
                $this->email->message($message);
                $this->email->send();

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

            }else{

                $data = array(
                    'error' => TRUE,
                    'message' => 'Something went wrong :(',
                    'code' =>400
                );
            }

        }

        echo json_encode($data);

    }

    public function setCV()
    {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $this->load->model('model_models');
        $save = array(
           $this->table.'.cv_path' => $file,
        );

        $id = $this->model_models->updateRecord($save, @$id);

        if($id)
        {
            $data = array(
                'error' => FALSE,
                'message' => 'account updated'
            );

        }else{

            $data = array(
                'error' => TRUE,
                'message' => 'Something went wrong :('
            );
        }

        echo json_encode($data);
    }

    public function upldCV()
    {
        $output_dir = MODELS_CV_UP_PATH;

        if(isset($_FILES["cvFile"]))
        {
            $ret = array();

            $error =$_FILES["cvFile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData()
            if(!is_array($_FILES["cvFile"]["name"])) //single file
            {
                $fileName = $_FILES["cvFile"]["name"];

                $Image1Name = substr(md5(uniqid(rand())),0,15);
                $Image1Name = "DOC-".$Image1Name.strrchr($fileName,".");

                move_uploaded_file($_FILES["cvFile"]["tmp_name"],$output_dir.$Image1Name);
                $ret['file']= $Image1Name;
            }
            else  //Multiple files, file[]
            {
              $fileCount = count($_FILES["cvFile"]["name"]);

              for($i=0; $i < $fileCount; $i++)
              {
                $fileName = $_FILES["cvFile"]["name"][$i];

                $Image1Name = substr(md5(uniqid(rand())),0,15);
                $Image1Name = "IMG-".$Image1Name.strrchr($fileName,".");

                move_uploaded_file($_FILES["cvFile"]["tmp_name"][$i],$output_dir.$Image1Name);
                $ret['file']= $Image1Name;
              }

            }

            echo json_encode($ret);

         }
    }

    public function setPhoto()
    {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $save = array(
           TBL_MODEL_IMAGES.'.model_fk' => $id,
           TBL_MODEL_IMAGES.'.image' => $file,
           TBL_MODEL_IMAGES.'.added_date' => date('Y-m-d h:i:s A')
        );

        $this->load->model('model_models');
        $this->model_models->updateModelPics($save);

        $data = array(
            'error' => FALSE,
            'message' => 'image updated'
        );

        echo json_encode($data);

    }

    public function upldPhotos()
    {
        $output_dir = MODELS_IMAGE_UP_PATH;
        $thumb_dir  = MODELS_THUMB_UP_PATH;

        require_once(CLASSES_PATH.'/WideImage/WideImage.php');

        if(isset($_FILES["myfile"]))
        {
            $ret = array();

            $error =$_FILES["myfile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData()
            if(!is_array($_FILES["myfile"]["name"])) //single file
            {
                $fileName = $_FILES["myfile"]["name"];

                $Image1Name = substr(md5(uniqid(rand())),0,15);
                $Image1Name = "IMG-".$Image1Name.strrchr($fileName,".");

                move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$Image1Name);

                $img = WideImage::load($output_dir.$Image1Name);

                //Thumb Image
                $resized = $img->resize(254, 361, 'fill');
                $resized->saveToFile($thumb_dir.$Image1Name);

                $ret['file']= $Image1Name;
            }
            else  //Multiple files, file[]
            {
              $fileCount = count($_FILES["myfile"]["name"]);

              for($i=0; $i < $fileCount; $i++)
              {
                $fileName = $_FILES["myfile"]["name"][$i];

                $Image1Name = substr(md5(uniqid(rand())),0,15);
                $Image1Name = "IMG-".$Image1Name.strrchr($fileName,".");

                move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$Image1Name);

                $img = WideImage::load($output_dir.$Image1Name);

                //Thumb Image
                $resized = $img->resize(254, 361);
                $resized->saveToFile($thumb_dir.$Image1Name);

                $ret['file']= $Image1Name;

              }

            }

            echo json_encode($ret);

         }

    }

    public function isAlreadyRegistered($username)
    {
        $this->load->model('model_models');
        return $this->model_models->hasUsername($username);
    }


    public function send_notification() {

        if(isset($_POST)) {
              $this->load->model('model_models', 'modelNameAlias');
              $record = $this->modelNameAlias->get_details($_POST['user']);

              if($record) {

                  $language = array();
                  $language_record = $this->modelNameAlias->getLanguageByModel($_POST['user']);

                  foreach ($language_record as $key => $value) {
                     array_push($language, $value->name_en);
                  }

                  $language = (is_array($language)) ? implode(',', $language) : 'Nothing selected';

                  $data_message = array(
                      'Full name' => $record->name,
                      'Phone' => $record->contact_no,
                      'Email address' => $record->email,
                      'City' => $record->city,
                      'Country' => $record->country,

                      'Weight' => $record->weight,
                      'Height' => $record->height,
                      'Bust' => $record->bust,
                      'Hip' => $record->hip,
                      'Waist' => $record->waist,
                      'Hair long' => $record->hair_long,
                      'Eye color' => $record->eye_color,
                      'Dress size' => $record->dress_size,
                      'Shoe size' => $record->shoe_size,
                      'Pant size' => $record->pant_size,

                      'Region' => $record->model_region,
                      'Specializations' => (is_array(unserialize($record->model_spl))) ? implode(',', unserialize($record->model_spl)) : '',
                      'Gender' => $record->model_gender,
                      'Experience' => $record->model_exp,
                      'Age' => $record->model_age,
                      'Language Spoken' => $language,
                      'Description' => $record->description
                  );

                  $this->load->library('email');
                  $this->config->load('email', true);
                  $this->email->from('no-reply@avenirevents.com', SITE_NAME);
                  $this->email->to(INFO_EMAIL);
                  $this->email->subject(SITE_NAME . ' - New model has been registered');

                  include_once(MISC_PATH . "/emails.php");
                  $message = $notification_email;

                  $this->email->message($message);

                  //Attach image
                  $photos = $this->modelNameAlias->getModelPicsByPk($_POST['user']);

                  if(!empty($photos) && is_array($photos)) {

                      foreach ($photos as $key => $value) {
                          $this->email->attach(MODELS_IMAGE_UP_PATH . $value->image);
                      }

                  }

                  //Attach CV
                  if($record->cv_path != NULL) {
                      $this->email->attach(MODELS_CV_UP_PATH . $record->cv_path);
                  }

                  //Send email to admin
                  if($this->email->send()) {

                      $data = array('code' => 200, 'message' => 'success', 'data' => array());

                      //Delete user
                      $this->modelNameAlias->deleteRecord($_POST['user']);

                      //Delte all photos uploaded
                      if(!empty($photos) && is_array($photos)) {

                          foreach ($photos as $key => $value) {
                              if(file_exists(MODELS_IMAGE_UP_PATH . $value->image)) { unlink(MODELS_IMAGE_UP_PATH . $value->image); }
                          }

                      }

                      //Delete CV file uploaded
                      if($record->cv_path != NULL) {
                          if(file_exists(MODELS_CV_UP_PATH . $record->cv_path)) { unlink(MODELS_CV_UP_PATH . $record->cv_path); }
                      }

                  } else {

                      $data = array('code' => 400, 'message' => 'mail error', 'data' => array());
                  }

              }



        }  else  {
            $data = array('code' => 400, 'message' => 'invalid parameters', 'data' => array());
        }

        echo json_encode($data);
    }

}
