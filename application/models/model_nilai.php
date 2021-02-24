<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nilai extends CI_Model {
	
	public function get_bulan()
	{
			$bl = $this->db->get('bulan');
			return $bl;		
	}
	
	public function get_tahun()
	{
			$th = $this->db->get('tahun');
			return $th;		
	}
	public function get_nilai($nm,$bln,$thn)
	{
		$this->db->where('penilai',$nm);
		$this->db->where('bulan',$bln);
		$this->db->where('tahun',$thn);
		$this->db->from('sikap');
		$nilai = $this->db->get()->result();
		return $nilai;
	}
}
	