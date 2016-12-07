<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Company_management extends Admin_Controller
{

    /*
    |--------------------------------------------------------------------------
    | Configurations
    |--------------------------------------------------------------------------
    | Note: Functions like settings, getModuleInfo, getImageConfig, upload_image etc are
    | defined in My Controller file located in /application/core.
    |
    */
    protected $model_name = "model_company_management";
    protected $model_countries = "model_country";

    public $image_up_path = COMPANY_IMAGE_UP_PATH;
    public $thumb_up_path = COMPANY_THUMB_UP_PATH;
    public $image_show_path = COMPANY_IMAGE_PATH;
    public $thumb_show_path = COMPANY_THUMB_PATH;

    public $search_field = "name";
    public $module_version = "1.0";
    /*
    |--------------------------------------------------------------------------
    | Constructor
    |--------------------------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->config->item('admin_folder') . "/model_logs", 'modelAdminLogs');
        $this->load->model($this->config->item('admin_folder') . "/" . $this->model_name, 'modelNameAlias');

        $this->load->model($this->model_countries,'modelCountries');
        $this->load->model('model_company');
        $this->load->model('model_languages','modelLangAlias');
    }
    /*
    |--------------------------------------------------------------------------
    | Return All Records
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $folder              = $this->getFolder();
        $data["folder_name"] = $folder;
        $data["module_name"] = $this->getModuleInfo()->module_name;
        $data["page"]        = $folder . "/home";

        $base_url .= HOST_URL . "/" . $folder . "/index";
        $data_search         = $this->modelNameAlias->auto_complete_data_for_search();
        $data["data_search"] = $data_search;

        /* --------------------------
        |	 Common Features in All Modules
        ---------------------------*/
        $common_array = $this->common_features();
        $base_url .= $common_array["base_url"];
        $sortby    = $common_array["sortby"];
        $sortWith  = $common_array["sortWith"];
        $sortImg   = $common_array["sortImg"];
        $cmsg      = $common_array["msg"];
        $cerr      = $common_array["err"];
        $paging    = $common_array["paging"];
        $filter_by = $common_array["filter_by"];
        $searchBox = $common_array["searchBox"];
        $urlparams = $common_array["urlparams"];
        $by        = $common_array["by"];
        $uri_array = $common_array["uri_array"];

        $data["sortby"]            = $sortby;
        $data["MSG"]               = $cmsg;
        $data["Error"]             = $cerr;
        $data["sort_" . $sortWith] = $sortImg;
        $data["paging"]            = $paging;
        $data["filter_by"]         = $filter_by;
        $data["searchBox"]         = $searchBox;
        $data["urlparams"]         = $urlparams;

        if (!empty($searchBox))
        {
            $where_array["code LIKE "] = $searchBox . "%";
        }
        if ($filter_by == "published")
        {
            $where_array["is_active"] = "Y";
        }
        if ($filter_by == "unpublished")
        {
            $where_array["is_active"] = "N";
        }

        /* --------------------------
        |	 Pagination
        ---------------------------*/
        $this->load->library('pagination');
        $offset = (array_key_exists('offset', $uri_array) ? trim($uri_array["offset"]) : 0);
        $limit  = (!empty($paging) ? $paging : "20");
        $base_url .= "/offset";
        $total_records = $this->modelNameAlias->countTotal($where_array);
        $uri_segments  = $this->uri->total_segments();
        $config        = custom_pagination($limit, $total_records, $base_url, $uri_segments);
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();

        /* --------------------------
        |	 All Records List
        ---------------------------*/
        $data_list         = $this->modelNameAlias->get_all_records($where_array, $limit, $offset, $sortWith, $sortby);
        $data["data_list"] = $data_list;

        $data["display_records"] = display_records($total_records, $offset, $paging);
        $data["total_records"]   = $total_records;
        $data['offset']          = $offset;
        $data["paging"]          = $limit;
        $data["image_show_path"] = $this->image_show_path;
        $data["thumb_show_path"] = $this->thumb_show_path;
        $this->load->view($this->config->item('admin_folder') . "/template", $data);
    }
    /*
    |--------------------------------------------------------------------------
    | Add Record
    |--------------------------------------------------------------------------
    */
    public function add()
    {
        $folder              = $this->getFolder();
        $data["folder_name"] = $folder;
        $data["module_name"] = $this->getModuleInfo()->module_name;
        $data["page"]        = $folder . "/add";

        $data['countries'] = $this->modelCountries->get_all_country();
        $data['languages'] = $this->modelLangAlias->getAllLanguages();

        if (isset($_POST) && count($_POST) != 0)
        {
	          $name    = $this->input->post("name", TRUE);
	          $contact_no    = $this->input->post("contact_no", TRUE);
	          $email    = $this->input->post("email", TRUE);
	          $language    = $this->input->post("language", TRUE);
	          $is_active  = $this->input->post("is_active", TRUE);
	          $description    = $this->input->post("description", TRUE);
	          $model_region   = $this->input->post("model_region", TRUE);
	          $promotes    = $this->input->post("promotes", TRUE);
	          $model_info    = $this->input->post("model_info", TRUE);
						$username = $this->input->post("username", TRUE);
	          $pwd = $this->input->post("pwd", TRUE);
	          $cpwd = $this->input->post("cpwd", TRUE);

	          $error = FALSE;

	          $is_active          = $this->input->post("is_active", TRUE);

						//Check if there is any profile picture
	          $image1_name        = $_FILES["userfile"]["name"];
	          $image1_tmp_name    = $_FILES["userfile"]["tmp_name"];

            //Check if there is any CV uploaded
            $cvFile             = $_FILES["filecv"]["name"];
            $cvFile_tmp_name    = $_FILES["filecv"]["tmp_name"];

            $is_exist_array = array(
                'name' => $name
            );

            if($pwd != "" || $cpwd != "")
            {

                if(strlen($pwd) < 8 || strlen($pwd) > 12)
                {
                    $error = TRUE;
                    $data["Error"] = "Y";
                    $data["MSG"]   = "Password must be minimum of 8 and maximum of 12 characters";
                }

                if($pwd != $cpwd)
                {
                    $error = TRUE;
                    $data["Error"] = "Y";
                    $data["MSG"]   = "Passwords not matching";
                }

            }else{
                $error = TRUE;
                $data["Error"] = "Y";
                $data["MSG"]   = "Please enter passwords";
            }

            if($this->model_company->hasUsername(array('username'=>$username)))
            {
                $error = TRUE;
                $data["Error"] = "Y";
                $data["MSG"]   = "Username already taken";
            }

            if(!$error)
            {
                if ($this->modelNameAlias->isExist($is_exist_array) == FALSE)
                {
                    //If there is any image uploaded for profile
                    if (!empty($image1_name))
                    {
                        $upload_array   =   $this->upload_image('userfile', $image1_name);
                        $Image1Name     =   $upload_array["ImageName"];
                        $data["MSG"]    =   $upload_array["msg"];
                        $data["Error"]  =   $upload_array["err"];
                        $uploadstatus   =   $upload_array["ups"];
                    }

                    //if there is any CV uploaded
                    if(!empty($cvFile))
                    {
                        $upload_array  =  $this->upload_file('filecv', $cvFile);
                        $CvName     =   $upload_array["FileName"];
                        $data["MSG"]    =   $upload_array["msg"];
                        $data["Error"]  =   $upload_array["err"];
                        $uploadstatus   =   $upload_array["ups"];
                    }

                    //Add to language table
                    if(count($language) == 0)
                    {
                        $uploadstatus == 'Error';
                        $data["MSG"]    =   'You must chosen a language';
                        $data["Error"]  =   'Y';
                    }


                    if ($uploadstatus != "Error")
                    {

                        $orderbyID      = $this->modelNameAlias->lastOrderID();
                        $code = $this->model_company->genUniqCode();
                        $uniqTokn = $this->model_company->genUniqToken($username);
                        $hashKey = $this->model_company->genhashKey($cpwd, $uniqTokn);

                        $data_array     = array(

                            "name" => mysql_real_escape_string($name),
                            "code" => mysql_real_escape_string($code),
                            "contact_no" => mysql_real_escape_string($contact_no),
                            "email" => mysql_real_escape_string($email),
                            "username" => mysql_real_escape_string($username),
                            "uniq_token" => mysql_real_escape_string($uniqTokn),
                            "hash_key" => mysql_real_escape_string($hashKey),
                            "r_password" => mysql_real_escape_string($cpwd),
                            "description" => mysql_real_escape_string($description),
                            "model_region" => mysql_real_escape_string($model_region),
                            "promotes" => serialize($promotes),
                            "model_info" => mysql_real_escape_string($model_info),
                            "cv_path" => mysql_real_escape_string($CvName),
                            "orderby" => mysql_real_escape_string($orderbyID->orderby + 1),
                            "is_active" => mysql_real_escape_string($is_active),
                            "added_date" => date("Y-m-d H:i:s")
                        );

                        $last_insert_id = $this->modelNameAlias->insertRecord($data_array);
                        $logData        = getLogDetails($this->getModuleInfo()->module_name, $last_insert_id);
                        $this->modelAdminLogs->insertLog($logData["insertDesc"]);

                        //update the language spoken by model
                        $this->model_company->removeLangByModel($last_insert_id);

                        foreach ($language as $key => $value) {
                            $this->model_company->setLanguage($last_insert_id,$value);
                        }

                        //If there are images for gallery
                        $this->load->library('upload');

                        $cpt = count($_FILES['image']['name']);

                        for($i=0; $i<$cpt; $i++)
                        {

                            if($_FILES['image']['tmp_name'][$i] != "")
                            {
                                $Image1Name = substr(md5(uniqid(rand())),0,15);
                                $Image1Name = "IMG-".$Image1Name.strrchr($image1_name,".");

                                $config = array();
                                $config['upload_path'] = COMPANY_IMAGE_UP_PATH;
                                if (move_uploaded_file($_FILES['image']['tmp_name'][$i], COMPANY_IMAGE_UP_PATH.$Image1Name)) {

                                    include_once(CLASSES_PATH."/thumbnail_images.class.php");
                                    $obj_img = new thumbnail_images();
                                    $obj_img->NewWidth   = 212;
                                    $obj_img->NewHeight  = 260;
                                    $obj_img->Cropping   = 'Y';
                                    $obj_img->PathImgOld = COMPANY_IMAGE_UP_PATH."/".$Image1Name;
                                    $obj_img->PathImgNew = COMPANY_THUMB_UP_PATH."/".$Image1Name;
                                    $obj_img->create_thumbnail_images();

                                    $save_gallery = array(
                                        'company_fk' => $last_insert_id,
                                        'image' => $Image1Name,
                                        'added_date' => date('Y-m-d h:i:s A')
                                    );

                                    $this->model_company->save_photos($save_gallery);

                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }

                            }

                            //Update on the table for the model as gallery

                        }
                        //If there are images for gallery

                        $data["MSG"] = "Record has been inserted successfully!";

                        $data["name"]      = "";
                        $data["contact_no"]      = "";
                        $data["email"]      = "";
                        $data["language"]      = "";
                        $data["description"]      = "";
                        $data["username"]      = "";
                        $data["pwd"]      = "";
                        $data["cpwd"]      = "";

                    }

                }
                else
                {
                    $data["Error"] = "Y";
                    $data["MSG"]   = "Record already exists!";
                }

            }

            if ($data["Error"] == "Y")
            {
                $data["name"]        = $name;
                $data["contact_no"]  = $contact_no;
                $data["email"]       = $email;
                $data["language"]    = $language;
                $data["description"]  = $description;
                $data["username"]     =  $username;
                $data["is_active"]    = $is_active;

            }

            if (!isset($data["Error"]) && $_POST["submit"] == "Save & Close")
            {
                redirect(HOST_URL . "/" . $folder . "/a");
            }
        }

        $this->load->view($this->config->item('admin_folder') . "/template", $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Edit Record
    |--------------------------------------------------------------------------
    */
    public function edit()
    {
        $folder              = $this->getFolder();
        $data["folder_name"] = $folder;
        $data["module_name"] = $this->getModuleInfo()->module_name;
        $data["page"]        = $folder . "/edit";

        $record_id           = $this->uri->segment(3);
        $data_record         = $this->modelNameAlias->get_details($record_id);
        $data["data_record"] = $data_record;

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $data['mdlLngs'] = $this->model_company->getLanguageByModel($record_id);

        if ($this->input->post("delete_file")=="Y")
        {
            $file_name      = $this->input->post("file_name", TRUE);
            $field_name     = $this->input->post("field_name", TRUE);

            if (!empty($file_name))
            {
                if (file_exists($this->thumb_up_path.$file_name)) { unlink($this->thumb_up_path.$file_name); }
                if (file_exists($this->image_up_path.$file_name)) { unlink($this->image_up_path.$file_name); }
                $data_array = array($field_name=>'');
                $this->modelNameAlias->updateRecord($data_array, $record_id);
                $data["MSG"] = "Selected File has been deleted successfully.";

                $data_record = $this->modelNameAlias->get_details($record_id);
                $data["data_record"] = $data_record;
            }
        }

        //Delete gallery file image
        if ($this->input->post("delete_gallery_file")=="Y")
        {
            $file_name      = $this->input->post("file_gallery_name", TRUE);
            $field_name     = $this->input->post("field_gallery_name", TRUE);

            if (!empty($file_name))
            {
                if (file_exists($this->thumb_up_path.$file_name)) { unlink($this->thumb_up_path.$file_name); }
                if (file_exists($this->image_up_path.$file_name)) { unlink($this->image_up_path.$file_name); }

                $this->model_company->deleteCompanyPhoto($record_id,$file_name);
                $data["MSG"] = "Selected File has been deleted successfully.";
            }

        }

        if ($this->input->post("btnsubmit") == "Save & Close")
        {
            $name    = $this->input->post("name", TRUE);
            $contact_no    = $this->input->post("contact_no", TRUE);
            $email    = $this->input->post("email", TRUE);
            $language    = $this->input->post("language", TRUE);
            $is_active  = $this->input->post("is_active", TRUE);
            $description    = $this->input->post("description", TRUE);
            $model_region   = $this->input->post("model_region", TRUE);
            $promotes    = $this->input->post("promotes", TRUE);
            $model_info    = $this->input->post("model_info", TRUE);
            $pwd = $this->input->post("pwd", TRUE);
            $cpwd = $this->input->post("cpwd", TRUE);

            $error = FALSE;

            if($pwd != "" || $cpwd != "")
            {

                if(strlen($pwd) < 8 || strlen($pwd) > 12)
                {
                    $error = TRUE;
                    $data["Error"] = "Y";
                    $data["MSG"]   = "Password must be minimum of 8 and maximum of 12 characters";
                }

                if($pwd != $cpwd)
                {
                    $error = TRUE;
                    $data["Error"] = "Y";
                    $data["MSG"]   = "Passwords not matching";
                }

            }

            if($this->input->post("btnsubmit")=="Save & Close" && !$error)
            {
                //if there is any CV uploaded
                if(!empty($cvFile))
                {
                    $upload_array  =  $this->upload_file('filecv', $cvFile);
                    $CvName     =   $upload_array["FileName"];
                    $data["MSG"]    =   $upload_array["msg"];
                    $data["Error"]  =   $upload_array["err"];
                    $uploadstatus   =   $upload_array["ups"];
                }else{
                    $CvName = $data_record->cv_path;
                }

                $data_array     = array(
                    "name" => mysql_real_escape_string($name),
                    "contact_no" => mysql_real_escape_string($contact_no),
                    "email" => mysql_real_escape_string($email),
                    "model_region" => mysql_real_escape_string($model_region),
                    "promotes" => serialize($promotes),
                    "model_info" => mysql_real_escape_string($model_info),
                    "description" => mysql_real_escape_string($description),
                    "cv_path" => mysql_real_escape_string($CvName),
                    "is_active" => mysql_real_escape_string($is_active)
                );

                if($pwd != "" && $cpwd != "")
                {
                    $hashKey = $this->model_models->genhashKey($pwd, $data_record->uniq_token);
                    $data_array["hash_key"] = $hashKey;
                    $data_array["r_password"] = $cpwd;
                }

                $this->modelNameAlias->updateRecord($data_array, $record_id);
                $logData = getLogDetails($this->getModuleInfo()->module_name, $record_id);

                //Add to language table
                if(count($language) > 0)
                {
                    $this->model_company->removeLangByModel($record_id);

                    foreach ($language as $key => $value) {
                        $this->model_company->setLanguage($record_id,$value);
                    }
                }

                //If there are images for gallery
                    $this->load->library('upload');

                    $cpt = count($_FILES['image']['name']);

                    for($i=0; $i<$cpt; $i++)
                    {

                        if($_FILES['image']['tmp_name'][$i] != "")
                        {
                            $image1_name2 = $_FILES['image']['name'][$i];
                            $Image1Name = substr(md5(uniqid(rand())),0,15);
                            $Image1Name = "IMG-".$Image1Name.strrchr($image1_name2,".");

                            $config = array();
                            $config['upload_path'] = COMPANY_IMAGE_UP_PATH;
                            if (move_uploaded_file($_FILES['image']['tmp_name'][$i], COMPANY_IMAGE_UP_PATH.$Image1Name)) {

                                include_once(CLASSES_PATH."/thumbnail_images.class.php");
                                $obj_img = new thumbnail_images();
                                $obj_img->NewWidth   = 212;
                                $obj_img->NewHeight  = 260;
                                $obj_img->Cropping   = 'Y';
                                $obj_img->PathImgOld = COMPANY_IMAGE_UP_PATH."/".$Image1Name;
                                $obj_img->PathImgNew = COMPANY_THUMB_UP_PATH."/".$Image1Name;
                                $obj_img->create_thumbnail_images();

                                $save_gallery = array(
                                    'company_fk' => $record_id,
                                    'image' => $Image1Name,
                                    'added_date' => date('Y-m-d h:i:s A')
                                );

                                $this->model_company->save_photos($save_gallery);

                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }

                        }

                    }
                    //If there are images for gallery

                $this->modelAdminLogs->insertLog($logData["editDesc"]);
                $data["MSG"] = "Record has been updated successfully!";


            }
						redirect(HOST_URL . "/" . $folder . "/e");

        }

        $data["name"]         = stripslashes($data_record->name);
        $data["contact_no"]         = stripslashes($data_record->contact_no);
        $data["email"]              = stripslashes($data_record->email);
        $data["model_region"]          = stripslashes($data_record->model_region);
        $data["promotes"]          = stripslashes($data_record->promotes);
        $data["model_info"]          = stripslashes($data_record->model_info);
        $data["language"]           = stripslashes($data_record->language);
        $data["description"]        = stripslashes($data_record->description);
				$data["promotes"]        = unserialize($data_record->promotes);
        $data["is_active"]          = stripslashes($data_record->is_active);
        $data["username"]        = stripslashes($data_record->username);

        //get the image gallery for the model
        $data['gallery'] = $this->model_company->getCompanyPicsByPk($record_id);

        $this->load->view($this->config->item("admin_folder") . "/template", $data);
    }
    /*
    |--------------------------------------------------------------------------
    | Return Record Details
    |--------------------------------------------------------------------------
    */
    public function view()
    {
        $folder              = $this->getFolder();
        $data["folder_name"] = $folder;
        $data["module_name"] = $this->getModuleInfo()->module_name;
        $data["page"]        = $folder . "/view";

        $record_id           = $this->uri->segment(3);
        $data_record         = $this->modelNameAlias->get_details($record_id);
        $data["data_record"] = $data_record;

        $data['languages'] = $this->model_company->getLanguageByModel($record_id);

        //Get the image gallery for the model
        $data['gallery'] = $this->model_company->getCompanyPicsByPk($record_id);

        $this->load->view($this->config->item("admin_folder") . "/template", $data);
    }
    /*
    |--------------------------------------------------------------------------
    | Delete Record
    |--------------------------------------------------------------------------
    */
    public function delete()
    {
        $folder              = $this->getFolder();
        $data["folder_name"] = $folder;
        $data["module_name"] = $this->getModuleInfo()->module_name;
        $data["page"]        = $folder . "/delete";

        $record_id = $this->uri->segment(3);
        if (!empty($record_id))
        {
            $data_list         = $this->modelNameAlias->get_one_record_for_delete($record_id);
            $data["data_list"] = $data_list;
        }
        else
        {
            $id_array          = $_POST['EditBox'];
            $data_list         = $this->modelNameAlias->get_all_records_for_delete($id_array);
            $data["data_list"] = $data_list;
        }

        $data["Error"] = "Y";
        $data["MSG"]   = "Are you sure you want to delete the Record?";

        if ($this->input->post("btnsubmit") == "Delete")
        {
            $EditBox = $_POST["EditBox"];
            for ($j = 0; $j < count($EditBox); $j++)
            {
                $data_record = $this->modelNameAlias->get_details($EditBox[$j]);
                $image_name  = stripslashes($data_record->image1);
                if (!empty($image_name))
                {
                    if (file_exists($this->thumb_up_path . $image_name))
                    {
                        unlink($this->thumb_up_path . $image_name);
                    }
                    if (file_exists($this->image_up_path . $image_name))
                    {
                        unlink($this->image_up_path . $image_name);
                    }
                }
                $this->modelNameAlias->deleteRecord($EditBox[$j]);
                $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                $this->modelAdminLogs->insertLog($logData["deleteDesc"]);
            }

            redirect(HOST_URL . "/" . $folder . "/d/" . count($EditBox));
        }

        $this->load->view($this->config->item("admin_folder") . "/template", $data);
    }


}
