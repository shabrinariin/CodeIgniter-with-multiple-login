<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sqrty extends CI_model {

	public function getsqurity(){
		$username = $this->session->userdata('username');
		if(empty($username)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	
}