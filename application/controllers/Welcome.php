<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('Model_login');

	}
	public function index()
	{
		$data['periode']=$this->Model_login->periode()->row_array();
		$this->load->view('user/menu');
		$this->load->view('user/content',$data);
	}
	function login_admin(){


		if (isset($_POST['login'])) {
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))


			);
			$cek=$this->Model_login->validasi($data);
			if ($cek->num_rows() > 0) {
				foreach ($cek->result() as  $value) {
					
					$session['userku']=$value->username;
					$session['akses']=$value->hak_akses;
				}
				$this->session->set_userdata($session);
				$level=$this->session->userdata('akses');
				if ($level==1) {
					redirect('Welcome/home');
				}else{
					redirect('Welcome/staff');

				}
				
			}else{

				$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Gagal</h4>
                    <p>Username/Password Salah </p>
                </div>');
                redirect('Welcome/login_admin');
			}
		}else{
		$this->load->view('login');
		}
	}
	function home(){
		if ($this->session->userdata('akses')==1) {
$data['content']='home';
$this->load->view('dashboard',$data);
}else{
redirect('Admin/login');
	
}
	}
	function staff(){
if ($this->session->userdata('akses')==2) {
		$data['content']='home';
$this->load->view('staff/dashboard',$data);
}else{
	$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Gagal</h4>
                    <p>Anda tidak diperbolehkan Mengakses Halaman ini </p>
                </div>');
	redirect('Admin/login');
}
	}
	function ganti_pass(){

		if (isset($_POST['simpan'])) {
			$old=md5($this->input->post('password_lama'));
			$cek=$this->Model_login->cek_pass($old)->num_rows();
			if ($cek >0) {
				$lama=md5($this->input->post('password_lama'));
				$data=array(

					'password'=>md5($this->input->post('password_baru'))
				);
				$this->Model_login->ganti_pass($lama,$data);
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Berhasil</h4>
                    <p>Password Berhasil diganti </p>
                </div>');
				redirect('Welcome/home');
			}else{
$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Password Lama Salah</h4>
                    <p>Coba Lagi </p>
                </div>');
redirect('Welcome/ganti_pass');
			}
		}else{
$data['content']='gantipass';
$this->load->view('dashboard',$data);

		}
	}
	function log_out(){

		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
