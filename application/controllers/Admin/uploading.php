<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploading extends CI_Controller {
	function __construct(){
		parent::__construct();
		   $this->load->model('model_kar','',TRUE);
		$this->load->helper('form');
		$this->load->helper('url');
		$config['upload_path'] 	= '.asset/upload/';
	       $config['allowed_types'] = 'jpg|png|gif|bmp';
		   $config['max_size'] 		= '1000';
		   $config['max_width'] 	= '1024';
		   $config['max_height'] 	= '1468';
	       $this->load->library('upload', $config);
	}
	
	/*function index(){
		   $config['upload_path'] 	= '.asset/upload/';
	       $config['allowed_types'] = 'jpg|png|gif|bmp';
		   $config['max_size'] 		= '1000';
		   $config['max_width'] 	= '1024';
		   $config['max_height'] 	= '1468';
	       $this->load->library('upload', $config);
		
	}*/

	public function apload(){
		 $config['upload_path'] 	= '.asset/upload/';
	     $config['allowed_types'] 	= 'jpg|png|gif|bmp';
		 $config['max_size'] 		= '100';
		 $config['max_width'] 		= '1024';
		 $config['max_height'] 		= '768';
		 $config['file_name'] 		= $this->input->post('photo');
	     $this->load->library('upload', $config);
		
		if(! $this->upload->do_upload('photo')){
			$error = array('error' => $this->upload->display_errors());
			redirect('Admin/karyawan');
		}
		else {
			$data=$this->upload->data();
			$data = array(
				'photo'			=>$this->upload->data(),
				'username'		=>$this->input->post('user'),
				'nip'			=>$this->input->post('nip'), 
				'nama'			=>$this->input->post('nama'),
				'alamat'		=>$this->input->post('alamat'),
				'tgl_lhr'		=>$this->input->post('tanggal'),
				'tempat_lhr'	=>$this->input->post('tempat'),
				'jenis_kelamin'	=>$this->input->post('gender'),
				'email'			=>$this->input->post('email'),
				'telp'			=>$this->input->post('phone'),
				'id_jab'		=>$this->input->post('jabatan'),
				'id_bag'		=>$this->input->post('bagian'),
				
			);
			$this->db->insert('karyawan',$data);
			redirect('Admin/karyawan');
		}
		
	}
	public function saving(){
		if(isset($_FILES['photo']['tmp_name'])){
			if(!$this->upload->do_upload('photo')){ //gagal
				$error = $this->upload->display_errors();
				echo "<script>alert('".$error."');location.href='".$this->config->base_url()."index.php/Admin/karyawan';</script>";
			}else{//sukses
				$photo = $this->upload->data();
				//var_dump($file_gambar); die();
				$data = $this->input->post();
				$add = new model_kar();
				$add->username	=$data['user'];
				$add->nip		=$data['nip']; 
				$add->nama		=$data['nama'];
				$add->alamat	=$data['alamat'];
				$add->tgl_lhr	=$data['tanggal'];
				$add->tempat_lhr=$data['tempat'];
				$add->jenis_kelamin=$data['gender'];
				$add->email		=$$data['email'];
				$add->telp		=$$data['phone'];
				$add->id_jab	=$data['jabatan'];
				$add->id_bag	=$$data['bagian'];
				$add->insertupload();
				redirect('index.php/Admin/karyawan');
			}
		}else{
					redirect($this->config->base_url().'index.php/Admin/karyawan');
			
		}
	}
	
	public function updated($nip){
	if(isset($_FILES['photo']['tmp_name'])){
			if(!$this->upload->do_upload('photo')){ //gagal
				$error = $this->upload->display_errors();
				echo "<script>alert('".$error."');location.href='".$this->config->base_url()."index.php/admin/home';</script>";
			}
			else{	$photo = $this->upload->data();
			$data = $this->input->post();
					$username	=$data['user'];
					$nip		=$data['nip']; 
					$nama		=$data['nama'];
					$alamat		=$data['alamat'];
					$tgl_lhr	=$data['tanggal'];
					$tempat_lhr	=$data['tempat'];
					$jenis_kelamin=$data['gender'];
					$email		=$data['email'];
					$telp		=$data['phone'];
					$id_jab		=$data['jabatan'];
					$id_bag		=$data['bagian'];
					$photo		=$data['photo'];
					$hasil = array(
						'username'		=>$username,
						'nip'			=>$nip, 
						'nama'			=>$nama,
						'alamat'		=>$alamat,
						'tgl_lhr'		=>$tgl_lhr,
						'tempat_lhr'	=>$tempat_lhr,
						'jenis_kelamin'	=>$jenis_kelamin,
						'email'			=>$email,
						'telp'			=>$telp,
						'id_jab'		=>$id_jab,
						'id_bag'		=>$id_bag,
						'photo'			=>$photo);
					$res = $this->model_kar->updateData($hasil,$nip);
					if($res >=1)
					redirect('Admin/karyawan');
				}
	}
	else redirect('Admin/karyawan');
		
	}
}