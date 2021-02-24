<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	
	public function index()
	{	
		$nm = $this->session->userdata('nama');
		$th = $this->input->post('thn');
		$this->load->model('model_home');
		$abs['tgl'] =$this->model_home->get_nilai($nm,$th);
		$this->load->view('User/value',$abs);
	}

	public function printin()
	{
		$kar = $this->uri->segment(4);
		$tampil['sikap'] = $this->db->get_where('sikap',array('id_nilai'=>$kar))->result();
		$html = $this->load->view('User/print',$tampil);
	}	
}