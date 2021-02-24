<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skpu extends CI_Model {
	
	public function get_skp($nm,$thn,$st)
	{		$this->db->where('nama',$nm);
			$this->db->from('skp');
			$this->db->where('tahun',$thn);
			$this->db->where('ket',$st);
			$tgl = $this->db->get()->result();
			return $tgl;
			
	}
	
	public function get_detail($nm,$bl,$th)
	{		$this->db->where('nama',$nm);
			$this->db->from('detailskp');
			$this->db->where('bulan',$bl);
			$this->db->where('tahun',$th);
			$tgl = $this->db->get()->result();
			return $tgl;
			
	}
	
	public function tmbh_detail($bl,$th)
	{		$this->db->from('detailskp');
			$this->db->where('bulan',$bl);
			$this->db->where('tahun',$th);
			$sk = $this->db->get()->result();
			return $sk;
			
	}
	public function tmbh($nm,$bl,$th)
	{
			$this->db->from('detailskp');
			$this->db->where('nama',$nm);
			$this->db->where('bulan',$bl);
			$this->db->where('tahun',$th);
			$tgl = $this->db->get()->result();
			return $tgl;
	}
	
	public function usulan($nm, $kt,$thn)
	{
		$this->db->from('skp');
		$this->db->where('nama',$nm);
		$this->db->where('tahun',$thn);
		$this->db->where('penilai',$kt);
		$this->db->where('ket',$kt);
		$tgl = $this->db->get()->result();
			return $tgl;
	}
	
	public function getskp($edit)
	{
		$this->db->from('skp');
		$this->db->where('id',$edit);
		$dit = $this->db->get()->result();
		return $dit;
	}
}