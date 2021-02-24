<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_absen extends CI_Model {
	
	public function get_bulan(){
		$bl = $this->db->get('bulan');
		return $bl;
	}
	
	public function get_tgl(){
		$tg = $this->db->get('tgl');
		return $tg;
	}

	public function get_thn(){
		$th = $this->db->get('tahun');
		return $th;
	}

	
	public function absen_bul($bln,$thn){
		$query = "select *from finger where finger.id_bulan='$bln' and finger.tahun='$thn'";
		$absen = $this->db->query($query)->result();
		return $absen;
	}
	public function absen_har($tg,$bln,$thn){
		$this->db->from('finger');
		$this->db->where('tanggal',$tg);
		$this->db->where('id_bulan',$bln);
		$this->db->where('tahun',$thn);
		$absen = $this->db->get()->result();
		return $absen;
	}
	
}
