<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Async extends CI_Controller
{

    protected $message;

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);
        $this->message = array();

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
        @$model_gender = $request->model_gender;
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
               TBL_MODELS.'.orderby' => $orderby,
               TBL_MODELS.'.code' => $code,
               TBL_MODELS.'.name' => @$name,
               TBL_MODELS.'.contact_no' => @$phone,
               TBL_MODELS.'.email' => @$email,
               TBL_MODELS.'.description' => @$description,
               TBL_MODELS.'.city' => @$city,
               TBL_MODELS.'.country' => @$country,
               TBL_MODELS.'.height' => @$height,
               TBL_MODELS.'.weight' => @$weight,
               TBL_MODELS.'.hip' => @$hip,
               TBL_MODELS.'.bust' => @$bust,
               TBL_MODELS.'.waist' => @$waist,
               TBL_MODELS.'.hair_long' => @$hair_long,
               TBL_MODELS.'.eye_color' => @$eye_color,
               TBL_MODELS.'.dress_size' => @$dress_size,
               TBL_MODELS.'.shoe_size' => @$shoe_size,
               TBL_MODELS.'.pant_size' => @$pant_size,
               TBL_MODELS.'.model_region' => @$model_region,
               TBL_MODELS.'.model_gender' => @$model_gender,
               TBL_MODELS.'.model_info' => @$model_info,
               TBL_MODELS.'.model_exp' => @$model_exp,
               TBL_MODELS.'.model_marrital_status' => @$model_marrital_status,
               TBL_MODELS.'.model_age' => @$model_age,
               TBL_MODELS.'.is_active' => 'N',
               TBL_MODELS.'.added_date' => date('Y-m-d h:i:s A')
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


    public function promoter_signup()
    {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        $error = FALSE;

        @$name = $request->name;
        @$email = $request->email;
        @$phone = $request->phone;
        @$email = $request->email;
        @$language = $request->language;
        @$username = $request->email;
        @$pwd = $request->pwd;
        @$cpwd = $request->cpwd;
        @$model_region = $request->model_region;
        @$promotes = $request->promotes;
        @$model_info = $request->model_info;

        $this->load->model('model_company');
        $code = $this->model_company->genUniqCode();
        $orderby = $this->model_company->lastOrderID();
        $orderby = ($orderby->orderby != NULL) ? ++$orderby->orderby : 1;

        //Password length validation
        if(strlen(@$pwd) > 12 || strlen(@$pwd) < 8)
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Password length should be maximum of 12 and minimum of 8 characters'
            );
        }

        //Password matching validation
        if(@$pwd != @$cpwd)
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Passwords not matching'
            );
        }

        //Username checking
        if($this->isCompanyAlreadyRegistered(@$username))
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Username already taken'
            );
        }

        if(!$error)
        {
            $uniqTokn = $this->model_company->genUniqToken(@$username);
            $hashKey = $this->model_company->genhashKey(@$pwd, $uniqTokn);

            $save = array(
               TBL_COMPANY.'.orderby' => $orderby,
               TBL_COMPANY.'.code' => $code,
               TBL_COMPANY.'.username' => @$username,
               TBL_COMPANY.'.uniq_token' => $uniqTokn,
               TBL_COMPANY.'.hash_key' => $hashKey,
               TBL_COMPANY.'.r_password' => @$pwd,
               TBL_COMPANY.'.name' => @$name,
               TBL_COMPANY.'.contact_no' => @$phone,
               TBL_COMPANY.'.email' => @$email,
               TBL_COMPANY.'.description' => @$description,
               TBL_COMPANY.'.model_region' => @$model_region,
               TBL_COMPANY.'.promotes' => serialize(@$promotes),
               TBL_COMPANY.'.model_info' => @$model_info,
               TBL_COMPANY.'.is_active' => 'N',
               TBL_COMPANY.'.added_date' => date('Y-m-d h:i:s A')
            );

            $id = $this->model_company->insertRecord($save);

            $this->model_company->removeLangByModel($id);
            //Insert the languages spoken by the model
            for($i=0; $i<count(@$language);$i++)
            {
                $this->model_company->setLanguage($id,@$language[$i]);
            }

            if($id)
            {
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


    public function stylist_signup()
    {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        $error = FALSE;

        @$name = $request->name;
        @$email = $request->email;
        @$phone = $request->phone;
        @$email = $request->email;
        @$language = $request->language;
        @$username = $request->email;
        @$description = $request->description;
        @$pwd = $request->pwd;
        @$cpwd = $request->cpwd;
        @$model_region = $request->model_region;
        @$model_info = $request->model_info;

        $this->load->model('model_stylist');
        $code = $this->model_stylist->genUniqCode();
        $orderby = $this->model_stylist->lastOrderID();
        $orderby = ($orderby->orderby != NULL) ? ++$orderby->orderby : 1;

        //Password length validation
        if(strlen(@$pwd) > 12 || strlen(@$pwd) < 8)
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Password length should be maximum of 12 and minimum of 8 characters'
            );
        }

        //Password matching validation
        if(@$pwd != @$cpwd)
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Passwords not matching'
            );
        }

        //Username checking
        if($this->isCompanyAlreadyRegistered(@$username))
        {
            $error = TRUE;
            $data = array(
                'error' => TRUE,
                'message' => 'Username already taken'
            );
        }

        if(!$error)
        {
            $uniqTokn = $this->model_stylist->genUniqToken(@$username);
            $hashKey = $this->model_stylist->genhashKey(@$pwd, $uniqTokn);

            $save = array(
               TBL_STYLIST.'.orderby' => $orderby,
               TBL_STYLIST.'.code' => $code,
               TBL_STYLIST.'.username' => @$username,
               TBL_STYLIST.'.uniq_token' => $uniqTokn,
               TBL_STYLIST.'.hash_key' => $hashKey,
               TBL_STYLIST.'.r_password' => @$pwd,
               TBL_STYLIST.'.name' => @$name,
               TBL_STYLIST.'.contact_no' => @$phone,
               TBL_STYLIST.'.email' => @$email,
               TBL_STYLIST.'.description' => @$description,
               TBL_STYLIST.'.model_region' => @$model_region,
               TBL_STYLIST.'.model_info' => @$model_info,
               TBL_STYLIST.'.is_active' => 'N',
               TBL_STYLIST.'.added_date' => date('Y-m-d h:i:s A')
            );

            $id = $this->model_stylist->insertRecord($save);

            $this->model_stylist->removeLangByModel($id);
            //Insert the languages spoken by the model
            for($i=0; $i<count(@$language);$i++)
            {
                $this->model_stylist->setLanguage($id,@$language[$i]);
            }

            if($id)
            {
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

    public function send_notification($notify)
    {
        $this->load->model('model_settings');
        $data_title = $this->model_settings->get_details();

        //Send an email regarding the registration
        $this->load->library('email');
        $this->config->load('email', true);
        $this->email->from($notify['email'],$notify['full_name']);
        $this->email->to($data_title->mreg_email,"Model Registration Desk");
        $this->email->subject(SITE_NAME . ' - You have a new model registered');

        $model = $notify['full_name'];

        include_once(MISC_PATH . "/emails.php");
        $message = $notify_mreg_email;

        $this->email->message($message);
        $this->email->send();
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


    public function upldCompanyPhotos()
    {
        $output_dir = COMPANY_IMAGE_UP_PATH;
        $thumb_dir  = COMPANY_THUMB_UP_PATH;

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


    public function upldStylistPhotos()
    {
        $output_dir = STYLIST_IMAGE_UP_PATH;
        $thumb_dir  = STYLIST_THUMB_UP_PATH;

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

    public function setStylistPhoto()
    {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $save = array(
           TBL_STYLIST_IMAGES.'.stylist_fk' => $id,
           TBL_STYLIST_IMAGES.'.image' => $file,
           TBL_STYLIST_IMAGES.'.added_date' => date('Y-m-d h:i:s A')
        );

        $this->load->model('model_stylist');
        $this->model_stylist->updateModelPics($save);

        $data = array(
            'error' => FALSE,
            'message' => 'image updated'
        );

        echo json_encode($data);

    }

    public function setCompanyPhoto()
    {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $save = array(
           TBL_COMPANY_IMAGES.'.company_fk' => $id,
           TBL_COMPANY_IMAGES.'.image' => $file,
           TBL_COMPANY_IMAGES.'.added_date' => date('Y-m-d h:i:s A')
        );

        $this->load->model('model_company');
        $this->model_company->updateCompanyPics($save);

        $data = array(
            'error' => FALSE,
            'message' => 'image updated'
        );

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


    public function upldStylistCV()
    {
        $output_dir = STYLIST_CV_UP_PATH;

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


    public function upldCompanyCV()
    {
        $output_dir = COMPANY_CV_UP_PATH;

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
                $Image1Name = "DOC-".$Image1Name.strrchr($fileName,".");

                move_uploaded_file($_FILES["cvFile"]["tmp_name"][$i],$output_dir.$Image1Name);
                $ret['file']= $Image1Name;
              }

            }

            echo json_encode($ret);

         }
    }

    public function setCV()
    {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $this->load->model('model_models');
        $save = array(
           TBL_MODELS.'.cv_path' => $file,
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

    public function setStylistCV()
    {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $this->load->model('model_stylist');
        $save = array(
           TBL_STYLIST.'.cv_path' => $file,
        );

        $id = $this->model_stylist->updateRecord($save, @$id);

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

    public function setCompanyCV()
    {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        @$id = $request->id;
        @$file = $request->file;

        $this->load->model('model_company');
        $save = array(
           TBL_COMPANY.'.cv_path' => $file,
        );

        $id = $this->model_company->updateRecord($save, @$id);

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

    public function isAlreadyRegistered($username)
    {
        $this->load->model('model_models');
        return $this->model_models->hasUsername($username);
    }

    public function isCompanyAlreadyRegistered($username)
    {
        $this->load->model('model_company');
        return $this->model_company->hasUsername(array('username' => $username));
    }

    public function get_quote()
    {
       $data = array();
       $form_get = $_GET;
       $error = false;

       if(isset($form_get) && !empty($form_get))
       {

           if($form_get["name"] == "")
           {
              $error = true;

              $data = array(
                  'error' => TRUE,
                  'message' => 'Enter a valid name please',
                  'code' => 400
              );
           }

           if($form_get["phone"] == "")
           {
              $error = true;

              $data = array(
                  'error' => TRUE,
                  'message' => 'Phone number is required',
                  'code' => 400
              );
           }

           if(!$error)
           {
               $this->load->model('model_settings');
               $data_title = $this->model_settings->get_details();

               $full_name = $form_get["name"];
               $phone = $form_get["phone"];
               $comments = $form_get["regards"];
               $email = "No email";

               $this->load->library('email');
               $this->config->load('email', true);
               $this->email->from('no-reply@avenirevents.com', $name);
               $this->email->to($data_title->sup_email);
               $this->email->subject(SITE_NAME . ' - Contact Form');

               include_once(MISC_PATH . "/emails.php");
               $message = $contact_email;

               $this->email->message($message);
               if ($this->email->send())
               {
                   $data = array(
                       'error' => FALSE,
                       'message' => 'Your quote has been send successfully',
                       'code' => 200
                   );

               }else{

                   $data = array(
                       'error' => TRUE,
                       'message' => 'ERROR: Your email has not send due to relay error',
                       'code' => 400
                   );

               }

           }


       }else{

           $data = array(
               'error' => TRUE,
               'message' => 'ERROR: Something went wrong :(. Please redo the action',
               'code' => 400
           );

       }

       echo json_encode($data);

    }

}
