<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
	    parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function do_login(){
		$username = $this->input->post('username');
		
		$data = array(
			'username' => $username,
			'password' => md5($this->input->post('password')));

		$pengguna = $this->login_model->get_user_info($username);
		$row1 = $pengguna->row_array();

		$cek = $this->login_model->check_login("tbl_user", $data)->num_rows();
		
		if ($cek > 0) {
			$data_session = array(
				'nama' => $row1['nama'],
				'username' => $row1['username'],
				'role' => $row1['role'],
				'id_role' => $row1['id_role'],
				'id_divisi' => $row1['id_divisi']);
			$this->session->set_userdata('logged_in', $data_session);
			redirect('menu');
		} 
		else
		{
			echo "Salah";
		}

	}

	public function do_logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
