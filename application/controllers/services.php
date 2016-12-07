<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);

        $this->load->library('encrypt');
        $this->load->model('model_contents', 'modelAliasCms');

    }

    function auction()
    {
        $data["page"]        = "services/auction";
        $data["active_menu"] = "auction";

        //Get content page for auction in services page section
        $data['data_page'] = $this->modelAliasCms->get_details(33);

        $this->load->view("template", $data);
    }

    function conference()
    {

      $data["page"]        = "services/conference";
      $data["active_menu"] = "conference";

      //Get content page for auction in services page section
      $data['data_page'] = $this->modelAliasCms->get_details(34);

      $this->load->view("template", $data);
    }

    function exhibitions()
    {
      $data["page"]        = "services/exhibition";
      $data["active_menu"] = "exhibitions";

      //Get content page for auction in services page section
      $data['data_page'] = $this->modelAliasCms->get_details(35);

      $this->load->view("template", $data);
    }

    function parties()
    {
      $data["page"]        = "services/party";
      $data["active_menu"] = "parties";

      //Get content page for auction in services page section
      $data['data_page'] = $this->modelAliasCms->get_details(36);

      $this->load->view("template", $data);
    }

    function casting()
    {
      $data["page"]        = "services/casting";
      $data["active_menu"] = "casting";

      //Get content page for auction in services page section
      $data['data_page'] = $this->modelAliasCms->get_details(37);

      $this->load->view("template", $data);
    }

    function send_service_query()
    {
        if (isset($_POST) && count($_POST) != 0)
        {
            $this->load->model('model_settings');
            $data_title = $this->model_settings->get_details();

            $full_name = $this->input->post("name", TRUE);
            $email     = $this->input->post("email", TRUE);
            $phone     = $this->input->post("phone", TRUE);
            $comments  = $this->input->post("message", TRUE);

            $this->load->library('email');
            $this->config->load('email', true);
            $this->email->from($email, $full_name);
            $this->email->to($data_title->sup_email);
            $this->email->subject(SITE_NAME . ' - Contact Form');

            include_once(MISC_PATH . "/emails.php");
            $message = $contact_email;

            $this->email->message($message);
            if ($this->email->send())
            {
                $this->session->set_flashdata('success_message', "Your email has been send");
                redirect('/services/' . $_POST['service_type'] . '#postServiceQryFrm');
            }
            else
            {
                $this->session->set_flashdata('error_message', "Something went wrong.");
                redirect('/services/' . $_POST['service_type'] . '#postServiceQryFrm');
            }

        } else {
            redirect('/');
        }
    }

}
