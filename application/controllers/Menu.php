<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct() {
	    parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$this->load->view('v_menu');
	}

	public function support_apps(){
		$hasil = $this->home_model->support_apps();
		echo json_encode($hasil);
	}

	public function show_manager(){
		$hasil = $this->home_model->show_manager();
		echo json_encode($hasil);
	}

	public function show_best_employee(){
		$hasil = $this->home_model->show_best_employee();
		echo json_encode($hasil);
	}
}
