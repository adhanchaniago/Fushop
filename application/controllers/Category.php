
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Product_model'); 
	 }

	public function index()
	{
		$this->load->view('customer/category');
	}

	public function cc($id)
	{
		$p = $this->Product_model->productDetailId($id); 	
		$this->load->view('customer/category');
	}

	

}