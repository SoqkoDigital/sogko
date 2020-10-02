<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForAdvice extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }



   public function blog_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('advice/blog');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function ideas_(){

		 $this->load->view('css_styling.php');
		 $this->load->view('header');
         $this->load->view('advice/ideas');
         $this->load->view('footer');
		 $this->load->view('js_styling.php');
		 
        }

    public function places_(){

		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('advice/places');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

}
