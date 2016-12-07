<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Forgot_password extends CI_Controller	{
		
		public function __contruct(){
			parent::__contruct();
		}
		
		public function index(){
				
			$data["page"] = "forgot_password";
			if (!isset($MSG)){ $data["MSG"] = "Please enter your email to receive your password."; } 
	
			if (isset($_POST) && count($_POST) != 0){
				$email 		= $this->input->post("email", TRUE);
				
				$this->load->model($this->config->item('admin_folder')."/model_admin_user");
				$check = $this->model_admin_user->isExist(array('email' => $email));
				if($check){
					
					$pass = substr(md5(uniqid(rand())),0,8);
					$encrpPass = sha1($this->config->item("salt").$pass.$this->config->item("salt"));
					
					$this->model_admin_user->updatePassword(array("password" => $encrpPass), $email);
					 
					$this->load->library('email');
					$this->config->load('email',true);
					$this->email->from($this->config->item('from','email'));
					$this->email->to($email);
					
					$this->email->subject('New Password on '.SITE_NAME);
				
					$msg = "Hi User,"."\n"."\n";
					$msg.= "Your new password is ".$pass."\n"."\n";
					$this->email->message($msg);
					
					if ($this->email->send())
					{
						$mail_sent = true;
						
					}
					
					$data["MSG"] =	"Your password has been sent!";
					
				}
				else{
				
					$data["MSG"] =	"Email does not exist!";
				}
			}	
			
			$this->load->view($this->config->item('admin_folder')."/template", $data);
		}
				
	}