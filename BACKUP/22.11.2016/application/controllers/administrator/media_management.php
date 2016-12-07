<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Media_management extends Admin_Controller {

/*
|--------------------------------------------------------------------------
| Configurations
|--------------------------------------------------------------------------
| Note: Functions like settings, getModuleInfo, getImageConfig, upload_image etc are
| defined in My Controller file located in /application/core.
|
*/
        protected $model_name   = "model_gallery_management";
        protected $model_images = "model_gallery_images_management";
        protected $model_videos = "model_gallery_videos_management";
        public $image_up_path   = GALLERY_IMAGE_UP_PATH;
        public $thumb_up_path   = GALLERY_THUMB_UP_PATH;
        public $image_show_path = GALLERY_IMAGE_PATH;
        public $thumb_show_path = GALLERY_THUMB_PATH;
        public $search_field    = "gallery_title_en";
        public $module_version  = "1.0";
/*
|--------------------------------------------------------------------------
| Constructor
|--------------------------------------------------------------------------
*/
        public function __construct(){
            parent::__construct();
            $this->load->model($this->config->item('admin_folder')."/model_logs", 'modelAdminLogs');
            $this->load->model($this->config->item('admin_folder')."/".$this->model_name, 'modelNameAlias');
            $this->load->model($this->config->item('admin_folder')."/".$this->model_images, 'modelNameImages');
            $this->load->model($this->config->item('admin_folder')."/".$this->model_videos, 'modelNameVideos');
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
            |    Common Features in All Modules
            ---------------------------*/
            $common_array  =  $this->common_features();
            $base_url     .=    $common_array["base_url"];
            $sortby         =   $common_array["sortby"];
            $sortWith       =   $common_array["sortWith"];
            $sortImg            =   $common_array["sortImg"];
            $cmsg               =   $common_array["msg"];
            $cerr               =   $common_array["err"];
            $paging         =   $common_array["paging"];
            $filter_by      =   $common_array["filter_by"];
            $searchBox      =   $common_array["searchBox"];
            $urlparams      =   $common_array["urlparams"];
            $by             =   $common_array["by"];
            $uri_array      =   $common_array["uri_array"];

            $data["sortby"]     =   $sortby;
            $data["MSG"]            =   $cmsg;
            $data["Error"]          =   $cerr;
            $data["sort_".$sortWith] = $sortImg;
            $data["paging"]      = $paging;
            $data["filter_by"]   = $filter_by;
            $data["searchBox"]   = $searchBox;
            $data["urlparams"]   = $urlparams;

            if (!empty($searchBox))         {   $where_array[$this->search_field." LIKE "] = $searchBox."%"; }
            if ($filter_by=="published")  {  $where_array["is_active"] = "Y";   }
            if ($filter_by=="unpublished"){  $where_array["is_active"] = "N";   }

            /* --------------------------
            |    Pagination
            ---------------------------*/
            $this->load->library('pagination');
            $offset    = (array_key_exists('offset',$uri_array) ? trim($uri_array["offset"]) : 0);
            $limit     = (!empty($paging) ? $paging : "20" );
            $base_url .= "/offset";
            $total_records = $this->modelNameAlias->countTotal($where_array);
            $uri_segments  = $this->uri->total_segments();
            $config             = custom_pagination($limit,$total_records,$base_url, $uri_segments);
            $this->pagination->initialize($config);
            $data['links'] = $this->pagination->create_links();

            /* --------------------------
            |    All Records List
            ---------------------------*/
            $data_list = $this->modelNameAlias->get_all_records($where_array, $limit, $offset, $sortWith, $sortby);
            $data["data_list"] = $data_list;

            $data["display_records"] = display_records($total_records, $offset, $paging);
            $data["total_records"]   = $total_records;
            $data['offset']              = $offset;
            $data["paging"]          = $limit;
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
                $gallery_title_en   = $this->input->post("gallery_title_en", TRUE);
                $gallery_title_ar   = $this->input->post("gallery_title_ar", TRUE);
                $show_on_gallery   = $this->input->post("show_on_gallery", TRUE);
                $is_active          = $this->input->post("is_active", TRUE);

                $is_exist_array   = array('gallery_title_en'=>$gallery_title_en);
                if ($this->modelNameAlias->isExist($is_exist_array)==FALSE){

                    if ($uploadstatus != "Error"){
                        $orderbyID = $this->modelNameAlias->lastOrderID();
                        $data_array = array(
                            "gallery_title_en"      =>      mysql_real_escape_string($gallery_title_en),
                            "orderby"               =>      mysql_real_escape_string($orderbyID->orderby+1),
                            "is_active"             =>      mysql_real_escape_string($is_active),
                            "added_date"            =>      date("Y-m-d H:i:s")
                        );
                        $last_insert_id = $this->modelNameAlias->insertRecord($data_array);
                        $logData = getLogDetails($this->getModuleInfo()->module_name, $last_insert_id);
                        $this->modelAdminLogs->insertLog($logData["insertDesc"]);
                        $data["MSG"] = "Record has been inserted successfully!";

                        $data["gallery_title_en"]   = "";
                        $data["is_active"]          = "";
                    }
                }else{
                    $data["Error"] = "Y";
                    $data["MSG"] = "Record already exists!";
                }

                if ($data["Error"] == "Y"){
                    $data["gallery_title_en"]   = $gallery_title_en;
                    $data["is_active"]          = $is_active;
                }
                if (!isset($data["Error"]) && $_POST["submit"]=="Save & Close"){
                    redirect(HOST_URL."/".$folder."/a");
                    exit();
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
            $data_record = $this->modelNameAlias->get_details($record_id);
            $data["data_record"] = $data_record;

            if ($this->input->post("delete_file")=="Y"){
                $file_name      = $this->input->post("file_name", TRUE);
                $field_name     = $this->input->post("field_name", TRUE);
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

            if($this->input->post("btnsubmit")=="Save & Close") {
                $gallery_title_en   = $this->input->post("gallery_title_en", TRUE);
                $is_active          = $this->input->post("is_active", TRUE);

                $is_exist_array   = array('gallery_title_en'=>$gallery_title_en, 'id !='=>$record_id);
                if ($this->modelNameAlias->isExist($is_exist_array)==FALSE){

                    if ($uploadstatus != "Error"){
                        $data_array = array(
                            "gallery_title_en"      =>      mysql_real_escape_string($gallery_title_en),
                            "is_active"             =>      mysql_real_escape_string($is_active)
                        );
                        $this->modelNameAlias->updateRecord($data_array, $record_id);
                        $logData = getLogDetails($this->getModuleInfo()->module_name, $record_id);
                        $this->modelAdminLogs->insertLog($logData["editDesc"]);
                        $data["MSG"] = "Record has been updated successfully!";

                        redirect(HOST_URL."/".$folder."/e");
                        exit();
                    }
                }else{
                    $data["Error"] = "Y";
                    $data["MSG"] = "Record already exists!";
                }

            }

            $data["gallery_title_en"]   = stripslashes($data_record->gallery_title_en);
            $data["is_active"]          = stripslashes($data_record->is_active);

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

            $data_images = $this->modelNameImages->get_all_records(array('parent_id'=>$record_id, 'is_active'=>'Y'), 0, 10000, 'orderby', 'ASC');
            $data["data_images"] = $data_images;

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
                $id_array   = $_POST['EditBox'];
                $data_list = $this->modelNameAlias->get_all_records_for_delete($id_array);
                $data["data_list"] = $data_list;
            }

            $data["Error"] = "Y";
            $data["MSG"] = "Are you sure you want to delete the Record?";

            if ($this->input->post("btnsubmit")=="Delete"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_record = $this->modelNameAlias->get_details($EditBox[$j]);

                    $data_images = $this->modelNameImages->get_all_records(array('parent_id'=>$EditBox[$j]),0, 100000, 'id', 'ASC');
                    if (count($data_images)>0){
                        foreach($data_images as $ikey=>$ivalue){
                            if (!empty($ivalue->image1)){
                                if (file_exists($this->thumb_up_path.$ivalue->image1)) { unlink($this->thumb_up_path.$ivalue->image1); }
                                if (file_exists($this->image_up_path.$ivalue->image1)) { unlink($this->image_up_path.$ivalue->image1); }
                            }
                        }
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
/*
|--------------------------------------------------------------------------
| Manage Images
|--------------------------------------------------------------------------
*/
        public function manage_images(){
            $folder = $this->getFolder();
            $data["folder_name"] = $folder;
            $data["module_name"] = $this->getModuleInfo()->module_name;
            $data["page"] = $folder."/manage_images";
            $data['img_path'] = $this->image_show_path;

            $base_url .= HOST_URL."/".$folder."/manage_images";

            /* --------------------------
            |    Common Features in All Modules --------- NOTE I HAVE COPIED THE BELOW CODE FROM MY_CONTROLLER BECAUSE MODEL NAME HAS TO BE CHANGED
            ---------------------------*/
            if ($this->uri->segment(2)=="a") { $cmsg = "Record has been inserted successfully!"; }else
            if ($this->uri->segment(2)=="e") { $cmsg = "Record has been updated successfully!"; } else
            if ($this->uri->segment(4)=="d") { $cmsg = $this->uri->segment(5)." Records deleted successfully!"; }

            $uri_array = $this->uri->uri_to_assoc(4);
            /* ------------------
            |    Sorting
            --------------------*/
            $sortWith   = (array_key_exists('sort',$uri_array) ? $uri_array["sort"] : "orderby");
            $sortby     = (array_key_exists('by',$uri_array) ? $uri_array["by"] : "");
            $base_url  .= (array_key_exists('sort',$uri_array) ? "/sort/".$sortWith : "");
            $base_url  .= (array_key_exists('by',$uri_array) ? "/by/".$sortby : "");
            $sortby     = (!isset($sortby) ? $sortby="ASC" : (($sortby=="DESC") ? $sortby = "ASC": $sortby="DESC"));
            $by             = ($sortby=="DESC" ? "ASC": "DESC");
            $sortImg    = (($by=="DESC") ? $sortImg = "sort_desc.png" : $sortImg = "sort_asc.png");

            /* --------------------------
            |    Save Order
            ---------------------------*/
            if ($this->input->post("is_order")=="Y"){
                $order_array   = $_POST["orderby"];
                $id_array      = $_POST["idarray"];

                if (count(array_unique($order_array)) == count($order_array)){
                    for ($a=0; $a<count($order_array); $a++){
                        $value  = $order_array[$a];
                        $id     = $id_array[$a];
                        $data_array = array('orderby' => $value);
                        $this->modelNameImages->updateRecord($data_array, $id);
                        $cmsg = "Order saved";
                    }
                }else{
                    $cerr = "Y";
                    $cmsg = "ERROR : Duplicate value exist in Order. Please check values again.";
                }
            }
            /* -----------------------
            |    Publish and Unpublish
            -------------------------*/
            if ($this->input->post("btnsubmit")=="Publish"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_array = array('is_active' => 'Y');
                    $this->modelNameImages->updateRecord($data_array, $EditBox[$j]);
                    $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                    $this->modelAdminLogs->insertLog($logData["activeDesc"]);
                }
                if (count($EditBox)>1){ $record = "Records"; }else{ $record = "Record"; }
                $cmsg = count($EditBox)." $record published successfully.";
            }
            if ($this->input->post("btnsubmit")=="Unpublish"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_array = array('is_active'=>'N');
                    $this->modelNameImages->updateRecord($data_array, $EditBox[$j]);
                    $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                    $this->modelAdminLogs->insertLog($logData["deactiveDesc"]);
                }
                if (count($EditBox)>1){ $record = "Records"; }else{ $record = "Record"; }
                $cmsg = count($EditBox)." $record Unpublished successfully.";
            }



            $data["sortby"]     =   $sortby;
            $data["MSG"]            =   $cmsg;
            $data["Error"]          =   $cerr;
            $data["sort_".$sortWith] = $sortImg;
            $data["paging"]      = $paging;
            $data["filter_by"]   = $filter_by;
            $data["searchBox"]   = $searchBox;
            $data["urlparams"]   = $urlparams;

            if (!empty($searchBox))         {   $where_array[$this->search_field." LIKE "] = $searchBox."%"; }
            if ($filter_by=="published")  {  $where_array["is_active"] = "Y";   }
            if ($filter_by=="unpublished"){  $where_array["is_active"] = "N";   }

            $parent_id = $this->uri->segment(3);
            $where_array["parent_id"] = $parent_id;

            /* --------------------------
            |    Pagination
            ---------------------------*/
            $this->load->library('pagination');
            $offset    = (array_key_exists('offset',$uri_array) ? trim($uri_array["offset"]) : 0);
            $limit     = (!empty($paging) ? $paging : "500" );
            $base_url .= "/offset";
            $total_records = $this->modelNameImages->countTotal($where_array);
            $uri_segments  = $this->uri->total_segments();
            $config             = custom_pagination($limit,$total_records,$base_url, $uri_segments);
            $this->pagination->initialize($config);
            $data['links'] = $this->pagination->create_links();

            /* --------------------------
            |    All Records List
            ---------------------------*/
            $data_list = $this->modelNameImages->get_all_records($where_array, $limit, $offset, $sortWith, $sortby);
            $data["data_list"] = $data_list;

            $data["display_records"] = display_records($total_records, $offset, $paging);
            $data["total_records"]   = $total_records;
            $data['offset']          = $offset;
            $data["paging"]          = $limit;
            $data["parent_id"]       = $parent_id;
            $data["image_show_path"] = $this->image_show_path;
            $data["thumb_show_path"] = $this->thumb_show_path;
            $this->load->view($this->config->item('admin_folder')."/template", $data);
        }
/*
|--------------------------------------------------------------------------
| ADD Images using DropZone JS Class
|--------------------------------------------------------------------------
*/
        public function add_images(){
            $folder = $this->getFolder();
            $data["folder_name"] = $folder;
            $data["module_name"] = $this->getModuleInfo()->module_name;
            $data["page"] = $folder."/add_images";

            $parent_id          = $this->uri->segment(3);
            $data["parent_id"]  =   $parent_id;

            if (!empty($_FILES)) {
                $image1_tmp_name    = $_FILES['file']['tmp_name'];
                $image1_name        = $_FILES['file']['name'];

                $Image1Name         = substr(md5(uniqid(rand())),0,15);
                $Image1Name         = "IMG-".$Image1Name.strrchr($image1_name,".");

                $FileUploadPath = $this->image_up_path.$Image1Name;
                move_uploaded_file($image1_tmp_name, $FileUploadPath);

                // Creating the Thumbnail
                $this->creatThumnail($Image1Name, $this->getModuleInfo()->thumbnail_cropping);

                // Resize Image based on the settings
                if ($this->getModuleInfo()->image_resize=="Y"){
                    $this->resizeImage($Image1Name, $this->getModuleInfo()->image_cropping);
                }

                // Save Image in Database
                $orderbyID = $this->modelNameImages->lastOrderID();
                $data_image_array = array(
                    "orderby"       =>  mysql_real_escape_string($orderbyID->orderby+1),
                    'parent_id'     =>  mysql_real_escape_string($parent_id),
                    'title'         =>  mysql_real_escape_string($image1_name),
                    'image1'        =>  mysql_real_escape_string($Image1Name),
                    'is_active'     =>  'Y',
                    'added_date'    =>  date('Y-m-d H:i:s')
                );
                $this->modelNameImages->insertRecord($data_image_array);
            }

            $this->load->view($this->config->item("admin_folder")."/template", $data);
        }
/*
|--------------------------------------------------------------------------
| Delete Images
|--------------------------------------------------------------------------
*/
        public function delete_images(){
            $folder = $this->getFolder();
            $data["folder_name"] = $folder;
            $data["module_name"] = $this->getModuleInfo()->module_name;
            $data["page"] = $folder."/delete_images";

            $parent_id = $this->uri->segment(3);
            $data["parent_id"] = $parent_id;

            $record_id = $this->uri->segment(4);
            if (!empty($record_id)){
                $data_list = $this->modelNameImages->get_one_record_for_delete($record_id);
                $data["data_list"] = $data_list;
            }else{
                $id_array   = $_POST['EditBox'];
                $data_list = $this->modelNameImages->get_all_records_for_delete($id_array);
                $data["data_list"] = $data_list;
            }

            $data["Error"] = "Y";
            $data["MSG"] = "Are you sure you want to delete the Images?";

            if ($this->input->post("btnsubmit")=="Delete"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_record = $this->modelNameImages->get_details($EditBox[$j]);
                    $image_name = stripslashes($data_record->image1);
                    if (!empty($image_name)){
                        if (file_exists($this->thumb_up_path.$image_name)) { unlink($this->thumb_up_path.$image_name); }
                        if (file_exists($this->image_up_path.$image_name)) { unlink($this->image_up_path.$image_name); }
                    }
                    $this->modelNameImages->deleteRecord($EditBox[$j]);
                    $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                    $this->modelAdminLogs->insertLog($logData["deleteDesc"]);
                }

                redirect(HOST_URL."/".$folder."/manage_images/".$parent_id."/d/".count($EditBox));
                exit();
            }

            $this->load->view($this->config->item("admin_folder")."/template", $data);
        }
/*
|--------------------------------------------------------------------------
| Manage VIDEOS
|--------------------------------------------------------------------------
*/
        public function manage_videos(){
            $folder = $this->getFolder();
            $data["folder_name"] = $folder;
            $data["module_name"] = $this->getModuleInfo()->module_name;
            $data["page"] = $folder."/manage_videos";

            $base_url .= HOST_URL."/".$folder."/manage_videos";

            /* --------------------------
            |    Common Features in All Modules --------- NOTE I HAVE COPIED THE BELOW CODE FROM MY_CONTROLLER BECAUSE MODEL NAME HAS TO BE CHANGED
            ---------------------------*/
            if ($this->uri->segment(2)=="a") { $cmsg = "Record has been inserted successfully!"; }else
            if ($this->uri->segment(2)=="e") { $cmsg = "Record has been updated successfully!"; } else
            if ($this->uri->segment(4)=="d") { $cmsg = $this->uri->segment(5)." Records deleted successfully!"; }

            $uri_array = $this->uri->uri_to_assoc(4);
            /* ------------------
            |    Sorting
            --------------------*/
            $sortWith   = (array_key_exists('sort',$uri_array) ? $uri_array["sort"] : "orderby");
            $sortby     = (array_key_exists('by',$uri_array) ? $uri_array["by"] : "");
            $base_url  .= (array_key_exists('sort',$uri_array) ? "/sort/".$sortWith : "");
            $base_url  .= (array_key_exists('by',$uri_array) ? "/by/".$sortby : "");
            $sortby     = (!isset($sortby) ? $sortby="ASC" : (($sortby=="DESC") ? $sortby = "ASC": $sortby="DESC"));
            $by             = ($sortby=="DESC" ? "ASC": "DESC");
            $sortImg    = (($by=="DESC") ? $sortImg = "sort_desc.png" : $sortImg = "sort_asc.png");

            /* --------------------------
            |    Save Order
            ---------------------------*/
            if ($this->input->post("is_order")=="Y"){
                $order_array   = $_POST["orderby"];
                $id_array      = $_POST["idarray"];

                if (count(array_unique($order_array)) == count($order_array)){
                    for ($a=0; $a<count($order_array); $a++){
                        $value  = $order_array[$a];
                        $id     = $id_array[$a];
                        $data_array = array('orderby' => $value);
                        $this->modelNameVideos->updateRecord($data_array, $id);
                        $cmsg = "Order saved";
                    }
                }else{
                    $cerr = "Y";
                    $cmsg = "ERROR : Duplicate value exist in Order. Please check values again.";
                }
            }
            /* -----------------------
            |    Publish and Unpublish
            -------------------------*/
            if ($this->input->post("btnsubmit")=="Publish"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_array = array('is_active' => 'Y');
                    $this->modelNameVideos->updateRecord($data_array, $EditBox[$j]);
                    $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                    $this->modelAdminLogs->insertLog($logData["activeDesc"]);
                }
                if (count($EditBox)>1){ $record = "Records"; }else{ $record = "Record"; }
                $cmsg = count($EditBox)." $record published successfully.";
            }
            if ($this->input->post("btnsubmit")=="Unpublish"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_array = array('is_active'=>'N');
                    $this->modelNameVideos->updateRecord($data_array, $EditBox[$j]);
                    $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                    $this->modelAdminLogs->insertLog($logData["deactiveDesc"]);
                }
                if (count($EditBox)>1){ $record = "Records"; }else{ $record = "Record"; }
                $cmsg = count($EditBox)." $record Unpublished successfully.";
            }



            $data["sortby"]     =   $sortby;
            $data["MSG"]            =   $cmsg;
            $data["Error"]          =   $cerr;
            $data["sort_".$sortWith] = $sortImg;
            $data["paging"]      = $paging;
            $data["filter_by"]   = $filter_by;
            $data["searchBox"]   = $searchBox;
            $data["urlparams"]   = $urlparams;

            if (!empty($searchBox))         {   $where_array[$this->search_field." LIKE "] = $searchBox."%"; }
            if ($filter_by=="published")  {  $where_array["is_active"] = "Y";   }
            if ($filter_by=="unpublished"){  $where_array["is_active"] = "N";   }

            $parent_id = $this->uri->segment(3);
            $where_array["parent_id"] = $parent_id;

            /* --------------------------
            |    Pagination
            ---------------------------*/
            $this->load->library('pagination');
            $offset    = (array_key_exists('offset',$uri_array) ? trim($uri_array["offset"]) : 0);
            $limit     = (!empty($paging) ? $paging : "500" );
            $base_url .= "/offset";
            $total_records = $this->modelNameVideos->countTotal($where_array);
            $uri_segments  = $this->uri->total_segments();
            $config             = custom_pagination($limit,$total_records,$base_url, $uri_segments);
            $this->pagination->initialize($config);
            $data['links'] = $this->pagination->create_links();

            /* --------------------------
            |    All Records List
            ---------------------------*/
            $data_list = $this->modelNameVideos->get_all_records($where_array, $limit, $offset, $sortWith, $sortby);
            $data["data_list"] = $data_list;

            $data["display_records"] = display_records($total_records, $offset, $paging);
            $data["total_records"]   = $total_records;
            $data['offset']          = $offset;
            $data["paging"]          = $limit;
            $data["parent_id"]       = $parent_id;
            $data["image_show_path"] = $this->image_show_path;
            $data["thumb_show_path"] = $this->thumb_show_path;
            $this->load->view($this->config->item('admin_folder')."/template", $data);
        }
/*
|--------------------------------------------------------------------------
| ADD VIDEOS
|--------------------------------------------------------------------------
*/
        public function add_video(){
            $folder = $this->getFolder();
            $data["folder_name"] = $folder;
            $data["module_name"] = $this->getModuleInfo()->module_name;
            $data["page"] = $folder."/add_video";

            $parent_id          = $this->uri->segment(3);
            $data["parent_id"]  =   $parent_id;

            if(isset($_POST) && count($_POST) != 0) {
                $video_url      = $this->input->post("video_url", TRUE);
                $is_active      = $this->input->post("is_active", TRUE);

                $is_exist_array   = array('video_url'=>$video_url, 'parent_id'=>$parent_id);
                if ($this->modelNameVideos->isExist($is_exist_array)==FALSE){

                        $orderbyID = $this->modelNameVideos->lastOrderID();
                        $orderN = $orderbyID->orderby+1;

                        $data_array = array(
                            "parent_id"         =>      mysql_real_escape_string($parent_id),
                            "video_title"       =>      "Video " . $orderN,
                            "video_url"         =>      $video_url,
                            "orderby"           =>      mysql_real_escape_string($orderN),
                            "is_active"         =>      mysql_real_escape_string($is_active),
                            "added_date"        =>      date("Y-m-d H:i:s")
                        );
                        $last_insert_id = $this->modelNameVideos->insertRecord($data_array);
                        $logData = getLogDetails($this->getModuleInfo()->module_name, $last_insert_id);
                        $this->modelAdminLogs->insertLog($logData["insertDesc"]);
                        $data["MSG"] = "Record has been inserted successfully!";

                        $data["video_url"]  = "";
                        $data["is_active"]  = "";
                }else{
                    $data["Error"] = "Y";
                    $data["MSG"] = "Record already exists!";
                }

                if (!isset($data["Error"]) && $_POST["submit"]=="Save & Close"){
                    redirect(HOST_URL."/".$folder."/a");
                    exit();
                }
            } //if(isset($_POST)

            $this->load->view($this->config->item("admin_folder")."/template", $data);
        }
/*
|--------------------------------------------------------------------------
| Delete Videos
|--------------------------------------------------------------------------
*/
        public function delete_videos(){
            $folder = $this->getFolder();
            $data["folder_name"] = $folder;
            $data["module_name"] = $this->getModuleInfo()->module_name;
            $data["page"] = $folder."/delete_videos";

            $parent_id = $this->uri->segment(3);
            $data["parent_id"] = $parent_id;

            $record_id = $this->uri->segment(4);
            if (!empty($record_id)){
                $data_list = $this->modelNameVideos->get_one_record_for_delete($record_id);
                $data["data_list"] = $data_list;
            }else{
                $id_array   = $_POST['EditBox'];
                $data_list = $this->modelNameVideos->get_all_records_for_delete($id_array);
                $data["data_list"] = $data_list;
            }

            $data["Error"] = "Y";
            $data["MSG"] = "Are you sure you want to delete the Videos?";

            if ($this->input->post("btnsubmit")=="Delete"){
                $EditBox = $_POST["EditBox"];
                for ($j=0; $j<count($EditBox); $j++) {
                    $data_record = $this->modelNameVideos->get_details($EditBox[$j]);
                    $this->modelNameVideos->deleteRecord($EditBox[$j]);
                    $logData = getLogDetails($this->getModuleInfo()->module_name, $EditBox[$j]);
                    $this->modelAdminLogs->insertLog($logData["deleteDesc"]);
                }

                redirect(HOST_URL."/".$folder."/manage_videos/".$parent_id."/d/".count($EditBox));
                exit();
            }

            $this->load->view($this->config->item("admin_folder")."/template", $data);
        }


    }
