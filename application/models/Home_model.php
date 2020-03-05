<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function support_apps(){
		$this->db->select('nama_apps, deskripsi, link')
		->from('tbl_aplikasi_pendukung')
		->where('show_apps', '1');

		$query = $this->db->get();
		return $query->result();
	}

	public function support_apps1(){
		$this->db->select('nama_apps, deskripsi, link, show_apps')
		->from('tbl_aplikasi_pendukung');

		$query = $this->db->get();
		return $query->result();
	}

	public function show_manager(){
		$this->db->select('tbl_karyawan.id, tbl_karyawan.nama, 
			tbl_karyawan.id_jabatan,
			(SELECT tbl_jabatan.nama_jabatan FROM tbl_jabatan WHERE tbl_karyawan.id_jabatan = tbl_jabatan.id_jabatan) nama_jabatan, 
			(SELECT tbl_divisi.nama_divisi FROM tbl_divisi WHERE tbl_karyawan.id_divisi = tbl_divisi.id_divisi) nama_divisi')
		->from('tbl_karyawan')
		->where('status', '1');

		$query = $this->db->get();
		return $query->result();
	}

	public function show_best_employee(){
		$this->db->select('(SELECT tbl_karyawan.nama FROM tbl_karyawan WHERE tbl_best_employee.nik = tbl_karyawan.nik) nama, 
			tbl_best_employee.pesan, 
			(SELECT tbl_divisi.nama_divisi FROM tbl_divisi WHERE tbl_best_employee.id_divisi = tbl_divisi.id_divisi) divisi')
		->from('tbl_best_employee')
		->where('id_bulan', date('n'))
		->where('tahun', date('Y'));

		$query = $this->db->get();
		return $query->result();
	}

	public function show_best_employee1(){
		$this->db->select('(SELECT tbl_karyawan.nama FROM tbl_karyawan WHERE tbl_best_employee.nik = tbl_karyawan.nik) nama, 
			tbl_best_employee.pesan, 
			(SELECT tbl_divisi.nama_divisi FROM tbl_divisi WHERE tbl_best_employee.id_divisi = tbl_divisi.id_divisi) divisi, tbl_best_employee.*, (SELECT tbl_bulan.nama_bulan FROM tbl_bulan WHERE tbl_best_employee.id_bulan = tbl_bulan.id) bulan')
		->from('tbl_best_employee')
		->order_by('id', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function about_us(){
		$this->db->select('about_us')
		->from('tbl_about_us')
		->where('active', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function about_us1(){
		$this->db->select('*')
		->from('tbl_about_us');
		$query = $this->db->get();
		return $query->result();
	}
}