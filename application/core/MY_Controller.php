<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin_Controller extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			if ($this->session->userdata('admin_logged_in')==FALSE){
				header('Location: '.HOST_URL."/".$this->config->item("admin_login"));
				break;
			}
			
			$this->load->library('upload');
			$this->load->library('image_lib');
		}
/*
|--------------------------------------------------------------------------
| General Functions
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
			$this->load->model($this->config->item('admin_folder')."/model_settings_management");
			$data_config = $this->model_settings_management->get_details();
			return $data_config;
		}
		
		protected function getImageConfig($imgName){
			$config['upload_path'] 		= $this->image_up_path;
			$config['allowed_types']	= 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$config['max_size']			= '5000';
			$config['max_width']  		= '5000';
			$config['max_height']  		= '5000';
			$config['file_name'] 		= $imgName;
			return $config;
		}

		protected function getFileConfig($fileName){
			$config['upload_path'] 		= MODELS_CV_UP_PATH;//$this->image_up_path
			$config['allowed_types']	= 'pdf|doc|docx'; //pdf|PDF|doc|DOC|docx|DOCX|xls|XLS|xlsx|XLSX
			$config['max_size']			= '5000';
			$config['max_width']  		= '5000';
			$config['max_height']  		= '5000';
			$config['max_size']			= 0;
			$config['file_name'] 		= $fileName;
			return $config;
		}
				
		protected function getWatermarkConfig($source_img){
			$config['source_image'] 		= $this->image_up_path.$source_img;
			$config['wm_overlay_path'] 	= IMG_UP_PATH.$this->getConfig()->watermark_image;
			$config['wm_vrt_alignment'] 	= $this->getConfig()->vertical_alignment;
			$config['wm_hor_alignment'] 	= $this->getConfig()->horizontal_alignment;
			$config['wm_hor_offset'] 		= $this->getConfig()->watermark_padding;
			$config['wm_vrt_offset'] 		= $this->getConfig()->watermark_padding;
			$config['wm_type'] 				= 'overlay';
			$config['image_library'] 		= 'gd2';
			$config['wm_opacity'] 			= '90';			
			$config['wm_padding'] 			= '0';
			return $config;
		}
		
		protected function creatThumnail($imgName, $thumbCropping){
			$thumb_width		= ($this->getModuleInfo()->thumb_width  ? $this->getModuleInfo()->thumb_width  : $this->getConfig()->thumb_width);
			$thumb_height		= ($this->getModuleInfo()->thumb_height ? $this->getModuleInfo()->thumb_height : $this->getConfig()->thumb_height);
			include_once(CLASSES_PATH."/thumbnail_images.class.php");
			$obj_img = new thumbnail_images();
			$obj_img->NewWidth   = $thumb_width;
			$obj_img->NewHeight  = $thumb_height;
			$obj_img->Cropping   = $thumbCropping;
			$obj_img->PathImgOld = $this->image_up_path."/".$imgName;
			$obj_img->PathImgNew = $this->thumb_up_path."/".$imgName;
			$obj_img->create_thumbnail_images();
		}
		
		protected function resizeImage($imgName, $imageCropping, $custom_width, $custom_height){
			if (empty($custom_width)){
				$img_width		= (!empty($this->getModuleInfo()->image_width)  ? $this->getModuleInfo()->image_width  : 640);
			}else{ $img_width = $custom_width; }
			if (empty($custom_height)){
				$img_height		= (!empty($this->getModuleInfo()->image_height) ? $this->getModuleInfo()->image_height : 480);
			}else{ $img_height = $custom_height; }
			include_once(CLASSES_PATH."/thumbnail_images.class.php");
			$obj_Bigimg = new thumbnail_images();
			$obj_Bigimg->NewWidth   = $img_width;
			$obj_Bigimg->NewHeight  = $img_height;
			$obj_Bigimg->Cropping   = $imageCropping;
			$obj_Bigimg->PathImgOld = $this->image_up_path."/".$imgName;
			$obj_Bigimg->PathImgNew = $this->image_up_path."/".$imgName;
			$obj_Bigimg->create_thumbnail_images();
		}
		
		
/*
|--------------------------------------------------------------------------
| Image Uploading
|--------------------------------------------------------------------------
*/			
		function common_features(){
			$return_array = array(); 
			/* --------------------------
			|	 Save & Close Messages
			---------------------------*/
			if ($this->uri->segment(2)=="a") { $return_array["msg"] = "Record has been inserted successfully!"; }else 
			if ($this->uri->segment(2)=="e") { $return_array["msg"] = "Record has been updated successfully!"; } else
			if ($this->uri->segment(2)=="d") { $return_array["msg"] = $this->uri->segment(3)." Records deleted successfully!"; }
			
			$uri_array = $this->uri->uri_to_assoc(3);			
			/* ------------------
			|	 Sorting
			--------------------*/					
			$sortWith	= (array_key_exists('sort',$uri_array) ? $uri_array["sort"] : "added_date");
			$sortby   	= (array_key_exists('by',$uri_array) ? $uri_array["by"] : "");
			$base_url  .= (array_key_exists('sort',$uri_array) ? "/sort/".$sortWith : "");
			$base_url  .= (array_key_exists('by',$uri_array) ? "/by/".$sortby : "");
			$sortby  	= (!isset($sortby) ? $sortby="ASC" : (($sortby=="DESC") ? $sortby = "ASC": $sortby="DESC"));
			$by  			= ($sortby=="DESC" ? "ASC": "DESC");
			$sortImg  	= (($by=="DESC") ? $sortImg = "sort_desc.png" : $sortImg = "sort_asc.png");
			
			$return_array["by"] = $by;
			$return_array["sortWith"] = $sortWith;
			$return_array["sortby"]   = $sortby;
			$return_array["sortImg"]  = $sortImg;
			
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
						$return_array["msg"] = "Order saved";
					}
				}else{
					$return_array["err"] = "Y";
					$return_array["msg"] = "ERROR : Duplicate value exist in Order. Please check values again.";
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
				$return_array["msg"] = count($EditBox)." $record published successfully.";
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
				$return_array["msg"] = count($EditBox)." $record Unpublished successfully.";
			}
			/* --------------------------
			|	 Search
			---------------------------*/
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
			
			if (!empty($filter_by)){ $urlparams .= "/filter_by/".$filter_by; }
			if (!empty($paging)){    $urlparams .= "/paging/".$paging; }
			
			$return_array["urlparams"] = $urlparams;
			$return_array["paging"] 	= $paging;
			$return_array["filter_by"] = $filter_by;
			$return_array["searchBox"] = $searchBox;
			$return_array["uri_array"] = $uri_array;
			
			$return_array["base_url"] = $base_url;
			return $return_array;
		}
/*
|--------------------------------------------------------------------------
| Image Uploading
|--------------------------------------------------------------------------
*/			
		function upload_image($field_name, $image1_name, $img_name_delete, $custom_width, $custom_height){
			$return_array = array(); 
			$Image1Name = substr(md5(uniqid(rand())),0,15);
			$Image1Name = "IMG-".$Image1Name.strrchr($image1_name,".");
			/* --------------------------
			|	Image Uploading
			|  -------------------------*/
			$config = $this->getImageConfig($Image1Name);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload($field_name)){
				$return_array["msg"] = strip_tags($this->upload->display_errors());
				$return_array["err"] = "Y"; 
				$return_array["ups"] = "Error";
			}
			/* --------------------------
			|	Delete Old Image
			|  -------------------------*/
			if (!empty($img_name_delete)){
				if (file_exists($this->thumb_up_path.$img_name_delete)) { unlink($this->thumb_up_path.$img_name_delete); }
				if (file_exists($this->image_up_path.$img_name_delete)) { unlink($this->image_up_path.$img_name_delete); }
			}
			/* --------------------------
			|	Thumbnail Creation
			|  -------------------------*/
			$this->creatThumnail($Image1Name, $this->getModuleInfo()->thumbnail_cropping);
			/* --------------------------
			|	Image Resizing
			|  -------------------------*/
			if ($this->getModuleInfo()->image_resize=="Y"){
				$this->resizeImage($Image1Name, $this->getModuleInfo()->image_cropping, $custom_width, $custom_height); 
			}
			/* --------------------------
			|	Image Watermark
			|  -------------------------*/
			if ($this->getModuleInfo()->is_watermark=="Y"){							
				$watermarkConfig = $this->getWatermarkConfig($Image1Name);
				$this->image_lib->initialize($watermarkConfig);
				if(!$this->image_lib->watermark()){
					 $return_array["msg"] = strip_tags($this->image_lib->display_errors());
					 $return_array["err"] = "Y"; 
					 $return_array["ups"] = "Error";
				}
			}
			$return_array["ImageName"] = $Image1Name;
			return $return_array;
		}
/*
|--------------------------------------------------------------------------
| File Uploading
|--------------------------------------------------------------------------
*/			
		function upload_file($field_name, $file1_name, $file_name_delete){
			$return_array = array(); 
			$File1Name = substr(md5(uniqid(rand())),0,15);
			$File1Name = "FILE".$File1Name.strrchr($file1_name,".");
			/* --------------------------
			|	File Uploading
			|  -------------------------*/
			$config = $this->getFileConfig($File1Name);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload($field_name)){
				$return_array["msg"] = strip_tags($this->upload->display_errors());
				$return_array["err"] = "Y"; 
				$return_array["ups"] = "Error";
			}
			/* --------------------------
			|	Delete Old File
			|  -------------------------*/
			if (!empty($file_name_delete)){
				if (file_exists($this->image_up_path.$file_name_delete)) { unlink($this->image_up_path.$file_name_delete); }
			}
			
			$return_array["FileName"] = $File1Name;
			return $return_array;
		}

/*
|--------------------------------------------------------------------------
| File Uploading image gallery for models
|--------------------------------------------------------------------------
*/	
		function upload_image_file($field_name, $image1_name){
			
			$return_array = array(); 
			$Image1Name = substr(md5(uniqid(rand())),0,15);
			$Image1Name = "IMG-".$Image1Name.strrchr($image1_name,".");

			$config['upload_path'] 		= MODELS_IMAGE_UP_PATH;
			$config['allowed_types']	= 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$config['max_size']			= '5000';
			$config['max_width']  		= '5000';
			$config['max_height']  		= '5000';
			$config['file_name'] 		= $Image1Name; 

			$this->upload->initialize($config);
			if (!$this->upload->do_upload($field_name)){
				$return_array["msg"] = strip_tags($this->upload->display_errors());
				$return_array["err"] = "Y"; 
				$return_array["ups"] = "Error";
			}

			/* --------------------------
			|	Thumbnail Creation
			|  -------------------------*/
			$this->createThumnail($Image1Name, 'Y', 212, 260);
			
			$return_array["ImageName"] = $File1Name;
			return $return_array;
		}		

/*
|--------------------------------------------------------------------------
| Aneesh create thumb naile function goes here
|--------------------------------------------------------------------------
*/	

		protected function createThumnail($imgName, $thumbCropping , $thumb_width, $thumb_height){
 
			include_once(CLASSES_PATH."/thumbnail_images.class.php");
			$obj_img = new thumbnail_images();
			$obj_img->NewWidth   = $thumb_width;
			$obj_img->NewHeight  = $thumb_height;
			$obj_img->Cropping   = $thumbCropping;
			$obj_img->PathImgOld = MODELS_IMAGE_UP_PATH."/".$imgName;
			$obj_img->PathImgNew = MODELS_THUMB_UP_PATH."/".$imgName;
			$obj_img->create_thumbnail_images();

		}

/*
|--------------------------------------------------------------------------
| Banner Uploading
|--------------------------------------------------------------------------
*/			
		function upload_banner($field_name, $image1_name, $img_name_deletem, $banner_width, $banner_height){
			$return_array = array(); 
			$Image1Name = substr(md5(uniqid(rand())),0,15);
			$Image1Name = "IMG-".$Image1Name.strrchr($image1_name,".");
			/* --------------------------
			|	Image Uploading
			|  -------------------------*/
			$config = $this->getImageConfig($Image1Name);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload($field_name)){
				$return_array["msg"] = strip_tags($this->upload->display_errors());
				$return_array["err"] = "Y"; 
				$return_array["ups"] = "Error";
			}
			/* --------------------------
			|	Delete Old Image
			|  -------------------------*/
			if (!empty($img_name_delete)){
				if (file_exists($this->thumb_up_path.$img_name_delete)) { unlink($this->thumb_up_path.$img_name_delete); }
				if (file_exists($this->image_up_path.$img_name_delete)) { unlink($this->image_up_path.$img_name_delete); }
			}
			/* --------------------------
			|	Thumbnail Creation
			|  -------------------------*/
			/*include_once(CLASSES_PATH."/thumbnail_images.class.php");
			$obj_img = new thumbnail_images();
			$obj_img->NewWidth   = $banner_width;
			$obj_img->NewHeight  = $banner_height;
			$obj_img->Cropping   = $thumbCropping;
			$obj_img->PathImgOld = $this->image_up_path."/".$Image1Name;
			$obj_img->PathImgNew = $this->thumb_up_path."/".$Image1Name;
			$obj_img->create_thumbnail_images();*/
			/* --------------------------
			|	Image Resizing
			|  -------------------------*/
			include_once(CLASSES_PATH."/thumbnail_images.class.php");
			$obj_Bigimg = new thumbnail_images();
			$obj_Bigimg->NewWidth   = $banner_width;
			$obj_Bigimg->NewHeight  = $banner_height;
			$obj_Bigimg->Cropping   = "Y";
			$obj_Bigimg->PathImgOld = $this->image_up_path."/".$Image1Name;
			$obj_Bigimg->PathImgNew = $this->image_up_path."/".$Image1Name;
			$obj_Bigimg->create_thumbnail_images();
			
			
			$return_array["ImageName"] = $Image1Name;
			return $return_array;
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
			
			$data["thumbnail_cropping"] 		= $this->getModuleInfo()->thumbnail_cropping;
			$data["thumb_width"] 				= $thumb_width;
			$data["thumb_height"] 				= $thumb_height;
			$data["image_resize"] 				= $this->getModuleInfo()->image_resize;
			$data["image_cropping"] 			= $this->getModuleInfo()->image_cropping;
			$data["image_width"] 				= $this->getModuleInfo()->image_width;
			$data["image_height"] 				= $this->getModuleInfo()->image_height;
			$data["is_watermark"] 				= $this->getModuleInfo()->is_watermark;
			
			if ($this->input->post("btnsubmit")=="Save & Close"){
				$thumbnail_cropping  	= $this->input->post("thumbnail_cropping", TRUE);
				$thumb_width  				= $this->input->post("thumb_width", TRUE);
				$thumb_height 				= $this->input->post("thumb_height", TRUE);
				$image_resize  			= $this->input->post("image_resize", TRUE);
				$image_cropping  			= $this->input->post("image_cropping", TRUE);
				$image_width 				= $this->input->post("image_width", TRUE);
				$image_height  			= $this->input->post("image_height", TRUE);
				$is_watermark  			= $this->input->post("is_watermark", TRUE);

				$where_array = array(
					'thumbnail_cropping'=>$thumbnail_cropping, 
					'thumb_width'=>$thumb_width, 
					'thumb_height'=>$thumb_height, 
					'image_resize'=>$image_resize, 
					'image_cropping'=>$image_cropping, 
					'image_width'=>$image_width, 
					'image_height'=>$image_height,
					'is_watermark'=>$is_watermark					
				);
				
				$this->load->model($this->config->item('admin_folder')."/model_modules");
				$this->model_modules->updateRecord($where_array, $mod_id);
			
				redirect(HOST_URL."/".$folder);
				exit();
			}
			
			$this->load->view($this->config->item("admin_folder")."/template", $data);
		}
	}


?>