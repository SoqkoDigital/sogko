<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForRent extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }



   public function affordablerentals_()
	{

		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('rent/affordable-rentals');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function flatsapartment_(){

		 $this->load->view('css_styling.php');
		 $this->load->view('header');
         $this->load->view('rent/flats-apartment');
         $this->load->view('footer');
		 $this->load->view('js_styling.php');
		 
        }

    public function houses_(){

		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('rent/houses');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

	public function commercialproperties_()
	{
		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('rent/commercial-properties');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


     public function bedsitter_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('rent/bedsitter');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

}
