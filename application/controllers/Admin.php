<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login');		
	}   

	public function login()
	{

		if($this->input->is_ajax_request())
		{
			$username = $this->input->post('username');

			$password = $this->input->post('password');

			if($this->Admin_model->login($username,$password))
			{
				echo 'true';
			}
			else
			{
				echo 'false';
			}

			exit;
		}

		redirect(base_url().'admin');

     

	}
}

?>