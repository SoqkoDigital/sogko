<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function register_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
         $this->load->view('register');
         $this->load->view('footer');
		 $this->load->view('js_styling.php');
		 
        }
    public function agencysignin_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('agencysignin');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

     public function signin_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('signin');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

     public function contactus_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('contactus');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }
}
