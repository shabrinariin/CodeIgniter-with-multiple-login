<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {
	
	public function harian()
	{	
		$this->load->model('model_absen');
		$data['tg'] = $this->model_absen->get_tgl()->result();
		$data['bl'] = $this->model_absen->get_bulan()->result();
		$tg=$this->input->post('tgl');
		$bln=$this->input->post('bulan');
		$thn=$this->input->post('tahun');
		$data['absen'] =$this->model_absen->absen_har($tg,$bln,$thn);
		$this->load->view('Admin/harian',$data);
	}
	
	public function bulanan()
	{	$this->load->model('model_absen');
		$abs['bl'] = $this->model_absen->get_bulan()->result();
		$bln=$this->input->post('bulan');
		$thn=$this->input->post('tahun');
		$abs['absen'] =$this->model_absen->absen_bul($bln,$thn);
		$this->load->view('Admin/bulanan',$abs);
	}
	
	public function get_hari(){
		$this->load->model('model_absen');
		$data['tg'] = $this->model_absen->get_tgl()->result();
		$data['bl'] = $this->model_absen->get_bulan()->result();
		$tg=$this->input->post('tgl');
		$bln=$this->input->post('bulan');
		$thn=$this->input->post('tahun');
		$data['absen'] =$this->model_absen->absen_har($tg,$bln,$thn);
		$this->load->view('Admin/harian',$data);
	}
}
