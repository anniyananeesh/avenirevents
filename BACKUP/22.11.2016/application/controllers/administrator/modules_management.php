<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Modules_management extends Admin_Controller {
		
/*
|--------------------------------------------------------------------------
| Configurations
|--------------------------------------------------------------------------
| Note: Functions like settings, getModuleInfo, getImageConfig etc are 
| defined in My Controller file located in /application/core.
|
*/			
		protected $model_name 	= "model_modules";
		public $search_field 	= "module_name";
		public $module_version 	= "1.0";
		public $base_url = "";
		public $urlparams = "";
		public $where_array = array();
		
		
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
			
			$this->base_url .= HOST_URL."/".$folder."/index";
			/* --------------------------
			|	 Save & Close Messages
			---------------------------*/
			if ($this->uri->segment(2)=="a") { $data["MSG"] = "Record has been inserted successfully!"; }else 
			if ($this->uri->segment(2)=="e") { $data["MSG"] = "Record has been updated successfully!"; } else
			if ($this->uri->segment(2)=="d") { $data["MSG"] = $this->uri->segment(3)." Records deleted successfully!"; }
			
			$uri_array = $this->uri->uri_to_assoc(3);			
			/* ------------------
			|	 Sorting
			--------------------*/					
			$sortWith	= (array_key_exists('sort',$uri_array) ? $uri_array["sort"] : "added_date");
			$sortby   	= (array_key_exists('by',$uri_array) ? $uri_array["by"] : "");
			$this->base_url  .= (array_key_exists('sort',$uri_array) ? "/sort/".$sortWith : "");
			$this->base_url  .= (array_key_exists('by',$uri_array) ? "/by/".$sortby : "");
			$sortby  	= (!isset($sortby) ? $sortby="ASC" : (($sortby=="DESC") ? $sortby = "ASC": $sortby="DESC"));
			$sortImg  	= (($sortby=="ASC") ? $sortImg = "sort_down.png" : $sortImg = "sort_up.png");
 			$data["sortby"] = $sortby;
			$data["sort_".$sortWith] = $sortImg;
			
			/* --------------------------
			|	 Save Order
			---------------------------*/
			if ($this->input->post("is_order")=="Y"){
				$order_array   = $_POST["orderby"];
				$id_array      = $_POST["idarray"];
				
				if (count(array_unique($order_array)) == count($order_array)){  
					for ($a=0; $a<count($order_array); $a++){
						$value 	= $order_array[$a];
						$id		= $id_array[$a];
						$data_array = array('orderby' => $value);
						$this->modelNameAlias->updateRecord($data_array, $id);
						$data["MSG"] = "Order saved";
					}
				}else{
					$data["Error"] = "Y";
					$data["MSG"] = "ERROR : Duplicate value exist in Order. Please check values again.";
				}
			}
			/* -----------------------
			|	 Publish and Unpublish
			-------------------------*/
			if ($this->input->post("btnsubmit")=="Publish"){
				$EditBox = $_POST["EditBox"];
				for ($j=0; $j<count($EditBox); $j++) { 
					$data_array = array('is_active' => 'Y');
					$this->modelNameAlias->updateRecord($data_array, $EditBox[$j]);
					$logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
					$this->modelAdminLogs->insertLog($logData["activeDesc"]);
				}
				if (count($EditBox)>1){ $record = "Records"; }else{ $record = "Record"; }
				$data["MSG"] = count($EditBox)." $record published successfully.";
			}
			if ($this->input->post("btnsubmit")=="Unpublish"){
				$EditBox = $_POST["EditBox"];
				for ($j=0; $j<count($EditBox); $j++) { 
					$data_array = array('is_active'=>'N');
					$this->modelNameAlias->updateRecord($data_array, $EditBox[$j]);
					$logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
					$this->modelAdminLogs->insertLog($logData["deactiveDesc"]);
				}
				if (count($EditBox)>1){ $record = "Records"; }else{ $record = "Record"; }
				$data["MSG"] = count($EditBox)." $record Unpublished successfully.";
			}
			/* --------------------------
			|	 Search
			---------------------------*/
			$data_search = $this->modelNameAlias->auto_complete_data_for_search();
			$data["data_search"] = $data_search;
			
			
			if ($this->input->post("paging")){
				$paging = $this->input->post("paging", TRUE);
			}else{
				$paging = (array_key_exists('paging',$uri_array) ? $uri_array["paging"] : "");
			}
			
			if ($this->input->post("filter_by")){
				$filter_by = $this->input->post("filter_by", TRUE);
			}else{
				$filter_by = (array_key_exists('filter',$uri_array) ? $uri_array["filter"] : "");
			}
			
			if ($this->input->post("searchBox")){
				$searchBox = $this->input->post("searchBox", TRUE);
			}else{
				$searchBox = (array_key_exists('search',$uri_array) ? urldecode($uri_array["search"]) : "");
			}
			
			$this->base_url	.= (!empty($paging) ? "/paging/".$paging : "");
			$this->base_url	.= (!empty($filter_by) ? "/filter/".$filter_by : "");
			$this->base_url  	.= (!empty($searchBox) ? "/search/".urlencode($searchBox) : "");
			
			$data["paging"]      = $paging;
			$data["filter_by"]   = $filter_by;
			$data["searchBox"]   = $searchBox;
			
			if (!empty($searchBox))			{	$this->where_array[$this->search_field] = $searchBox; }
			if ($filter_by=="published")  {  $this->where_array["is_active"] = "Y";	}
			if ($filter_by=="unpublished"){  $this->where_array["is_active"] = "N";	}
			
			if (!empty($filter_by)){ $this->urlparams .= "/filter_by/".$filter_by; }
			if (!empty($paging)){ $this->urlparams .= "/paging/".$paging; }
			$data["urlparams"] = $this->urlparams;
			/* --------------------------
			|	 Pagination
			---------------------------*/
			$this->load->library('pagination');
			$offset    = (array_key_exists('offset',$uri_array) ? trim($uri_array["offset"]) : 0);
			$limit     = (!empty($paging) ? $paging : "20" );			
			$this->base_url .= "/offset";			
			$total_records = $this->modelNameAlias->countTotal($this->where_array);
			$uri_segments  = $this->uri->total_segments();
			$config 			= custom_pagination($limit,$total_records,$this->base_url, $uri_segments);
			$this->pagination->initialize($config);
			$data['links'] = $this->pagination->create_links();
			
			/* --------------------------
			|	 All Records List
			---------------------------*/
			$data_list = $this->modelNameAlias->get_all_records($this->where_array, $limit, $offset, $sortWith, $sortby);
			$data["data_list"] = $data_list;
			
			
			
			$data['bgClass'] = "";
			$data["display_records"] = display_records($total_records, $offset, $paging);
			$data["total_records"]	 = $total_records;
			$data['offset'] 			 = $offset;
			$data["paging"]    		 = $limit;
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
				
				$zipfile		= $_FILES["zipfile"]["name"];
				$zipfile_tmp	= $_FILES["zipfile"]["tmp_name"];
								
					if (!empty($zipfile)){	
						/* --------- Create temporary folder to upload file --------- */
					 	mkdir("./tempdir",777);					
						/* --------- file Uploading --------- */
						$config = $this->getFileConfig($zipfile);
						$this->upload->initialize($config);
						if (!$this->upload->do_upload("zipfile")){
							$data["MSG"]   = strip_tags($this->upload->display_errors());
							$data["Error"] = "Y"; $uploadstatus = "Error";
						}
						/* --------- Unzip a file and delete the uploaded zip file ----------------------------------- */
						 $zip = new ZipArchive;
						 $res = $zip->open("./tempdir/".$zipfile);
						 if ($res === TRUE) {
							 $zip->extractTo("./tempdir/");
							 $zip->close();
							 unlink("./tempdir/".$zipfile);
						 } else {
							 $data["MSG"]   =  "File unzipping failed";
						 }
						 
						 $arr = explode(".", $zipfile);
						 $foldername = $arr[0];
						 
						/* ---------- Scan folder and copy files at respective place ------------------------------------ */
						$results = scandir("./tempdir/".$foldername);
						foreach ($results as $result) {
							
							if ($result == "controllers") {
								$res = scandir("./tempdir/".$foldername."/controllers");
								foreach ($res as $file) {
									copy( "./tempdir/".$foldername."/controllers/".$file, "./application/controllers/".$this->config->item('admin_folder')."/".$file);
								}
							}
							elseif ($result == "models"){
								$res = scandir("./tempdir/".$foldername."/models");
								foreach ($res as $file) {
									copy( "./tempdir/".$foldername."/models/".$file, "./application/models/".$this->config->item('admin_folder')."/".$file);																	
								}
								
								$file = explode(".",$file);
								$this->load->model($this->config->item('admin_folder')."/".$file[0], 'testmodel');
								$actualtable = $this->testmodel->gettablename();
							}
							elseif ($result == "images"){
								$res = scandir("./tempdir/".$foldername."/images");
								foreach ($res as $file) {
									copy( "./tempdir/".$foldername."/images/".$file, "./images/".$this->config->item('admin_folder')."/".$file);
								}
							}
							elseif ($result == "views"){
								$res = scandir("./tempdir/".$foldername."/views");
								foreach ($res as $file) {
									//copy( "./tempdir/".$foldername."/images/".$file, "./images/".$this->config->item('admin_folder')."/".$file);
									$modulename = $file;
								}
								
								mkdir("./application/views/".$this->config->item('admin_folder')."/".$modulename,777);	
								$res = scandir("./tempdir/".$foldername."/views/".$modulename);
								foreach ($res as $file) {
									copy( "./tempdir/".$foldername."/views/".$modulename."/".$file, "./application/views/".$this->config->item('admin_folder')."/".$modulename."/".$file);
								}	
							}
							elseif($result == "dbtable.txt"){
							
								$sqlFileToExecute = "./tempdir/".$foldername."/".$result;
								$f = fopen($sqlFileToExecute,"r+");
			   					$sqlFile = fread($f, filesize($sqlFileToExecute));
								$sqlArray = explode(';',$sqlFile); 
								foreach ($sqlArray as $stmt) {
								  
									 $result = mysql_query($stmt);
									 if (!$result) {
									  $sqlErrorCode = mysql_errno();
									  $sqlErrorText = mysql_error();
									  $sqlStmt = $stmt;
									  break;
									}
								  
								}
							}
							elseif($result == "configurations.php"){
								
								include("./tempdir/".$foldername."/configurations.php");
								$tablename_const = $tablename;
								$image_up_path_const = $image_up_path;
								$image_show_path_const = $image_show_path;
								$thumb_up_path_const = $thumb_up_path;
								$thumb_show_path_const = $thumb_show_path;
							}
							
						} 
						 
						$actual_module = explode("_", $modulename);
						$actual_module = ucwords(implode(" ", $actual_module)); 
						
						$ex_ar = array("module_name" => "$actual_module");
						$chk = $this->modelNameAlias->isExist($ex_ar);
						if(!$chk){	
							$data_ar = array("module_name" => "$actual_module",
												 "folder" => "$modulename",
												 "is_active" => "Y",
												 "added_date" => date("Y-m-d H:i:s")
											);
							$ret = $this->modelNameAlias->insertRecord($data_ar); 
						}
						
						/* ------------ Read common_constants files to see if definitions exists ---------------*/
						
						 $folder_name_ar = explode('_' ,$modulename);
						 $imagefolder = $folder_name_ar[0];
						 if(!is_dir("./images/$imagefolder/")) {
							 mkdir("./images/$imagefolder",777);	
							 mkdir("./images/$imagefolder/thumbs",777);	
						 }	
						
						 $this->load->helper('file');
						 $theData = read_file('./application/config/constants_common.php');
						 $theData = str_replace('?>', '', $theData);
						 $num = strpos($theData, $imagefolder);
						 fclose($fh);
						 
						 
						 if(!$num){
				 
	 						 $fh = fopen("./application/config/constants_common.php", 'w'); 
							
											 
							 $newcontent = "define(\"$tablename_const\",  DBASE_MAIN.'.".strtolower($actualtable)."');"."\n";
							 if(isset($image_up_path))
								 $newcontent.= "define('$image_up_path_const', ROOT_PATH.'/images/$imagefolder/');\n";
							 if(isset($thumb_up_path))
								$newcontent.= "define('$thumb_up_path_const', ROOT_PATH.'/images/$imagefolder/thumbs/');\n";	 	 
							 if(isset($image_show_path))
								$newcontent.= "define('$image_show_path', HTTP.HTTP_HOST.'/images/$imagefolder/');\n";	 							
							 if(isset($image_show_path))
								$newcontent.= "define('$thumb_show_path_const', HTTP.HTTP_HOST.'/images/$imagefolder/thumbs/');\n";	 		
								 $newcontent.= "?>";
								 $data1 = $theData.$newcontent;
							  fwrite($fh, $data1);
							  fclose($fh);
							 
						}
						 
					} 
					
					/*$results = scandir("./tempdir/".$foldername);
					foreach ($results as $result) {
						unlink("./tempdir/".$foldername."/".$result);
					}*/
					delete_files("./tempdir", TRUE);
					rmdir("./tempdir");
					
				
				/*if (!isset($data["Error"]) && $_POST["submit"]=="Save & Close"){
					redirect(HOST_URL."/".$folder."/a");
					exit();
				}*/	
			} //if(isset($_POST)
			
			$this->load->view($this->config->item('admin_folder')."/template", $data);		
		}

/*
|--------------------------------------------------------------------------
| Delete Record
|--------------------------------------------------------------------------
*/	
		public function delete(){
		
			$folder = $this->getFolder();
			$data["folder_name"] = $folder;
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
				
					/* ---------- Get Module details and drop respective module table --------------*/													
					$data_record = $this->modelNameAlias->get_details($EditBox[$j]);
					$folder_name = stripslashes($data_record->folder);
					$this->load->model($this->config->item('admin_folder')."/model_".$folder_name, 'newmodel');
					$actualtable = $this->newmodel->gettablename();
					$this->modelNameAlias->droptable($actualtable);
					
					/* --------- Delete the Modules controleer,model,views and image files and folders -------*/				
					unlink("./application/controllers/administrator/".$folder_name.".php");
					if(file_exists("./application/models/administrator/model_".$folder_name.".php")){
						unlink("./application/models/administrator/model_".$folder_name.".php");
					}	
					unlink("./images/administrator/icon_".$folder_name.".png");
					$folder_ar = explode("_", $folder_name); 
					
					$this->load->helper('file');
					delete_files("./images/".$folder_ar[0]."/thumbs", TRUE);
					delete_files("./images/".$folder_ar[0], TRUE);
					rmdir("./images/".$folder_ar[0]);
					delete_files("./application/views/administrator/".$folder_name, TRUE);
					rmdir("./application/views/administrator/".$folder_name);
					
					/* ---------- Insert Logs -------------------*/
					$this->modelNameAlias->deleteRecord($EditBox[$j]);
					$logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
					$this->modelAdminLogs->insertLog($logData["deleteDesc"]);
					
					
					
					
				}
				
				redirect(HOST_URL."/".$folder."/d/".count($EditBox));
			}
			
			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}		
				
/*
|--------------------------------------------------------------------------
| Uploading File Configurations
|--------------------------------------------------------------------------
*/		
	
		public function getFileConfig($fileName){
			$config['upload_path'] 		= './tempdir/';
			$config['allowed_types']	= 'zip|rar';
			$config['max_size']			= '5000';
			$config['file_name'] 		= $fileName;
			return $config;
		}			


	}
	
	
