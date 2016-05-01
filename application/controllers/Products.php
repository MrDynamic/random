<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
{
	function  __construct() {
		parent::__construct();
		$this->load->library('paypal_lib');
	}
	
	function index(){
		// $data = array();
		//get products data from database
        // $data['products'] = $this->product->getRows();
		//pass the products data to view
		// $this->load->view('products/index', $data);
		echo 'product';
	}
	
	function buy(){
		//Set variables for paypal form
		$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //test PayPal api url
		$paypalID = 'polawat.th-facilitator@gmail.com';
		$returnURL = base_url().'paypal/success'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		//get particular product data
		$userID = 1; //current user id
		$logo = base_url().'assets/images/ocharos-logo.png';
		
		$this->paypal_lib->add_field('business', $paypalID);
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', 'ทดสอบภาษาไทย');
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number',  '00001');
		$this->paypal_lib->add_field('amount',  '500');		
		$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
	}
}