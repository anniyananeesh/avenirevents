<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings_management extends CI_Controller
{

    /*
    |--------------------------------------------------------------------------
    | Configurations
    |--------------------------------------------------------------------------
    */
    protected $model_name = "model_settings_management";
    public $image_up_path = IMG_UP_PATH;
    public $image_show_path = IMG_SHOW_PATH;
    public $module_version = "1.0";
    /*
    |--------------------------------------------------------------------------
    | Constructor
    |--------------------------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_logged_in') == FALSE)
        {
            header('Location: ' . HOST_URL . "/" . $this->config->item("admin_login"));
            break;
        }
        $this->load->model($this->config->item('admin_folder') . "/model_logs", 'modelAdminLogs');
        $this->load->model($this->config->item('admin_folder') . "/" . $this->model_name, 'modelNameAlias');
    }
    /*
    |--------------------------------------------------------------------------
    | Functions to get Folder Name and Module Name
    |--------------------------------------------------------------------------
    */
    public function getFolder()
    {
        return $this->uri->segment(1);
    }
    public function getModuleInfo()
    {
        $folder_name = $this->getFolder();
        $this->load->model($this->config->item('admin_folder') . "/model_modules");
        $data_module = $this->model_modules->get_module_info($folder_name);
        return $data_module;
    }
    public function getConfig()
    {
        $this->load->model($this->config->item('admin_folder') . "/model_configurations");
        $data_config = $this->model_configurations->get_config();
        return $data_config;
    }
    protected function getImageConfig($imgName)
    {
        $config['upload_path']   = $this->image_up_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '5000';
        $config['max_width']     = '5000';
        $config['max_height']    = '5000';
        $config['file_name']     = $imgName;
        return $config;
    }
    protected function getFileConfig($fileName)
    {
        $config['upload_path']   = $this->image_up_path;
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
        $config['max_size']      = '5000';
        $config['max_width']     = '5000';
        $config['max_height']    = '5000';
        $config['file_name']     = $fileName;
        return $config;
    }
    protected function creatThumnail($imgName, $thumbCropping)
    {
        $thumb_width  = ($this->getModuleInfo()->thumb_width ? $this->getModuleInfo()->thumb_width : $this->getConfig()->thumb_width);
        $thumb_height = ($this->getModuleInfo()->thumb_height ? $this->getModuleInfo()->thumb_height : $this->getConfig()->thumb_height);
        include_once(CLASSES_PATH . "/thumbnail_images.class.php");
        $obj_img             = new thumbnail_images();
        $obj_img->NewWidth   = $thumb_width;
        $obj_img->NewHeight  = $thumb_height;
        $obj_img->Cropping   = $thumbCropping;
        $obj_img->PathImgOld = $this->image_up_path . "/" . $imgName;
        $obj_img->PathImgNew = $this->thumb_up_path . "/" . $imgName;
        $obj_img->create_thumbnail_images();
    }
    protected function resizeImage($imgName, $imageCropping)
    {
        $img_width  = (!empty($this->getModuleInfo()->image_width) ? $this->getModuleInfo()->image_width : 640);
        $img_height = (!empty($this->getModuleInfo()->image_height) ? $this->getModuleInfo()->image_height : 480);
        include_once(CLASSES_PATH . "/thumbnail_images.class.php");
        $obj_Bigimg             = new thumbnail_images();
        $obj_Bigimg->NewWidth   = $img_width;
        $obj_Bigimg->NewHeight  = $img_height;
        $obj_Bigimg->Cropping   = $imageCropping;
        $obj_Bigimg->PathImgOld = $this->image_up_path . "/" . $imgName;
        $obj_Bigimg->PathImgNew = $this->image_up_path . "/" . $imgName;
        $obj_Bigimg->create_thumbnail_images();
    }
    /*
    |--------------------------------------------------------------------------
    | Admin Settings
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $folder              = $this->getFolder();
        $data["folder_name"] = $folder;
        $data["module_name"] = $this->getModuleInfo()->module_name;
        $data["page"]        = $folder . "/home";

        if ($this->input->post("delete_image") == "Y")
        {
            $data_record = $this->modelNameAlias->get_details();
            $image_name  = stripslashes($data_record->watermark_image);
            if (!empty($image_name))
            {
                if (file_exists($this->image_up_path . $image_name))
                {
                    unlink($this->image_up_path . $image_name);
                }
                $data_array = array(
                    'watermark_image' => ''
                );
                $this->modelNameAlias->updateRecord($data_array, 1);
                $data["MSG"] = "Watermark has been deleted successfully.";
            }
        }

        if ($this->input->post("btnsubmit") == "Save")
        {
            $website_title        = $this->input->post("website_title", TRUE);
            $meta_keywords        = $this->input->post("meta_keywords", TRUE);
            $meta_description     = $this->input->post("meta_description", TRUE);
            $facebook             = $this->input->post("facebook", TRUE);
            $twitter              = $this->input->post("twitter", TRUE);
            $linkedin             = $this->input->post("linkedin", TRUE);
            $youtube              = $this->input->post("youtube", TRUE);
            $googleplus           = $this->input->post("googleplus", TRUE);
            $instagram            = $this->input->post("instagram", TRUE);
            $blogger              = $this->input->post("blogger", TRUE);
            $editor               = $this->input->post("editor", TRUE);
            $thumb_width          = $this->input->post("thumb_width", TRUE);
            $thumb_height         = $this->input->post("thumb_height", TRUE);
            $vertical_alignment   = $this->input->post("vertical_alignment", TRUE);
            $horizontal_alignment = $this->input->post("horizontal_alignment", TRUE);
            $watermark_padding    = $this->input->post("watermark_padding", TRUE);
            $image1_name          = $_FILES["image1"]["name"];
            $image1_tmp_name      = $_FILES["image1"]["tmp_name"];

            $cn_phone             = $this->input->post("cn_phone", TRUE);
            $cn_fax               = $this->input->post("cn_fax", TRUE);
            $cn_mob               = $this->input->post("cn_mob", TRUE);
            $gmap_iframe          = $this->input->post("gmap_iframe", TRUE);
            $cn_address_en           = $this->input->post("cn_address_en", TRUE);
            $cn_address_ar           = $this->input->post("cn_address_ar", TRUE);
            $cn_address_fr          = $this->input->post("cn_address_fr", TRUE);
            $cn_pbno              = $this->input->post("cn_pbno", TRUE);
            $skype                = $this->input->post("skype", TRUE);

            $creg_email           = $this->input->post("creg_email", TRUE);
            $mreg_email           = $this->input->post("mreg_email", TRUE);

            $paypal_id           = $this->input->post("paypal_id", TRUE);
            $order_form_name     = $_FILES["order_form"]["name"];
            $order_form_tmp_name = $_FILES["order_form"]["tmp_name"];

            $sup_email = $this->input->post('sup_email', TRUE);

            $data_record = $this->modelNameAlias->get_details();
            if (!empty($image1_name))
            {
                $image_name = stripslashes($data_record->watermark_image);
                if (!empty($image_name))
                {
                    if (file_exists($this->image_up_path . $image_name))
                    {
                        unlink($this->image_up_path . $image_name);
                    }
                }

                $Ext        = strrchr($image1_name, ".");
                $Image1Name = substr(md5(uniqid(rand())), 0, 10);
                $Image1Name = "watermark_" . $Image1Name . $Ext;
                /* --------- Image Uploading --------- */
                $config     = $this->getImageConfig($Image1Name);
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image1'))
                {
                    $data["MSG"]   = strip_tags($this->upload->display_errors());
                    $data["Error"] = "Y";
                    $uploadstatus  = "Error";
                }
            }
            else
            {
                $Image1Name = $data_record->watermark_image;
            }
            if (!empty($order_form_name))
            {
                $order_form_db = stripslashes($data_record->order_form);
                if (!empty($order_form_db))
                {
                    if (file_exists($this->image_up_path . $order_form_db))
                    {
                        unlink($this->image_up_path . $order_form_db);
                    }
                }

                $Ext           = strrchr($order_form_name, ".");
                $OrderFormName = substr(md5(uniqid(rand())), 0, 10);
                $OrderFormName = "OF_" . $OrderFormName . $Ext;
                /* --------- File Uploading --------- */
                $config2       = $this->getFileConfig($OrderFormName);
                $this->load->library('upload', $config2);
                if (!$this->upload->do_upload('order_form'))
                {
                    $data["MSG"]   = strip_tags($this->upload->display_errors());
                    $data["Error"] = "Y";
                    $uploadstatus  = "Error";
                }
            }
            else
            {
                $OrderFormName = $data_record->order_form;
            }
            if ($uploadstatus != "Error")
            {
                $where_array = array(
                    'website_title' => $website_title,
                    'meta_keywords' => $meta_keywords,
                    'meta_description' => $meta_description,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'linkedin' => $linkedin,
                    'youtube' => $youtube,
                    'googleplus' => $googleplus,
                    'instagram' => $instagram,
                    'blogger' => $blogger,
                    'skype' => $skype,
                    'editor' => $editor,
                    'thumb_width' => $thumb_width,
                    'thumb_height' => $thumb_height,
                    'vertical_alignment' => $vertical_alignment,
                    'horizontal_alignment' => $horizontal_alignment,
                    'watermark_padding' => $watermark_padding,
                    'watermark_image' => $Image1Name,
                    'paypal_id' => $paypal_id,
                    'order_form' => $OrderFormName,
                    'sup_email' => $sup_email,
                    'cn_phone' => $cn_phone,
                    'cn_fax'   => $cn_fax,
                    'cn_mob'   => $cn_mob,
                    'gmap_iframe' => $gmap_iframe,
                    'cn_address_en'  => $cn_address_en,
                    'cn_address_ar'  => $cn_address_ar,
                    'cn_address_fr'  => $cn_address_fr,
                    'cn_pbno' => $cn_pbno,
                    'creg_email' => $creg_email,
                    'mreg_email' => $mreg_email
                );

                $this->modelNameAlias->updateRecord($where_array, 1);
                $data["MSG"] = "Settings have been updated successfully!";
            }
        }

        $data_settings = $this->modelNameAlias->get_details();

        $data["website_title"]        = $data_settings->website_title;
        $data["meta_keywords"]        = $data_settings->meta_keywords;
        $data["meta_description"]     = $data_settings->meta_description;
        $data["facebook"]             = $data_settings->facebook;
        $data["twitter"]              = $data_settings->twitter;
        $data["linkedin"]             = $data_settings->linkedin;
        $data["youtube"]              = $data_settings->youtube;
        $data["googleplus"]           = $data_settings->googleplus;
        $data["instagram"]            = $data_settings->instagram;
        $data["blogger"]              = $data_settings->blogger;
        $data["editor"]               = $data_settings->editor;
        $data["thumb_width"]          = $data_settings->thumb_width;
        $data["thumb_height"]         = $data_settings->thumb_height;
        $data["vertical_alignment"]   = $data_settings->vertical_alignment;
        $data["horizontal_alignment"] = $data_settings->horizontal_alignment;
        $data["watermark_padding"]    = $data_settings->watermark_padding;
        $data["watermark_image"]      = $data_settings->watermark_image;
        $data["paypal_id"]            = $data_settings->paypal_id;
        $data["file_order_form"]      = $data_settings->order_form;
        $data['sup_email']            = $data_settings->sup_email;

        $data['cn_phone']            = $data_settings->cn_phone;
        $data['cn_fax']            = $data_settings->cn_fax;
        $data['cn_mob']            = $data_settings->cn_mob;

        $data['gmap_iframe']       = $data_settings->gmap_iframe;
        $data['cn_address_en']        = $data_settings->cn_address_en;
        $data['cn_address_ar']        = $data_settings->cn_address_ar;
        $data['cn_address_fr']        = $data_settings->cn_address_fr;
        $data['cn_pbno']           = $data_settings->cn_pbno;
        $data['skype']             = $data_settings->skype;

        $data['creg_email']        = $data_settings->creg_email;
        $data['mreg_email']        = $data_settings->mreg_email;

        $this->load->view($this->config->item("admin_folder") . "/template", $data);

    }

}
