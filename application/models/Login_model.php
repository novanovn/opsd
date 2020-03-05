<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function get_user_info($username){
		$this->db->select('(SELECT tbl_karyawan.nama FROM tbl_karyawan WHERE tbl_user.nik = tbl_karyawan.nik) nama, tbl_user.username, (SELECT tbl_role.nama_role FROM tbl_role WHERE tbl_user.id_role = tbl_role.id_role) role, tbl_user.id_role, (SELECT tbl_karyawan.id_divisi FROM tbl_karyawan WHERE tbl_user.nik = tbl_karyawan.nik) id_divisi');
		$this->db->where('username', $username);
		return $this->db->get('tbl_user');
	}

	function check_login($table, $user){
		return $this->db->get_where($table, $user);
	}
}