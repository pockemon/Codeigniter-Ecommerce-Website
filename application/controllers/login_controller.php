<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->view('admin/login');
	}

	public function login_pro()
	{
                $this->load->helper(array('form', 'url', 'security'));

                 $this->load->library('form_validation');

								 $this->form_validation->set_rules('Email','Email',array('required', 'valid_email'));
								 $this->form_validation->set_rules('Password', 'password', array('required', 'min_length[5]'));

								if ($this->form_validation->run() == FALSE)
								{
								        $this->load->view('admin/login');
								}
								else
								{
									$name = $this->input->post('Email');
									$pass = $this->input->post('Password');

									$this->load->model('login_model');
									$result = $this->login_model->admin_login($name, $pass);
								}

									if($result)
									{
										echo "welcome";
									}
									else {
										$this->load->view('admin/login');
										echo 'plz try again';

								}


       }
}
?>
