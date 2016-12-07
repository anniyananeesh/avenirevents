<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller	{
		
		public function __contruct(){
                    parent::__contruct();
		}
		
		public function index(){
                    
			$data["page"] = "login";
			if (!isset($MSG)){ $data["MSG"] = "Please enter a valid username and password to get access."; } 
			if ($this->session->userdata('admin_logged_in')==TRUE){
				header('Location: '.HOST_URL."/adminhome");
				break;
			}
			
			$this->load->model($this->config->item('admin_folder')."/model_admin_user");
			
			if (isset($_POST) && count($_POST) != 0){
                            
                            $username 		= $this->input->post("username", TRUE);
                            $password 		= $this->input->post("password", TRUE);
                            $check_user 	= $this->model_admin_user->authenticate($username, $password);

                            switch($check_user) {

                                case("N"): {

                                        $data["MSG"] = "Error : Username or Password is invalid!";
                                        break;
                                }
                                case("S"): {

                                        $data["MSG"] = "Your account has been suspended by Admin";
                                        break;
                                }
                                case("B"): {

                                        $data["MSG"] = "Your account has been blocked!";
                                        break;
                                }
                                case("Y"): {

                                        $user_data = $this->model_admin_user->get_user_info($username, $password);
                                        $encrypted_url = sha1(base_url());
                                        $admin_session_data = array(
                                                'admin_base_url'    	=> $encrypted_url,
                                                'admin_user_id'     	=> $user_data[0]->id,
                                                'admin_full_name'   	=> $user_data[0]->full_name,
                                                'admin_user_type'    => $user_data[0]->user_type,
                                                'admin_rememberme'	=> FALSE,
                                                'admin_logged_in'    => TRUE
                                        );

                                        $this->session->set_userdata($admin_session_data);
                                        header('Location: '.HOST_URL."/adminhome");
                                        break;
                                }

                            }
                                
			}
			
			$this->load->view($this->config->item('admin_folder').'/template', $data);
		}
				
	}