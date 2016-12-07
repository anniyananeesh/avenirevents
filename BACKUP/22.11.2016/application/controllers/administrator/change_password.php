<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Change_password extends CI_Controller	{

/*
|--------------------------------------------------------------------------
| Constructor
|--------------------------------------------------------------------------
*/			
		public function __construct(){
			parent::__construct();
			if ($this->session->userdata('admin_logged_in')==FALSE){
				header('Location: '.HOST_URL."/".$this->config->item("admin_login"));
				break;
			}
		}
		
		public function index(){
				
			$data["page"] = "change_password";
						
			$this->load->model($this->config->item('admin_folder')."/model_admin_user");
			$data['info'] = $this->model_admin_user->get_details($this->session->userdata("admin_user_id"));
			
			if(isset($_POST) && count($_POST) != 0) {
			
				$id					= $this->session->userdata("admin_user_id");
				$username 			= $this->input->post("username", TRUE);
				$oldpassword 		= $this->input->post("oldpassword", TRUE);
				$newpassword 		= $this->input->post("newpassword", TRUE);
				$confirmpassword 	= $this->input->post("confirmpassword", TRUE);
				
				$encr_oldpassword = sha1($this->config->item("salt").$oldpassword.$this->config->item("salt"));
				
				$is_exist_array   = array('username'=>$username, 'password !='=>$encr_oldpassword);
				if ($this->model_admin_user->isExist($is_exist_array)==FALSE){
					
					$encrpPass = sha1($this->config->item("salt").$newpassword.$this->config->item("salt"));
				
					$data_ar = array("password" => $encrpPass);

					$this->model_admin_user->updateRec($data_ar,$id);
					$data["MSG"] = "Record has been updated successfully!";
					$data['info'] = $this->model_admin_user->get_details($this->session->userdata("admin_user_id"));
				}
				else{
					$data["MSG"] = "Old Password is invalid!";
					$data["Error"] = "Y";
				}
			}
			
			$this->load->view($this->config->item('admin_folder')."/template", $data);
		}
				
	}