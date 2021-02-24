<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absenkar extends CI_Model {

	public function get_absen($nm,$bul,$th)
	{		$this->db->where('nama',$nm);
			$this->db->from('finger');
			$this->db->where('id_bulan',$bul);
			$this->db->where('tahun',$th);
			$tgl = $this->db->get()->result();
			return $tgl;
			
	}
}