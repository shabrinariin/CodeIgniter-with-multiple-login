<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	public function getUpload(){
		$kar = $this->db->get('karyawan');
				return $kar;
	}

}