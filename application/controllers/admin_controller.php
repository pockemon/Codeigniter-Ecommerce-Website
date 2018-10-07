<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
  //		$this->load->helper('url');
	//  	$this->load->helper('form');
		  $this->load->model('show_model');
		  $data["fetch_data"] = $this->show_model->show_data();
	//	$this->load->library('session');
		  $this->load->view('admin/page',$data);
	}


	public function color()
	{
//		$this->load->helper('url');
	//	$this->load->helper('form');
		$this->load->model('show_model');
		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$answer = $this->input->post('color');
  		$data["fetch_data"] = $this->show_model->show_data_color($answer);
			$this->load->view('admin/page_color',$data);

   }

 }

 public function size()
 {
//	 $this->load->helper('url');
//		$this->load->helper('form');
		$this->load->model('show_model');
	 if ($this->input->server('REQUEST_METHOD') == 'POST') {

		 $answer = $this->input->post('size');
		 $data["fetch_data"] = $this->show_model->show_data_size($answer);
		 $this->load->view('admin/page_size',$data);

	 }

 }

 public function category()
 {
//	 $this->load->helper('url');
//		$this->load->helper('form');
		$this->load->model('show_model');
	 if ($this->input->server('REQUEST_METHOD') == 'POST') {

		 $answer1 = $this->input->post('category');
		 $data["fetch_data"] = $this->show_model->show_data_category($answer1);
		 $this->load->view('admin/page_category',$data);

	 }

 }

 public function price()
 {
	// $this->load->helper('url');
	//	$this->load->helper('form');
		$this->load->model('show_model');
	 if ($this->input->server('REQUEST_METHOD') == 'POST') {

		 $answer1 = $this->input->post('price');
		 $data["fetch_data"] = $this->show_model->show_data_price($answer1);
		 $this->load->view('admin/page_price',$data);

	 }

 }
}

?>
