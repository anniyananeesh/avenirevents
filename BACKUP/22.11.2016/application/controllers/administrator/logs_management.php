<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Logs_management extends Admin_Controller {
		
/*
|--------------------------------------------------------------------------
| Configurations
|--------------------------------------------------------------------------
| Note: Functions like settings, getModuleInfo, getImageConfig etc are 
| defined in My Controller file located in /application/core.
|
*/			
		protected $model_name 	= "model_logs";
		public $image_up_path 	= NEWS_IMAGE_UP_PATH;
		public $thumb_up_path 	= NEWS_THUMB_UP_PATH;
		public $image_show_path = NEWS_IMAGE_PATH;
		public $thumb_show_path = NEWS_THUMB_PATH;
		public $search_field 	= "heading";
		public $module_version 	= "1.0";
/*
|--------------------------------------------------------------------------
| Constructor
|--------------------------------------------------------------------------
*/			
		public function __construct(){
			parent::__construct();
			$this->load->model($this->config->item('admin_folder')."/model_admin_user", 'modelAdmin');
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
			$data["module_name"] = "Logs Management";
			$data["page"] = $folder."/home";
			
			if($this->input->post('btndeleteall')){
				$this->modelNameAlias->clearLogs();
			}	
			
			$filterdata = $this->modelAdmin->get_all_admin_users();
			$data['filterdata'] = $filterdata;
			
			$base_url .= HOST_URL."/".$folder."/index";
			/* --------------------------
			|	 Save & Close Messages
			---------------------------*/
			if ($this->uri->segment(2)=="d") { $data["MSG"] = $this->uri->segment(3)." Records deleted successfully!"; }
			
			$uri_array = $this->uri->uri_to_assoc(3);			
			/* ------------------
			|	 Sorting
			--------------------*/					
			$sortWith	= (array_key_exists('sort',$uri_array) ? $uri_array["sort"] : "added_date");
			$sortby   	= (array_key_exists('by',$uri_array) ? $uri_array["by"] : "");
			$base_url  .= (array_key_exists('sort',$uri_array) ? "/sort/".$sortWith : "");
			$base_url  .= (array_key_exists('by',$uri_array) ? "/by/".$sortby : "");
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
			
			$base_url	.= (!empty($paging) ? "/paging/".$paging : "");
			$base_url	.= (!empty($filter_by) ? "/filter/".$filter_by : "");
			$base_url  	.= (!empty($searchBox) ? "/search/".urlencode($searchBox) : "");
			
			$data["paging"]      = $paging;
			$data["filter_by"]   = $filter_by;
			$data["searchBox"]   = $searchBox;
			
			if (!empty($searchBox))			{	$where_array[$this->search_field] = $searchBox; }
			if ($filter_by!="All" && $filter_by!="")  { $where_array["user_id"] = $filter_by;	}
			
			
			if (!empty($filter_by)){ $urlparams .= "/filter_by/".$filter_by; }
			if (!empty($paging)){ $urlparams .= "/paging/".$paging; }
			$data["urlparams"] = $urlparams;
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
			$data['offset'] 		 = $offset;
			$data["paging"]    		 = $limit;
			$data["image_show_path"] = $this->image_show_path;
			$data["thumb_show_path"] = $this->thumb_show_path;
			$this->load->view($this->config->item('admin_folder')."/template", $data);
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
				}
				
				redirect(HOST_URL."/".$folder."/d/".count($EditBox));
				exit();
			}
			
			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}		


	}