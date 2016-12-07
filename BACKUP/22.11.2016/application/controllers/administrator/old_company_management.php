<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Company_management extends Admin_Controller {

/*
|--------------------------------------------------------------------------
| Configurations
|--------------------------------------------------------------------------
| Note: Functions like settings, getModuleInfo, getImageConfig, upload_image etc are
| defined in My Controller file located in /application/core.
|
*/
		protected $model_name 	= "model_company_management";
		public $search_field 	= "name";
		public $module_version 	= "1.0";
/*
|--------------------------------------------------------------------------
| Constructor
|--------------------------------------------------------------------------
*/
		public function __construct(){
				parent::__construct();
				$this->load->model($this->config->item('admin_folder')."/model_logs", 'modelAdminLogs');
				$this->load->model($this->config->item('admin_folder')."/".$this->model_name, 'modelNameAlias');

				$this->load->model('model_country','modelCtryAlias');
				$this->load->model('model_company');
				$this->load->model('model_languages','modelLangAlias');
		}
/*
|--------------------------------------------------------------------------
| Return All Records
|--------------------------------------------------------------------------
*/
		public function index(){

			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/home";

			$base_url .= HOST_URL."/".$folder."/index";
			$data_search = $this->modelNameAlias->auto_complete_data_for_search();
			$data["data_search"] = $data_search;

			/* --------------------------
			|	 Common Features in All Modules
			---------------------------*/
			$common_array  =  $this->common_features();
			$base_url	  .=	$common_array["base_url"];
			$sortby			=	$common_array["sortby"];
			$sortWith		=	$common_array["sortWith"];
			$sortImg			=	$common_array["sortImg"];
			$cmsg				=	$common_array["msg"];
			$cerr				=	$common_array["err"];
			$paging			=	$common_array["paging"];
			$filter_by		=	$common_array["filter_by"];
			$searchBox		=	$common_array["searchBox"];
			$urlparams		=	$common_array["urlparams"];
			$by				=	$common_array["by"];
			$uri_array		=	$common_array["uri_array"];

			$data["sortby"]		=	$sortby;
			$data["MSG"]			=	$cmsg;
			$data["Error"]			=	$cerr;
			$data["sort_".$sortWith] = $sortImg;
			$data["paging"]      = $paging;
			$data["filter_by"]   = $filter_by;
			$data["searchBox"]   = $searchBox;
			$data["urlparams"]   = $urlparams;

			if (!empty($searchBox))			{	$where_array[$this->search_field." LIKE "] = $searchBox."%"; }
			if ($filter_by=="published")  {  $where_array["is_active"] = "Y";	}
			if ($filter_by=="unpublished"){  $where_array["is_active"] = "N";	}

			/* --------------------------
			|	 Pagination
			---------------------------*/
			$this->load->library('pagination');
			$offset    = (array_key_exists('offset',$uri_array) ? trim($uri_array["offset"]) : 0);
			$limit     = (!empty($paging) ? $paging : "20" );
			$base_url .= "/offset";
			$total_records = $this->modelNameAlias->countTotal($where_array);
			$uri_segments  = $this->uri->total_segments();
			$config 			= custom_pagination($limit,$total_records,$base_url, $uri_segments);
			$this->pagination->initialize($config);
			$data['links'] = $this->pagination->create_links();

			/* --------------------------
			|	 All Records List
			---------------------------*/
			$data_list = $this->modelNameAlias->get_all_records($where_array, $limit, $offset, $sortWith, $sortby);
			$data["data_list"] = $data_list;

			$data["display_records"] = display_records($total_records, $offset, $paging);
			$data["total_records"]	 = $total_records;
			$data['offset'] 			 = $offset;
			$data["paging"]    		 = $limit;
			$data["image_show_path"] = $this->image_show_path;
			$data["thumb_show_path"] = $this->thumb_show_path;
			$this->load->view($this->config->item('admin_folder')."/template", $data);
		}
/*
|--------------------------------------------------------------------------
| Add Record
|--------------------------------------------------------------------------
*/
		public function add()
		{
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/add";
			$error = FALSE;

			$data['countries'] = $this->modelCtryAlias->get_all_country();
			$data['languages'] = $this->modelLangAlias->getAllLanguages();

			if(isset($_POST) && count($_POST) != 0)
			{
				$name 			= $this->input->post("name", TRUE);
				$contact_no		= $this->input->post("contact_no", TRUE);
				$email		= $this->input->post("email", TRUE);
        $username 		= $this->input->post("username", FALSE);
        $pwd 			= $this->input->post("pwd", FALSE);
        $cpwd 			= $this->input->post("cpwd", FALSE);
				$description 	= $this->input->post("description", FALSE);
				$model_region 	= $this->input->post("model_region", FALSE);
				$promotes 	= $this->input->post("promotes", FALSE);
				$model_info 	= $this->input->post("model_info", FALSE);
				$is_active 		= $this->input->post("is_active", TRUE);

				$is_exist_array   = array('username'=>$name);


				//Check if there is any profile picture
				$image1_name        = $_FILES["userfile"]["name"];
				$image1_tmp_name    = $_FILES["userfile"]["tmp_name"];

				//Check if there is any CV uploaded
				$cvFile             = $_FILES["filecv"]["name"];
				$cvFile_tmp_name    = $_FILES["filecv"]["tmp_name"];

				if ($this->modelNameAlias->isExist($is_exist_array)==FALSE){

					if(strlen($pwd) <= 8 || strlen($pwd) >= 12)
					{
						$uploadstatus = "Error";
						$data["Error"] = "Y";
						$data["MSG"] = "Password length has to be a min. of 8 Characters and max. of 12.";
					}

					if($pwd != $cpwd)
					{
						$uploadstatus = "Error";
						$data["Error"] = "Y";
						$data["MSG"] = "Passwords not matching.";
					}

					if($this->model_company->hasUsername($username))
					{
							$error = TRUE;
							$data["Error"] = "Y";
							$data["MSG"]   = "Username already taken";
					}

					if ($uploadstatus != "Error" && !$error){

						$orderbyID      = $this->modelNameAlias->lastOrderID();
						$code = $this->model_company->genUniqCode();
						$uniqTokn = $this->modelNameAlias->genUniqToken($username);
            $hashKey = $this->modelNameAlias->genhashKey($pwd, $uniqTokn);

						$data_array = array(
							"orderby"			=>		mysql_real_escape_string($orderbyID->orderby+1),
							"name"				=>		mysql_real_escape_string($name),
							"code"				=>		mysql_real_escape_string($code),
							"contact_no"		=>		mysql_real_escape_string($contact_no),
							"email"			=>		mysql_real_escape_string($email),

							"username"			=>		mysql_real_escape_string($username),
							"uniq_token"		=>		mysql_real_escape_string($uniqTokn),
							"hash_key"			=>		mysql_real_escape_string($hashKey),
							"r_password"		=>		mysql_real_escape_string($pwd),

							"description"		=>		addslashes($description),

							"is_active"			=>		mysql_real_escape_string($is_active),
							"added_date"		=>		date("Y-m-d H:i:s")
						);

						$last_insert_id = $this->modelNameAlias->insertRecord($data_array);
						$logData = getLogDetails($this->getModuleInfo()->module_name, $last_insert_id);
						$this->modelAdminLogs->insertLog($logData["insertDesc"]);
						$data["MSG"] = "Record has been inserted successfully!";

						$data["name"] 				= "";
						$data["contact_no"] 		= "";
						$data["country"] 			= "";
						$data["username"] 			= "";
						$data["pwd"] 				= "";
						$data["cpwd"] 				= "";
						$data["description"] 		= "";
					}
				}else{
						$data["Error"] = "Y";
						$data["MSG"] = "Record already exists!";
 				}

				if ($data["Error"] == "Y"){

						$data["name"] 				= $name;
						$data["contact_no"] 		= $contact_no;
						$data["country"] 			= $country;
						$data["username"] 			= $username;
	 					$data["description"] 		= $description;
						$data["is_active"] 			= $is_active;
				}

				if (!isset($data["Error"]) && $_POST["submit"]=="Save & Close"){
						redirect(HOST_URL."/".$folder."/a");
						exit();
				}

			}

			$this->load->view($this->config->item('admin_folder')."/template", $data);
		}
/*
|--------------------------------------------------------------------------
| Edit Record
|--------------------------------------------------------------------------
*/
		public function edit()
		{

			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/edit";

			$record_id = $this->uri->segment(3);
			$data_record = $this->modelNameAlias->get_details($record_id);
			$data["data_record"] = $data_record;
			$data['countries'] = $this->modelCtryAlias->get_all_country();

			if($this->input->post("btnsubmit")=="Save & Close")
			{
				$name 			= $this->input->post("name", TRUE);
				$contact_no		= $this->input->post("contact_no", TRUE);

                $username 		= $this->input->post("username", FALSE);
                $pwd 			= $this->input->post("pwd", FALSE);
                $cpwd 			= $this->input->post("cpwd", FALSE);
				$country 		= $this->input->post("country", FALSE);
				$description 	= $this->input->post("description", FALSE);
				$is_active 		= $this->input->post("is_active", TRUE);

				$is_exist_array   = array('name'=>$name, 'id !='=>$record_id);

				if ($this->modelNameAlias->isExist($is_exist_array)==FALSE){

 					if($pwd != "")
					{
						if(strlen($pwd) <= 8 || strlen($pwd) >= 12)
						{
							$uploadstatus = "Error";
							$data["Error"] = "Y";
							$data["MSG"] = "Password length has to be a min. of 8 Characters and max. of 12.";
						}

						if($pwd != $cpwd)
						{
							$uploadstatus = "Error";
							$data["Error"] = "Y";
							$data["MSG"] = "Passwords not matching.";
						}

						if($uploadstatus != "Error")
						{
							$uniqTokn = $this->modelNameAlias->genUniqToken($username);
						  	$hashKey = $this->modelNameAlias->genhashKey($pwd, $uniqTokn);
						}

					}else{

						$uniqTokn = $data_record->uniq_token;
						$hashKey  = $data_record->hash_key;
						$pwd	  = $data_record->r_password;
					}

					if ($uploadstatus != "Error")
					{

						$data_array = array(
							"name"				=>		mysql_real_escape_string($name),
							"contact_no"		=>		mysql_real_escape_string($contact_no),
							"username"			=>		mysql_real_escape_string($username),
							"country"			=>		mysql_real_escape_string($country),
							"uniq_token"		=>		mysql_real_escape_string($uniqTokn),
							"hash_key"			=>		mysql_real_escape_string($hashKey),
							"r_password"		=>		mysql_real_escape_string($pwd),
							"description"		=>		addslashes($description),
							"is_active"			=>		mysql_real_escape_string($is_active),
						);

						$this->modelNameAlias->updateRecord($data_array, $record_id);
						$logData = getLogDetails($this->getModuleInfo()->module_name, $record_id);
						$this->modelAdminLogs->insertLog($logData["editDesc"]);
						$data["MSG"] = "Record has been updated successfully!";
					}
				}else{
					$data["Error"] = "Y";
					$data["MSG"] = "Record already exists!";
 				}

				redirect(HOST_URL."/".$folder."/e");
				exit();
			}

			$data["name"] 				= stripslashes($data_record->name);
			$data["contact_no"] 		= stripslashes($data_record->contact_no);
			$data["country"] 			= stripslashes($data_record->country);
		 	$data["username"] 			= stripslashes($data_record->username);
 			$data["description"] 		= stripslashes($data_record->description);
			$data["is_active"]   		= stripslashes($data_record->is_active);

			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}
/*
|--------------------------------------------------------------------------
| Return Record Details
|--------------------------------------------------------------------------
*/
		public function view()
		{
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/view";

			$record_id = $this->uri->segment(3);
			$data_record = $this->modelNameAlias->get_details($record_id);
			$data["data_record"] = $data_record;

			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}
/*
|--------------------------------------------------------------------------
| Delete Record
|--------------------------------------------------------------------------
*/
		public function delete(){
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/delete";

			$record_id = $this->uri->segment(3);
			if (!empty($record_id)){
				$data_list = $this->modelNameAlias->get_one_record_for_delete($record_id);
				$data["data_list"] = $data_list;
			}else{
				$id_array 	= $_POST['EditBox'];
				$data_list = $this->modelNameAlias->get_all_records_for_delete($id_array);
				$data["data_list"] = $data_list;
			}

			$data["Error"] = "Y";
			$data["MSG"] = "Are you sure you want to delete the Record?";

			if ($this->input->post("btnsubmit")=="Delete"){
				$EditBox = $_POST["EditBox"];
				for ($j=0; $j<count($EditBox); $j++) {
					$data_record = $this->modelNameAlias->get_details($EditBox[$j]);
					$image_name = stripslashes($data_record->image1);
					if (!empty($image_name)){
						if (file_exists($this->thumb_up_path.$image_name)) { unlink($this->thumb_up_path.$image_name); }
						if (file_exists($this->image_up_path.$image_name)) { unlink($this->image_up_path.$image_name); }
					}
					$this->modelNameAlias->deleteRecord($EditBox[$j]);
					$logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
					$this->modelAdminLogs->insertLog($logData["deleteDesc"]);
				}

				redirect(HOST_URL."/".$folder."/d/".count($EditBox));
				exit();
			}

			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}


	}
