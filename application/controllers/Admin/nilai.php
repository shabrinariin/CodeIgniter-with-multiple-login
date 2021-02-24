<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	
	public function index()
	{	
		$data['sikap'] = $this->db->get('sikap')->result();
		$this->load->view('Admin/nilai',$data);
	}
	public function prints(){
		$kar = $this->uri->segment(4);
		$tampil['sikap'] = $this->db->get_where('sikap',array('id_nilai'=>$kar))->result();
		$html = $this->load->view('Admin/print',$tampil);
	}
	
}

