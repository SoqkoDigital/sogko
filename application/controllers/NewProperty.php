<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewProperty extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }



   public function addproperty_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('addproperty/add-property');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}

}
