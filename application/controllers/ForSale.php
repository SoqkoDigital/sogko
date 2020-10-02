<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForSale extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
    }


	public function commercialproperties_()
	{
		$this->load->view('css_styling.php');
		$this->load->view('header');
		$this->load->view('sale/commercial-properties');
		$this->load->view('footer');
		$this->load->view('js_styling.php');
	}


	public function flatsapartment_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
         $this->load->view('sale/flats-apartment');
         $this->load->view('footer');
		 $this->load->view('js_styling.php');
		 
        }
    public function houses_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('sale/houses');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

     public function land_(){
		 $this->load->view('css_styling.php');
		 $this->load->view('header');
	     $this->load->view('sale/land');
	     $this->load->view('footer');
		 $this->load->view('js_styling.php');
	 
    }

}
