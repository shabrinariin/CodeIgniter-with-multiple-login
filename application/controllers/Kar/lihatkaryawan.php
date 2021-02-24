<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihatkaryawan extends CI_Controller {
	
	public function index()
	{
		$query = "select * from karyawan,jabatan,bagian where karyawan.id_jab=jabatan.id_jab and
				karyawan.id_bag=bagian.id_bag";
		$tampil = $this->db->query($query)->result();
		$this->load->view('User/karya',[
			'tampil' => $tampil
		]);
	}
	
	public function detail(){
		
		$kar = $this->uri->segment(4);
		$query = "select *from karyawan, jabatan, bagian where karyawan.nip=$kar and 
					karyawan.id_jab=jabatan.id_jab and karyawan.id_bag=bagian.id_bag";
		$lihat = $this->db->query($query)->result();
		$this->load->view('User/detail',['lihat' => $lihat]);
	}

}