<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
	    parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$this->load->view('template/v_header');
		$this->load->view('v_home');
		$this->load->view('template/v_footer');
	}

	public function support_apps(){
		$hasil = $this->home_model->support_apps();
		echo json_encode($hasil);
	}

	public function support_apps1(){
		$hasil = $this->home_model->support_apps1();
		echo json_encode($hasil);
	}

	public function show_manager(){
		$hasil = $this->home_model->show_manager();
		echo json_encode($hasil);
	}

	public function about_us(){
		$hasil = $this->home_model->about_us();
		echo json_encode($hasil);
	}

	public function about_us1(){
		$hasil = $this->home_model->about_us1();
		echo json_encode($hasil);
	}

	public function show_best_employee(){
		$hasil = $this->home_model->show_best_employee();
		echo json_encode($hasil);
	}

	public function show_best_employee1(){
		$hasil = $this->home_model->show_best_employee1();
		echo json_encode($hasil);
	}
}
