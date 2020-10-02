<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }



   public function requests_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('account/requests');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}

	public function favourites_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('account/favourites');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function myproperties_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('account/my-properties');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function myprofile_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('account/my-profile');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function accountsetting_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('account/account-setting');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}

}
