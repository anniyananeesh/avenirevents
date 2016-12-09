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

        $this->load->model('model_country', 'modelCtryAlias');
        $this->load->model('model_languages', 'modelLangAlias');
        $this->load->model('model_company', 'modelUserAlias');

    }

    function index()
    {
        $data["page"]        = "register_as";
        $data["active_menu"] = "register_as";
        $this->load->view("template", $data);
    }

    function model()
    {

        $data["page"]        = "register/model";
        $data["active_menu"] = "register_model";
        $data['languages']   = $this->modelLangAlias->getAllLanguages();

        $this->load->view("template", $data);
    }

    function promoter()
    {
        $data["page"]        = "register/promoter";
        $data["active_menu"] = "register_promoter";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

    function stylist()
    {
        $data["page"]        = "register/stylist";
        $data["active_menu"] = "register_stylist";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

    function hostess()
    {
        $data["page"]        = "register/hostess";
        $data["active_menu"] = "register_hostess";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

    function photographers()
    {
        $data["page"]        = "register/photographer";
        $data["active_menu"] = "register_photographer";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

    function entertainer()
    {
        $data["page"]        = "register/entertainer";
        $data["active_menu"] = "register_entertainer";

        $data['languages'] = $this->modelLangAlias->getAllLanguages();
        $this->load->view("template", $data);
    }

}
