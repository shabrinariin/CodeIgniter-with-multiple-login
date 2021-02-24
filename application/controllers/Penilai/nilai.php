<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	
	public function index()
	{	$this->load->model('model_nilai');
		$data['bl'] = $this->model_nilai->get_bulan()->result();
		$data['th'] = $this->model_nilai->get_tahun()->result();
		$nm =$this->session->userdata('nama');
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$data['nilai'] =$this->model_nilai->get_nilai($nm,$bln,$thn);
		$this->load->view('Penilai/nilai',$data);
	}
	
	public function prints(){
		$kar = $this->uri->segment(4);
		$tampil['sikap'] = $this->db->get_where('sikap',array('id_nilai'=>$kar))->result();
		$html = $this->load->view('Penilai/print',$tampil);
	}
}
