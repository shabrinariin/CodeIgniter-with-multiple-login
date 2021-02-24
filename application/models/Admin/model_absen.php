<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_absen extends CI_Model {
	
	public function get_data(){
		$tgl = $this->db->get('bulan');
		return $tgl;
	}
	
}
