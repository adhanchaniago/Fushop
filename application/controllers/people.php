<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class people extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Product_model'); 
	 }

	public function index()
	{ 
		$this->load->view('people/home');
	}
}