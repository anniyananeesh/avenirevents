<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Services_management extends Admin_Controller {
		
/*
|--------------------------------------------------------------------------
| Configurations
|--------------------------------------------------------------------------
| Note: Functions like settings, getModuleInfo, getImageConfig, upload_image etc are 
| defined in My Controller file located in /application/core.
|
*/			
		protected $model_name 	= "model_services_management";
		public $image_up_path 	= SERVICES_IMAGE_UP_PATH;
		public $thumb_up_path 	= SERVICES_THUMB_UP_PATH;
		public $image_show_path = SERVICES_IMAGE_PATH;
		public $thumb_show_path = SERVICES_THUMB_PATH;
		public $search_field 	= "heading_en";
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
		public function add(){
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
			$data["module_name"] = $this->getModuleInfo()->module_name;
			$data["page"] = $folder."/add";
			
			if(isset($_POST) && count($_POST) != 0) {
				$heading_en 		= $this->input->post("heading_en", TRUE);
				$heading_ar			= $this->input->post("heading_ar", TRUE);
                                
				$description_en 	= $this->input->post("description_en", FALSE);
				$description_ar 	= $this->input->post("description_ar", FALSE); 
				
				$is_active 			= $this->input->post("is_active", TRUE);
				$image1_name		= $_FILES["image1"]["name"];
				$image1_tmp_name	= $_FILES["image1"]["tmp_name"];

				$image2_name		= $_FILES["image2"]["name"];
				$image2_tmp_name	= $_FILES["image2"]["tmp_name"];
				
				$is_exist_array   = array('heading_en'=>$heading_en);

				if ($this->modelNameAlias->isExist($is_exist_array)==FALSE)
				{

					if (!empty($image1_name))
					{						
						$upload_array  =  $this->upload_image('image1', $image1_name);
						$Image1Name		=	$upload_array["ImageName"];
						$data["MSG"]	=	$upload_array["msg"];
						$data["Error"]	=	$upload_array["err"];
						$uploadstatus	=	$upload_array["ups"];
					}

					if (!empty($image2_name))
					{						
						$this->load->library('upload');
						$Image2Name = substr(md5(uniqid(rand())),0,15);
                      	$Image2Name = "IMG-".$Image2Name.strrchr($image2_name,".");

                      	$config = array();
                       	$config['upload_path'] = $this->image_up_path;
                       	if (!move_uploaded_file($image2_tmp_name, $this->image_up_path.$Image2Name)) {
                       		$uploadstatus = "Error";
                       	}

					}
					
					if ($uploadstatus != "Error"){

						$orderbyID = $this->modelNameAlias->lastOrderID();
						$data_array = array(
							"heading_en"		=>		mysql_real_escape_string($heading_en),
							"heading_ar"		=>		mysql_real_escape_string($heading_ar),
							"description_en"	=>		addslashes($description_en),
							"description_ar"	=>		addslashes($description_ar),
							"image1"			=>		mysql_real_escape_string($Image1Name),
							"home_image"		=>		mysql_real_escape_string($Image2Name),
							"orderby"			=>		mysql_real_escape_string($orderbyID->orderby+1),
							"is_active"			=>		mysql_real_escape_string($is_active),
							"added_date"		=>		date("Y-m-d H:i:s")
						);

						$last_insert_id = $this->modelNameAlias->insertRecord($data_array);
						$logData = getLogDetails($this->getModuleInfo()->module_name, $last_insert_id);

						$this->modelAdminLogs->insertLog($logData["insertDesc"]);
						$data["MSG"] = "Record has been inserted successfully!";
					
						$data["heading_en"] 			= "";
						$data["heading_ar"] 			= ""; 
						$data["description_en"] 		= "";
						$data["description_ar"] 		= ""; 
					}
				}else{
					$data["Error"] = "Y";
					$data["MSG"] = "Record already exists!";
 				}
				
				if ($data["Error"] == "Y"){
					$data["heading_en"] 		= $heading_en;
					$data["heading_ar"] 		= $heading_ar; 
                                        
					$data["description_en"] 	= $description_en;
					$data["description_ar"] 	= $description_ar; 
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
			
			if ($this->input->post("delete_file")=="Y")
			{
				$file_name 		= $this->input->post("file_name", TRUE);
				$field_name		= $this->input->post("field_name", TRUE);
				if (!empty($file_name)){
					if (file_exists($this->thumb_up_path.$file_name)) { unlink($this->thumb_up_path.$file_name); }
					if (file_exists($this->image_up_path.$file_name)) { unlink($this->image_up_path.$file_name); }
					$data_array = array($field_name=>'');
					$this->modelNameAlias->updateRecord($data_array, $record_id);
					$data["MSG"] = "Selected File has been deleted successfully.";
					
					$data_record = $this->modelNameAlias->get_details($record_id);
					$data["data_record"] = $data_record;
				}
			}
			
			if($this->input->post("btnsubmit")=="Save & Close")
			{
				$heading_en 		= $this->input->post("heading_en", TRUE);
				$heading_ar			= $this->input->post("heading_ar", TRUE); 

				$description_en 	= $this->input->post("description_en", FALSE);
				$description_ar 	= $this->input->post("description_ar", FALSE); 
				
				$is_active 			= $this->input->post("is_active", TRUE);
				$image1_name		= $_FILES["image1"]["name"];
				$image1_tmp_name	= $_FILES["image1"]["tmp_name"];

				$image2_name		= $_FILES["image2"]["name"];
				$image2_tmp_name	= $_FILES["image2"]["tmp_name"];
				
				$is_exist_array   = array('heading_en'=>$heading_en, 'id !='=>$record_id);
				if ($this->modelNameAlias->isExist($is_exist_array)==FALSE)
				{
					
					if (!empty($image1_name)){						
						$upload_array  =  $this->upload_image('image1', $image1_name, $data_record->image1);
						$Image1Name		=	$upload_array["ImageName"];
						$data["MSG"]	=	$upload_array["msg"];
						$data["Error"]	=	$upload_array["err"];
						$uploadstatus	=	$upload_array["ups"];
					}else{
						$Image1Name = $data_record->image1;
					}

					if (!empty($image2_name))
					{						
						$this->load->library('upload');
						$Image2Name = substr(md5(uniqid(rand())),0,15);
                      	$Image2Name = "IMG-".$Image2Name.strrchr($image2_name,".");

                      	$config = array();
                       	$config['upload_path'] = $this->image_up_path;
                       	if (!move_uploaded_file($image2_tmp_name, $this->image_up_path.$Image2Name)) {
                       		$uploadstatus = "Error";
                       	}

					}else{
						$Image2Name = $data_record->home_image;
					}
					
					if ($uploadstatus != "Error"){
						$data_array = array(
							"heading_en"		=>		mysql_real_escape_string($heading_en),
							"heading_ar"		=>		mysql_real_escape_string($heading_ar), 
    					    "description_en"	=>		addslashes($description_en),
    					    "home_image"		=>		addslashes($Image2Name),
							"description_ar"	=>		addslashes($description_ar), 
							"image1"			=>		mysql_real_escape_string($Image1Name),
							"is_active"			=>		mysql_real_escape_string($is_active)
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
			
			$data["heading_en"] 		= stripslashes($data_record->heading_en);
			$data["heading_ar"] 		= stripslashes($data_record->heading_ar); 
			$data["description_en"] 	= stripslashes($data_record->description_en);
			$data["description_ar"] 	= stripslashes($data_record->description_ar); 
			$data["is_active"]   		= stripslashes($data_record->is_active);
		
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