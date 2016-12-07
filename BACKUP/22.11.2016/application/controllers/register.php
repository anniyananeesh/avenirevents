<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);

        $this->load->library('encrypt');

        $this->load->model('model_country','modelCtryAlias');
        $this->load->model('model_languages','modelLangAlias');
        $this->load->model('model_company','modelUserAlias');

    }

    function index()
    {
        $data["page"]        = "register_as";
        $data["active_menu"] = "register_as";
        $this->load->view("template", $data);
    }

    function model()
    {

        $data["page"]        = "register_model";
        $data["active_menu"] = "register_model";
        $data['languages'] = $this->modelLangAlias->getAllLanguages();

        $this->load->view("template", $data);
    }

    function promoter()
    {
        $data["page"]        = "register_promoter";
        $data["active_menu"] = "register_promoter";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

    function stylist()
    {
        $data["page"]        = "register_stylist";
        $data["active_menu"] = "register_stylist";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

    public function validate_username($str){

        $where = array(
            'username' => $str
        );

        if($this->modelUserAlias->hasUsername($where)){
            $this->form_validation->set_message('validate_username', 'You are already registered with us.');
            return false;
        } else {
            return true;
        }

    }

}
