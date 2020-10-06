<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }



   public function requests_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/my-requests');
		$this->load->view('account/profile_footer');
	}

	public function favourites_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/my-favourites');
		$this->load->view('account/profile_footer');
	}


	public function myproperties_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/my-properties');
		$this->load->view('account/profile_footer');
	}


	public function myprofile_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/my-profile');
		$this->load->view('account/profile_footer');
	}


	public function accountsetting_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/account-setting');
		$this->load->view('account/profile_footer');
	}


	public function changepassword_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/change-password');
		$this->load->view('account/profile_footer');
	}

	public function dashboard_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/dashboard');
		$this->load->view('account/profile_footer');
	}

	public function payment_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/payment');
		$this->load->view('account/profile_footer');
	}

	public function invoice_()
	{

		$this->load->view('account/profile_header');
		$this->load->view('account/leftmenu');
		$this->load->view('account/invoice');
		$this->load->view('account/profile_footer');
	}


}
