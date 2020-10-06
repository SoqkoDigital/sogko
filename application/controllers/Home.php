<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function register_(){

		 /*Check if registration button is clicked */
		 if($this->input->post('reguser'))
			{	
				/*validate input field */
				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email Address', 'required');
				$this->form_validation->set_rules('mobno', 'Mobile No.', 'required');
				$this->form_validation->set_rules('password1', 'Password', 'required');
				$this->form_validation->set_rules('password2', 'Confirm Password', 'required');
				
				if($this->form_validation->run() !== false)
      			{
                
				//check if the password1 and password2 matches 
				if (strcmp(sha1($this->input->post('password1')), sha1($this->input->post('password2')))!=0)
					{
						$data['error']="<div class=\"alert alert-danger alert-dismissible\">Password don't Match</div>";
					}else{

						$password=sha1($this->input->post('password1'));
						$fname=$this->input->post('fname');
						$lname=$this->input->post('lname');
						$email=$this->input->post('email');
						$mob_no=$this->input->post('mobno');
						$tbl_userrole_idtbl_userrole=1;
						$tbl_usercategory_idtbl_usercategory=3;
						$reporting_to=1;
						$created_on=date('Y-m-d H:i:s');
						$created_by=1;
					
						$emailcheck=$this->db->query("SELECT email_address FROM  tbl_user WHERE email_address='".$email."'");
						$usrow = $emailcheck->num_rows();

						if($usrow>0)
						{
							$data['msg']="<div class=\"alert alert-danger alert-dismissible\">Email already exist in the system</div>";
						}else{

							$registereduser=$this->db->query("INSERT INTO tbl_user (tbl_userrole_idtbl_userrole,tbl_usercategory_idtbl_usercategory,reporting_to,first_name,last_name,mob_no,email_address,pword,created_on,created_by)VALUES('".$tbl_userrole_idtbl_userrole."','".$tbl_usercategory_idtbl_usercategory."','".$reporting_to."','".$fname."','".$lname."','".$mob_no."','".$email."','".$password."','".$created_on."','".$created_by."')");

							if($registereduser>0)
							{						
								$data['msg']="<div class=\"alert alert-success alert-dismissible\">Registration Completed  Succesfully</div>";
							}else{

								$data['msg']="<div class=\"alert alert-danger alert-dismissible\">Registration Failed</div>";
							}	
						}
					}
				}
			}
		 	
		 	 /*load registration view form*/
			 $this->load->view('css_styling.php');
			 $this->load->view('header');
	         $this->load->view('register',@$data);
	         $this->load->view('footer');
			 $this->load->view('js_styling.php');

        }



     public function signin_(){

		 /*Check if login button is clicked */
		 if($this->input->post('login'))
			{

				/*validate input field */
				$this->form_validation->set_rules('email', 'Email Address', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if($this->form_validation->run() !== false)
	  			{
	  				$email=$this->input->post('email');
					$password=sha1($this->input->post('password'));

					$checkuser=$this->db->query("SELECT idtbl_user,tbl_usercategory_idtbl_usercategory,email_address,first_name FROM  tbl_user WHERE email_address='".$email."' AND pword='".$password."' LIMIT 1");
					$usrow = $checkuser->num_rows();

					if($usrow>0)
					{
						//update last access date
						$lastaccessdate=$this->db->query("UPDATE  tbl_user SET last_accessdate='".date('Y-m-d H:i:s')."' WHERE email_address='".$email."' AND pword='".$password."' LIMIT 1 ");

						$data['msg']="<div class=\"alert alert-success alert-dismissible\">Logged in successfuly </div>";

					 	$userdata = array(
                        'logged_in'  =>  TRUE
                      /*  'email' => $fetch['email_address'],
                        'usercategory' => $fetch['tbl_usercategory_idtbl_usercategory'],
                        'userid' => $fetch['idtbl_user']*/
                    	);


                    	$usersessiondata=$this->session->set_userdata('msg', 'logged_in');
						 redirect(base_url().'Home');                    	

					}else{

						$data['msg']="<div class=\"alert alert-danger alert-dismissible\">Please check your Email or Password. </div>";
					}

	  			}

			}

		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('signin',@$data);
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

     public function resetpassword_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('resetpassword');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }


   	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();
		redirect(base_url().'Home'); 
	}


	public function contactus_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('contactus');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }


    public function aboutus_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('aboutus');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

}
