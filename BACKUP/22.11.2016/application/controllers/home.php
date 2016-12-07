<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{

    /*
    |--------------------------------------------------------------------------
    | Constructor
    |--------------------------------------------------------------------------
    */
    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->load->model('model_languages');
        $lan = $this->model_languages->get_language();

        $this->lang->load('auto', $languages[$lan]);

        //var_dump($this->session->userdata('logged_model'));
    }

    /*
    |--------------------------------------------------------------------------
    | Default Method
    |--------------------------------------------------------------------------
    */
    function index()
    {
        $data["page"]        = "home";
        $data["active_menu"] = "home";

        $this->load->model('model_services');
        $data_records = $this->model_services->get_all_records(array("is_active"=>'Y'), 100, 0, 'orderby', 'ASC');
        $data["services"] = $data_records;

        //Add all banners active
        $this->load->model("model_banners");
  			$data["data_banners"] = $this->model_banners->get_all_records(array('is_active'=>'Y'), 10, 0, 'orderby', 'ASC');

        //Content management for about us
        $this->load->model('model_contents');
        $data["about_us"] = $this->model_contents->get_pages(2);

        //Get all facebook videos
        $this->load->model('model_gallery_videos');
  			$data_gallery = $this->model_gallery_videos->get_all_records(array('is_active'=>'Y'), 0, 10000, 'orderby', 'ASC');
  			$data["data_videos"] = $data_gallery;

        //Get all clients
        $this->load->model('model_clients');
  			$data["data_clients"] = $this->model_clients->get_all_records(array('is_active'=>'Y'), 0, 10000, 'orderby', 'ASC');

        //Get all clients
        $this->load->model('model_reviews');
  			$data["data_reviews"] = $this->model_reviews->get_all_records(array('is_active'=>'Y'), 0, 10000, 'orderby', 'ASC');

        //Get images from instagram
        require_once APPPATH.'libraries/Instagram.php';
	      $instagram = new Instagram('1624352992', '207419c0928f4a9a9413b2375312d1d6');
	      $data['instagram_photos'] = $instagram->get_recent_medias()->data;

        $this->load->view("template", $data);

    }

}
