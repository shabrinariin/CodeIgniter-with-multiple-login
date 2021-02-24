<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_lgn extends CI_Model {

	public function get_login($usr,$psw)
	{
		$u = mysql_real_escape_string($usr);
		$p = md5(mysql_real_escape_string($psw));
		
		$data = $this->db->get_where('user', array('username' => $u, 
												   'password' => $p));
		if(count($data->result()) >0){
			foreach ($data->result() as $qck){
				if($qck->level=='2'){
					$hasil = $this->db->get_where('karyawan', array('username' => $u));
					foreach($hasil->result() as $row){
						$sess_data['logged_in']		='yes';
						$sess_data['nip']			=$row->nip;
						$sess_data['nama']			=$row->nama;
						$sess_data['alamat']		=$row->alamat;
						$sess_data['level']			='2';
						$sess_data['tgl_lhr']		=$row->tgl_lhr;
						$sess_data['tempat_lhr']	=$row->tempat_lhr;
						$sess_data['telp']			=$row->telp;
						$sess_data['jabatan']		=$row->jabatan;
						$sess_data['bagian']		=$row->bagian;
						$sess_data['photo']				=$row->photo;
						$this->session->set_userdata($sess_data);
					}
					redirect('Kar/home');
				}
				else if($qck->level=='3'){
					$hasil = $this->db->get_where('penilai', array('username' => $u));
					foreach($hasil->result() as $row){
						$sess_data['logged_in']		='yes';
						$sess_data['nama']		=$row->nama;
						$sess_data['id_jab']		=$row->id_jab;
						$sess_data['id_bag']		=$row->id_bag;	
						$sess_data['photo']		=$row->photo;
						$this->session->set_userdata($sess_data);
					}
					redirect('Penilai/home');
				}
				else if ($qck->level=='1'){
					$hasil = $this->db->get_where('admin', array('username' => $u));
					foreach($hasil->result() as $row){
					$sess_data['logged_in']		='yes';
						$sess_data['username']	=$row->username;
						$sess_data['nama']		=$row->nama;
						$sess_data['alamat']	=$row->alamat;
						$sess_data['photo']		=$row->photo;
						$this->session->set_userdata($sess_data);
					}
					redirect('Admin/home');
				}
			
			}
	
		}
		else if (count($data->result())==0)
			redirect('login');	
	}
}