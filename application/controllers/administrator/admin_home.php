<?php

	class Admin_home extends CI_Controller {
		
		public function __construct(){
			parent::__construct();
			if ($this->session->userdata('admin_logged_in')==FALSE){
				header('Location: '.HOST_URL."/".$this->config->item("admin_login"));
				break;
			}
		}
		
		public function index(){
			$data["page"] = "admin_home";

			$this->load->model($this->config->item('admin_folder')."/model_modules");
			
			$admin_user_id   = $this->session->userdata('admin_user_id');
			$admin_user_type = $this->session->userdata('admin_user_type');
			$data_modules = $this->model_modules->get_modules($admin_user_id, $admin_user_type);
			$data["modules"] = $data_modules;
			
			$this->load->view($this->config->item('admin_folder')."/template", $data);
		}
		
		
		
	}

?>