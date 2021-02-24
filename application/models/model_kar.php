<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kar extends CI_Model {

	public function __construct(){
		parent::__construct($this);
	}
	
	public function insertupload($data){
		$this->db->insert('karyawan');
	}
	
	public function primaryKey(){
		return 'nip';
	}
	public function get_kar($nip){
		$kary =  $this->db->get_where('karyawan',array('nip'=>$nip));
		return $kary;
	}
	public function updateData($hasil,$nip){
		$this->db->where('nip',$nip);
		$this->db->update('karyawan',$hasil);
	}
}
