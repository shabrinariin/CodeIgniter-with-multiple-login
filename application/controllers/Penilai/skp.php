<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skp extends CI_Controller {
	
	public function index()
	{
		$th= $this->input->post('thn');
		$kt = "";
		$this->db->where('tahun',$th);
		$this->db->where('penilai',$kt);
		$this->db->where('ket',$kt);
		$this->db->from('skp');
		$tampil = $this->db->get()->result();
		
		$this->load->view('Penilai/skp',[
			'tampil' => $tampil]);
	}
	
	public function terima()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		$load = $this->db->from('skp');
		$tambah = array (
			'penilai' => $this->session->userdata('nama'),
			'ket'	  =>'Y'
		);
		$this->db->where('id',$id);
		$this->db->update('skp',$tambah);
		redirect('Penilai/skp');
		
	}
	
	public function tolak()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		$load = $this->db->from('skp');
		$tambah = array (
			'penilai' => $this->session->userdata('nama'),
			'ket'	  =>'N'
		);
		$this->db->where('id',$id);
		$this->db->update('skp',$tambah);
		redirect('Penilai/skp');
	}
	
	public function diterima()
	{
		$nm = $this->session->userdata('nama');
		$thn=$this->input->post('thn');
		$st='Y';
		$this->db->where('penilai',$nm);
		$this->db->where('tahun',$thn);
		$this->db->where('ket',$st);
		$this->db->from('skp');
		$tampil = $this->db->get()->result();
		$this->load->view('Penilai/terimaskp',['tampil' => $tampil]);
	}
	public function detail()
	{	
		$nm =$this->uri->segment(4);
		$bl=$this->uri->segment(5);
		$th=$this->uri->segment(6);
		$this->db->where('nip',$nm);
		$this->db->where('bulan',$bl);
		$this->db->where('tahun',$th);
		$this->db->from('detailskp');
		$tampil = $this->db->get()->result();
		$this->load->view('Penilai/detailskpuser',['tampil' => $tampil]);
	}
	
	function getnilai()
	{
		$nm =$this->session->userdata('nama');
		$bl=$this->uri->segment(5);
		$th=$this->uri->segment(6);
		$this->db->where('penilai',$nm);
		$this->db->where('bulan',$bl);
		$this->db->where('tahun',$th);
		$this->db->from('skp');
		$tampil = $this->db->get()->result();
		$this->load->view('Penilai/isinilai',['tampil' => $tampil]);
	}
	
	function inputnilai()
	{
		$tambah = array(
			'bulan' => $this->input->post('bln'),
			'tahun' => $this->input->post('thn'),
			'nama' 	=> $this->input->post('nm'),
			'nip'	=> $this->input->post('nip'),
			'skp'	=> $this->input->post('skp'),
			'pelayanan'	=> $this->input->post('pl'),
			'integritas'	=> $this->input->post('in'),
			'komitmen'	=> $this->input->post('km'),
			'disiplin'	=> $this->input->post('ds'),
			'kerjasama'	=> $this->input->post('ks'),
			'kepemimpinan'	=> $this->input->post('kp'),
			'jumlah'	=> $this->input->post('kp') + $this->input->post('ks') + $this->input->post('ds') +
							$this->input->post('km') + $this->input->post('in') +  $this->input->post('pl'),
			'rata'		=> 'jumlah' / 6,
			'penilai'	=> $this->session->userdata('nama')
		);
		$this->db->insert('sikap',$tambah);
		redirect('Penilai/nilai');
		
	}
	
}