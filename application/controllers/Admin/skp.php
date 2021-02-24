<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skp extends CI_Controller {
	
	public function index()
	{
		$query = "select *from skp where skp.ket='Y'";
		$tampil = $this->db->query($query)->result();
		$this->load->view('Admin/sasker',['tampil' => $tampil]);
	}
	
	public function tolak(){
		$query = "select *from skp where skp.ket='N'";
		$tampil = $this->db->query($query)->result();
		$this->load->view('Admin/sasker',['tampil' => $tampil]);
	}

}