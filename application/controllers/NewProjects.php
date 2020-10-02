<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewProjects extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }



   public function residential_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('projects/residential');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function commercial_(){

		 $this->load->view('css_styling.php');
		 $this->load->view('header');
         $this->load->view('projects/commercial');
         $this->load->view('footer');
		 $this->load->view('js_styling.php');
		 
        }
}
