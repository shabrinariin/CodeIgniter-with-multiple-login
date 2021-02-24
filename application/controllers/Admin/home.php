<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{	$this->load->model('model_home');
		$data['kar'] = $this->model_home->getUpload()->result();
		$this->load->view('Admin/tampilan_home', $data);
	}

}