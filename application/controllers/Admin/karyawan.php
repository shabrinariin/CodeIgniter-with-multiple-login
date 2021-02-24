<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent :: __construct();	
	}
	
	public function index()
	{	
		$query = "select * from karyawan,jabatan,bagian where karyawan.id_jab=jabatan.id_jab and
				karyawan.id_bag=bagian.id_bag";
		$tampil = $this->db->query($query)->result();
		$this->load->view('Admin/showkaryawan',[
			'tampil' => $tampil
		]);
	}
	public function add(){
		$this->load->model('model_kar');
		$data['bag'] = $this->db->get('bagian')->result();
		$data['jab'] = $this->db->get('jabatan')->result();
		$this->load->view('Admin/add_karyawan',$data);
	}
	public function edit_kar(){
		$this->load->model('model_kar');
		$kar=$this->uri->segment(4);
		$data['kary'] = $this->model_kar->get_kar($kar)->row_array();
		$data['bag'] = $this->db->get('bagian')->result();
		$data['jab'] = $this->db->get('jabatan')->result();
		$this->load->view('Admin/editkar',$data);
	}
	
	public function delete_kar(){
		$krw = $this->uri->segment(4);
		$this->db->where('nip',$krw);
		$this->db->delete('karyawan');
		redirect('Admin/karyawan');
	}
	
	public function show(){
		$kar = $this->uri->segment(4);
		$query = "select *from karyawan, jabatan, bagian where karyawan.nip=$kar and 
					karyawan.id_jab=jabatan.id_jab and karyawan.id_bag=bagian.id_bag";
		$lihat = $this->db->query($query)->result();
		$this->load->view('Admin/detailed',['lihat' => $lihat]);
	}
}

