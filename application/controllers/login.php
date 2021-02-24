<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login_admin');
	}

	public function get_login()
	{
		$u= $this->input->post('usr');
		$p= $this->input->post('psw');
		$this->load->model('mdl_lgn');
		$this->mdl_lgn->get_login($u,$p);
		$result=$this->mdl_lgn->get_login($u,$p);
	}
	public function logout()
	{
		$this->session->ses_destroy();
		$this->load->view('login_admin');
		
	}
	
	public function signup(){
		$data = array(
				'username'	=>$this->input->post('username'),
				'email'		=>$this->input->post('email'),
				'password'	=>md5($this->input->post('password')),
				'level'		=>'2');
		$this->db->insert('user',$data);
		$kar =array(
				'username'	=>$this->input->post('username'),
				'email'		=>$this->input->post('email'));
		$this->db->insert('karyawan',$kar);
		redirect('login#signup');
		
		
	}
	public function forgot(){
			$this->load->view('forgot');
	}
	public function sendmail(){
		
		/*$ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "xiia7shabrina31@gmail.com";
        $config['smtp_pass'] = "password";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('user', 'email');
        $list = array('email'=>$this->input->post('email')');
        $ci->email->to($list);
        $ci->email->subject("Password Recognition");
        $ci->email->message("isi email");
        if ($this->email->send()) {
            echo "Email sent.";
        } else {
            show_error($this->email->print_debugger());
        }*/
    }
}