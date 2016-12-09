<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Quote extends CI_Controller
{

    protected $message;

    function __construct()
    {
        parent::__construct();
        $languages = get_all_languages();
        $this->lang->load('auto', $languages[$this->uri->segment(1)]);
        $this->message = array();

        $this->load->model('model_languages', 'modelLangAlias');

    }

    function index()
    {
        $data     = array();
        $form_get = $_GET;
        $error    = false;

        if (isset($form_get) && !empty($form_get)) {

            if ($form_get["name"] == "") {
                $error = true;

                $data = array(
                    'error' => TRUE,
                    'message' => 'Enter a valid name please',
                    'code' => 400
                );
            }

            if ($form_get["phone"] == "") {
                $error = true;

                $data = array(
                    'error' => TRUE,
                    'message' => 'Phone number is required',
                    'code' => 400
                );
            }

            if (!$error) {
                $this->load->model('model_settings');
                $data_title = $this->model_settings->get_details();

                $full_name = $form_get["name"];
                $phone     = $form_get["phone"];
                $comments  = $form_get["regards"];
                $email     = "No email";

                $this->load->library('email');
                $this->config->load('email', true);
                $this->email->from('no-reply@avenirevents.com', $name);
                $this->email->to($data_title->sup_email);
                $this->email->subject(SITE_NAME . ' - Contact Form');

                include_once(MISC_PATH . "/emails.php");
                $message = $contact_email;

                $this->email->message($message);
                if ($this->email->send()) {
                    $data = array(
                        'error' => FALSE,
                        'message' => 'Your quote has been send successfully',
                        'code' => 200
                    );

                } else {

                    $data = array(
                        'error' => TRUE,
                        'message' => 'ERROR: Your email has not send due to relay error',
                        'code' => 400
                    );

                }

            }


        } else {

            $data = array(
                'error' => TRUE,
                'message' => 'ERROR: Something went wrong :(. Please redo the action',
                'code' => 400
            );

        }

        echo json_encode($data);

    }

}
