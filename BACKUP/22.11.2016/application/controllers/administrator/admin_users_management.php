<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin_users_management extends Admin_Controller {
		
/*
|--------------------------------------------------------------------------
| Configurations
|--------------------------------------------------------------------------
*/			
		protected $model_name 	= "model_admin_user";
		public $image_up_path 	= ADMIN_IMAGE_UP_PATH;
		public $thumb_up_path 	= ADMIN_THUMB_UP_PATH;
		public $image_show_path = ADMIN_IMAGE_PATH;
		public $thumb_show_path = ADMIN_THUMB_PATH;
		public $search_field 	= "full_name";
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
		}
/*
|--------------------------------------------------------------------------
| Functions to get Folder Name and Module Name
|--------------------------------------------------------------------------
*/			
		public function getFolder(){
			return $this->uri->segment(1);
		}
		public function getModuleInfo(){
			$folder_name = $this->getFolder();
			$this->load->model($this->config->item('admin_folder')."/model_modules");
			$data_module = $this->model_modules->get_module_info($folder_name);
			return $data_module;
		}
		public function getConfig(){
			$this->load->model($this->config->item('admin_folder')."/model_configurations");
			$data_config = $this->model_configurations->get_config();
			return $data_config;
		}
		protected function getImageConfig($imgName){
			$config['upload_path'] 		= $this->image_up_path;
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= '5000';
			$config['max_width']  		= '5000';
			$config['max_height']  		= '5000';
			$config['file_name'] 		= $imgName;
			return $config;
		}
		protected function getThumbConfig($imgName){
			$thumb_width		= ($this->getModuleInfo()->thumb_width  ? $this->getModuleInfo()->thumb_width  : $this->getConfig()->thumb_width);
			$thumb_height		= ($this->getModuleInfo()->thumb_height ? $this->getModuleInfo()->thumb_height : $this->getConfig()->thumb_height);
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= $this->image_up_path."/".$imgName;
			$config['new_image']    	= $this->thumb_up_path."/".$imgName;
			$config['thumb_marker']		= "";
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']  			= $thumb_width;
			$config['height'] 			= $thumb_height;
			return $config;
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
			$where_array["is_prog"] = "N";
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
		public function add(){
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/add";
			
			$this->load->model("model_modules");
			$data["all_modules"] = $this->model_modules->get_all_modules();
			
			if(isset($_POST) && count($_POST) != 0) {
				$full_name 			= $this->input->post("full_name", TRUE);
				$email 				= $this->input->post("email", TRUE);
				$phone 				= $this->input->post("phone", TRUE);
				$username 			= $this->input->post("username", TRUE);
				$password 			= $this->input->post("password", TRUE);
				$user_type 			= $this->input->post("user_type", TRUE);				
				$rights_array		= $_POST["rights"];
				
				$is_active 			= $this->input->post("is_active", TRUE);
				$image1_name		= $_FILES["image1"]["name"];
				$image1_tmp_name	= $_FILES["image1"]["tmp_name"];
				
				$is_exist_array   = array('username'=>$username);
				if ($this->modelNameAlias->isExist($is_exist_array)==FALSE){
					
					if (!empty($image1_name)){						
						$Ext 			= strrchr($image1_name,".");
						$Image1Name = substr(md5(uniqid(rand())),0,15);
						$Image1Name = "IMG-".$Image1Name.$Ext;
						/* --------- Image Uploading --------- */
						$config = $this->getImageConfig($Image1Name);
						$this->load->library('upload', $config);
						if (!$this->upload->do_upload('image1')){
							$data["MSG"] 	= strip_tags($this->upload->display_errors());
							$data["Error"] = "Y"; $uploadstatus 	= "Error";
						}
						/* --------- Thumbnail Uploading --------- */
						$thumbConfig = $this->getThumbConfig($Image1Name);
						$this->load->library('image_lib', $thumbConfig);
						if ( ! $this->image_lib->resize()) {
							 $data["MSG"] 	 = strip_tags($this->image_lib->display_errors());
							 $data["Error"] = "Y"; $uploadstatus  = "Error";
						}
					}
					
					if ($uploadstatus != "Error"){
						$data_array = array(
							"full_name"		=>		mysql_real_escape_string($full_name),
							"email"			=>		mysql_real_escape_string($email),
							"phone"			=>		mysql_real_escape_string($phone),
							"username"		=>		mysql_real_escape_string($username),
							"password"		=>		sha1($this->config->item("salt").$password.$this->config->item("salt")),
							"user_type"		=>		mysql_real_escape_string($user_type),
							"image1"			=>		mysql_real_escape_string($Image1Name),
							"is_active"		=>		mysql_real_escape_string($is_active),
							"added_date"	=>		date("Y-m-d H:i:s")
						);
						$last_insert_id = $this->modelNameAlias->insertRecord($data_array);
						if ($user_type=="SA"){
							for ($m=0; $m<count($rights_array); $m++){
								$data_array = array ("user_id"=>$last_insert_id, "module_id"=>$rights_array[$m]);
								$this->modelNameAlias->insertRights($data_array);
							}
						}
						$logData = getLogDetails("Admin Users Management", $last_insert_id);
						$this->modelAdminLogs->insertLog($logData["insertDesc"]);
						$data["MSG"] = "Record has been inserted successfully!";
					}
				}else{
					$data["Error"] = "Y";
					$data["MSG"] = "Record already exists!";
 				}
				
				if ($data["Error"] == "Y"){
					$data["full_name"] 		= $full_name;
					$data["email"] 			= $email;
					$data["phone"] 			= $phone;
					$data["username"] 		= $username;
					$data["is_active"] 	= $is_active;
				}
				if (!isset($data["Error"]) && $_POST["submit"]=="Save & Close"){
					redirect(HOST_URL."/".$folder."/a");
				}	
			} //if(isset($_POST)
			
			$this->load->view($this->config->item('admin_folder')."/template", $data);		
		}
/*
|--------------------------------------------------------------------------
| Edit Record
|--------------------------------------------------------------------------
*/	
		public function edit(){
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/edit";
			
			$record_id = $this->uri->segment(3);
			if ($record_id != 2){
			$data_record = $this->modelNameAlias->get_details($record_id);
			}
			$data["data_record"] = $data_record;
			
			$data_right = $this->modelNameAlias->getRights($record_id);
			$data["data_right"] = $data_right;
			
			$this->load->model("model_modules");
			$data["all_modules"] = $this->model_modules->get_all_modules();
			
			if ($this->input->post("delete_image")=="Y"){
				$image_name = stripslashes($data_record->image1);
				if (!empty($image_name)){
					if (file_exists($this->thumb_up_path.$image_name)) { unlink($this->thumb_up_path.$image_name); }
					if (file_exists($this->image_up_path.$image_name)) { unlink($this->image_up_path.$image_name); }
					$data_array = array('image1'=>'');
					$this->modelNameAlias->updateRecord($data_array, $record_id);
					$data["MSG"] = "Image has been deleted successfully.";
					
					$data_record = $this->modelNameAlias->get_details($record_id);
					$data["data_record"] = $data_record;
				}
			}
			
			if($this->input->post("btnsubmit")=="Save & Close") {
				$full_name 			= $this->input->post("full_name", TRUE);
				$email 				= $this->input->post("email", TRUE);
				$phone 				= $this->input->post("phone", TRUE);
				$user_type 			= $this->input->post("user_type", TRUE);				
				$rights_array		= $_POST["rights"];
				
				$is_active 			= $this->input->post("is_active", TRUE);
				$image1_name		= $_FILES["image1"]["name"];
				$image1_tmp_name	= $_FILES["image1"]["tmp_name"];
				
				$is_exist_array   = array('username'=>$username, 'id !='=>$record_id);
				if ($this->modelNameAlias->isExist($is_exist_array)==FALSE){
					
					if (!empty($image1_name)){						
						$Ext 			= strrchr($image1_name,".");
						$Image1Name = substr(md5(uniqid(rand())),0,15);
						$Image1Name = "IMG-".$Image1Name.$Ext;
						/* --------- Image Uploading --------- */
						$config = $this->getImageConfig($Image1Name);
						$this->load->library('upload', $config);
						if (!$this->upload->do_upload('image1')){
							$data["MSG"] 	= strip_tags($this->upload->display_errors());
							$data["Error"] = "Y"; $uploadstatus 	= "Error";
						}
						/* --------- Thumbnail Uploading --------- */
						$thumbConfig = $this->getThumbConfig($Image1Name);
						$this->load->library('image_lib', $thumbConfig);
						if ( ! $this->image_lib->resize()) {
							 $data["MSG"] 	 = strip_tags($this->image_lib->display_errors());
							 $data["Error"] = "Y"; $uploadstatus  = "Error";
						}
					}else{
						$Image1Name = $data_record->image1;
					}
					
					if ($uploadstatus != "Error"){
						$data_array = array(
							"full_name"		=>		mysql_real_escape_string($full_name),
							"email"			=>		addslashes($email),
							"phone"			=>		addslashes($phone),
							"user_type"		=>		addslashes($user_type),
							"image1"			=>		mysql_real_escape_string($Image1Name),
							"is_active"		=>		mysql_real_escape_string($is_active)
						);
						$this->modelNameAlias->updateRecord($data_array, $record_id);
						if ($user_type=="SA"){
							$this->modelNameAlias->deleteRights($record_id);
							for ($m=0; $m<count($rights_array); $m++){
								$data_array = array ("user_id"=>$record_id, "module_id"=>$rights_array[$m]);
								$this->modelNameAlias->insertRights($data_array);
							}
						}
						$logData = getLogDetails("Admin Users Management", $record_id);
						$this->modelAdminLogs->insertLog($logData["editDesc"]);
						$data["MSG"] = "Record has been updated successfully!";
					}
				}else{
					$data["Error"] = "Y";
					$data["MSG"] = "Record already exists!";
 				}
				
				redirect(HOST_URL."/".$folder."/e");
			}
			
			$data["full_name"] 		= stripslashes($data_record->full_name);
			$data["email"] 			= stripslashes($data_record->email);
			$data["phone"] 			= stripslashes($data_record->phone);
			$data["username"] 		= stripslashes($data_record->username);
			$data["user_type"] 		= stripslashes($data_record->user_type);
			$data["is_active"]   	= stripslashes($data_record->is_active);
		
			$image_name = stripslashes($data_record->image1);			
			$data["image_name"] = $image_name;
			if (!empty($image_name)){
				$data["thumb_path"] = $this->thumb_show_path.$image_name;
				$data["bigImg_path"] = $this->image_show_path.$image_name;
			}
			
			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}
/*
|--------------------------------------------------------------------------
| Return Record Details
|--------------------------------------------------------------------------
*/	
		public function view(){
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/view";
			
			$record_id = $this->uri->segment(3);
			if ($record_id != 2){
			$data_record = $this->modelNameAlias->get_details($record_id);
			}
			$data["data_record"] = $data_record;
			
			$image_name = $data_record->image1;
			$data["image_name"] = $image_name;
			if (!empty($image_name)){
				$data["thumb_path"] = $this->thumb_show_path.$image_name;
				$data["bigImg_path"] = $this->image_show_path.$image_name;
			}
			
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
				if ($record_id != 2){
				$data_list = $this->modelNameAlias->get_one_record_for_delete($record_id);
				$data["data_list"] = $data_list;
				}
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
					$logData = getLogDetails("Admin Users Management", $EditBox[$j]);
					$this->modelAdminLogs->insertLog($logData["deleteDesc"]);
				}
				
				redirect(HOST_URL."/".$folder."/d/".count($EditBox));
			}
			
			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}		
/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/	
		public function settings(){
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/settings";
			
			$mod_id = $this->getModuleInfo()->id;
			$thumb_width = $this->getModuleInfo()->thumb_width;
			$thumb_height = $this->getModuleInfo()->thumb_height;
			
			$data["thumb_width"] = $thumb_width;
			$data["thumb_height"] = $thumb_height;
			
			if ($this->input->post("btnsubmit")=="Save & Close"){
				$thumb_width  = $this->input->post("thumb_width", TRUE);
				$thumb_height = $this->input->post("thumb_height", TRUE);
				$where_array = array('thumb_width'=>$thumb_width, 'thumb_height'=>$thumb_height);
				
				$this->load->model($this->config->item('admin_folder')."/model_modules");
				$this->model_modules->updateRecord($where_array, $mod_id);
			
				redirect(HOST_URL."/".$folder);
			}
			
			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}




		
	}