<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {
	
	public function index()
	{	$nm = $this->session->userdata('nama');
		$bul=$this->input->post('bln');
		$th="2016";
		$this->load->model('absenkar');
		$abs['tgl'] =$this->absenkar->get_absen($nm,$bul,$th);
		$this->load->view('User/absen',$abs);

	}
		
	public function yr17()
	{	$nm = $this->session->userdata('nama');
		$bul=$this->input->post('bln');
		$th="2017";
		$this->load->model('absenkar');
		$abs['tgl'] =$this->absenkar->get_absen($nm,$bul,$th);
		$this->load->view('User/absenyr17',$abs);
	}
}