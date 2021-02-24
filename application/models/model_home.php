<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function getUpload(){
		$kary = $this->db->get('karyawan');
				return $kary;
	}
	
	public function get_nilai($nm,$th){
		$this->db->where('nama',$nm);
		$this->db->from('sikap');
		$this->db->where('tahun',$th);
		$tgl = $this->db->get()->result();
		return $tgl;
	}

}