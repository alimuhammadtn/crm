<?php
if (!defined('BASEPATH')) exit ('No direct sript access allowed');

class home extends CI_Controller {

    public function __construct(){

    	parent::__construct();

    	$this->load->model('admin_model');
    	$this->load->model('home_model');
    }
	public function index() {

		$this->load->view('dashboard/home');

		$this->Auth_model->isLoggedIn();
	}
}

?>