<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		//echo "welcome to admin login";
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('admin/login');

		//$this->load->model('login_model');
	//	$this->login_model->admin_login();
	}

	
}
?>
