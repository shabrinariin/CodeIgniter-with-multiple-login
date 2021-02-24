<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skp extends CI_Controller {
	
	public function index()
	{
		$nm= $this->session->userdata('nama');
		$kt ="";
		$thn=$this->input->post('thn');
		$this->load->model('skpu');
		$usl['tgl'] = $this->skpu->usulan($nm,$kt,$thn);
		$this->load->view('User/usul',$usl);
	}
	public function diterima()
	{	
		$nm = $this->session->userdata('nama');
		$thn=$this->input->post('thn');
		$st='Y';
		$this->load->model('skpu');
		$abs['tgl'] =$this->skpu->get_skp($nm,$thn,$st);
		$this->load->view('User/skp',$abs);
	}
	public function ditolak()
	{	
		$nm = $this->session->userdata('nama');
		$thn=$this->input->post('thn');
		$st='N';
		$this->load->model('skpu');
		$abs['tgl'] =$this->skpu->get_skp($nm,$thn,$st);
		$this->load->view('User/skpn',$abs);
	}
	public function detail()
	{	
		$nm = $this->session->userdata('nama');
		$bl=$this->uri->segment(4);
		$th=$this->uri->segment(5);
		$this->load->model('skpu');
		$abs['tgl'] =$this->skpu->get_detail($nm,$bl,$th);
		$this->load->view('User/skpdetail',$abs);
	}
	public function tambahdetail()
	{	
		$bl=$this->uri->segment(4);
		$th=$this->uri->segment(5);
		$this->load->model('skpu');
		$data['sk'] = $this->skpu->tmbh_detail($bl,$th);
		$data['bln'] = $this->db->get('bulan')->result();
		$data['thn'] = $this->db->get('tahun')->result();
		$data['tg'] = $this->db->get('tgl')->result();
		$this->load->view('User/tambah',$data);
	}
	
	public function simpan(){
		$th= $this->input->post('thn');
		$bl=$this->input->post('bln');
		$tambah = array(
		
				'nama'		=> $this->session->userdata('nama'),
				'nip'		=> $this->session->userdata('nip'),
				'tanggal' 	=> $this->input->post('tanggal'),
				'bulan' 	=> $this->input->post('bln'),
				'tahun' 	=> $this->input->post('thn'),
				'Kegiatan' 	=> $this->input->post('kg')
		);
		$this->db->insert('detailskp',$tambah);
		redirect('Kar/skp/diterima');
	}
	public function editdetail()
	{	
		$tl=$this->uri->segment(4);
		$bl=$this->uri->segment(5);
		$th=$this->uri->segment(6);
		$this->load->model('skpu');
		$data['sk'] = $this->skpu->tmbh_detail($bl,$th);
		$data['bln'] = $this->db->get('bulan')->result();
		$data['thn'] = $this->db->get('tahun')->result();
		$data['tg'] = $this->db->get('tgl')->result();
		$this->load->view('User/editdetail',$data);
	}
	
	public function simpaneditdetail()
	{	
		$tg= $this->input->post('tanggal');
		$th= $this->input->post('thn');
		$bl=$this->input->post('bln');
		$tambah = array(
		
				'nama'		=> $this->session->userdata('nama'),
				'nip'		=> $this->session->userdata('nip'),
				'tanggal' 	=> $this->input->post('tanggal'),
				'bulan' 	=> $this->input->post('bln'),
				'tahun' 	=> $this->input->post('thn'),
				'Kegiatan' 	=> $this->input->post('kg')
		);
		$this->db->where('tanggal',$tg);
		$this->db->where('bulan',$bl);
		$this->db->where('tahun',$th);
		$this->db->update('detailskp',$tambah);
		redirect('Kar/skp/diterima');
	}
	
	public function deletedetail()
	{	
		$tl=$this->uri->segment(4);
		$bl=$this->uri->segment(5);
		$th=$this->uri->segment(6);
		$this->db->where('tanggal',$tl);
		$this->db->where('bulan',$bl);
		$this->db->where('tahun',$th);
		$this->db->delete('detailskp');
		redirect('Kar/skp/diterima');
	}
	public function tambahusul(){
		$this->load->model('model_absen');
		$usl['bln'] = $this->model_absen->get_bulan()->result();
		$usl['thn'] = $this->model_absen->get_thn()->result();
		$this->load->view('User/detail',$usl);
	}
	
	public function simpanusul()
	{
		$tambah = array(
			'nama' => $this->session->userdata('nama'),
			'nip' => $this->session->userdata('nip'),
			'bulan' => $this->input->post('bln'),
			'tahun' => $this->input->post('thn'),
			'judul' => $this->input->post('usul'));
		$this->db->insert('skp',$tambah);
		redirect('Kar/skp');
	}
	
	public function deleteusl()
	{
		$dl = $this->uri->segment(4);
		$this->db->where('nip',$dl);
		$this->db->delete('skp');
		redirect('Kar/skp');
	}
	public function edit()
	{
		$edit = $this->uri->segment(4);
		$this->load->model('skpu');
		$data['dit'] = $this->skpu->getskp($edit);
		$data['bln'] = $this->db->get('bulan')->result();
		$data['thn'] = $this->db->get('tahun')->result();
		$this->load->view('User/edited',$data);
	}
	
	public function simpanedit()
	{	
		$edit = $this->input->post('ide');
		$tambah = array(
			'nama' => $this->session->userdata('nama'),
			'nip' => $this->session->userdata('nip'),
			'bulan' => $this->input->post('bln'),
			'tahun' => $this->input->post('thn'),
			'judul' => $this->input->post('usul'));
		$this->db->where('id',$edit);
		$this->db->update('skp',$tambah);
		redirect('Kar/skp');
	}
	
}