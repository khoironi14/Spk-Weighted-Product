<?php
/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/Model_user');

	}
	function registrasi_akun(){
		$email=$this->input->post('email');
		$cek=$this->Model_user->cek_email($email);
		if ($cek->num_rows() <=0) {
			# code...
		
$data=array(

'nama_lengkap'=>$this->input->post('nama_lengkap'),
'email'=>$this->input->post('email'),
'username'=>$this->input->post('username'),
'password'=>md5($this->input->post('password')),
'hak_akses'=>3

);
$this->Model_user->registrasi_user($data);
$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Berhasil</h4>
                    <p>Terimakasih PEndaftaran Akun berhasil,Silahkan Login Dan input biodata</p>
                </div>');
redirect('user/User/login');
}else{
$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Gagal Registrasi</h4>
                    <p>Email Sudah digunakan Untuk Registrasi</p>
                </div>');
redirect('Welcome/index');

}		
	}
	function login(){

		if (isset($_POST['login'])) {
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))

			);
			$cek=$this->Model_user->login($data);
			if ($cek->num_rows() >0) {
				foreach ($cek->result() as  $value) {
					$session['status']='login';
					$session['username']=$value->username;
					$session['id_user']=$value->id_user;
					$session['hak_akses']=$value->hak_akses;
				}
				$this->session->set_userdata($session);
				redirect('user/User/home');
			}else{
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Gagal Login</h4>
                    <p>Username atau password Anda salah</p>
                </div>');
                redirect('user/User/login');
			}
		}else{


			$this->load->view('user/menu');
		$this->load->view('user/login');

		}
	}
	function home(){
		if ($this->session->userdata('hak_akses')==3) {
			# code...
		
		$data['jadwal']=$this->Model_user->jadwal()->result();
		$data['status']=$this->Model_user->status()->row_array();
$this->load->view('user/menu');
		$this->load->view('user/home',$data);
	}else{
		$this->session->sess_destroy();
		 redirect('user/User/login');
	}

	}
	function input_biodata(){
		if (isset($_POST['simpan'])) {
			$user=$this->input->post('id_user');
			$cek=$this->Model_user->cek_user($user);
			if ($cek->num_rows() <=0) {
				
			
			$config['upload_path']          = './dokumen/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['max_size']             = 2048;
		$config['max_width']            = 2048;
		$config['max_height']           = 2048;
 
		$this->load->library('upload', $config);
 
	 $this->upload->do_upload('surat');
		
			
		
			$data = $this->upload->data();
			$config['upload_path']          = './dokumen/';
			$config8['allowed_types']        = 'gif|jpg|png|pdf';
		$config8['max_size']             = 1048;
		$config8['max_width']            = 1048;
		$config8['max_height']           = 1048;
 
		$this->load->library('upload',$config8);
		
			$this->upload->do_upload('lamaran');
			$surat=$this->upload->data();
			
		$config2['allowed_types']        = 'gif|jpg|png|pdf';
		$config2['max_size']             = 2048;
		$config2['max_width']            = 2048;
		$config2['max_height']           = 2048;
 
		$this->load->library('upload', $config2);
			$this->upload->do_upload('ktp');
			$data2=$this->upload->data();
			$config3['allowed_types']        = 'gif|jpg|png|pdf';
		$config3['max_size']             = 2048;
		$config3['max_width']            = 2048;
		$config3['max_height']           = 2048;
 
		$this->load->library('upload', $config3);
			$this->upload->do_upload('ijazah');
			$data3=  $this->upload->data();
			//foto

			$config4['allowed_types']        = 'gif|jpg|png|pdf';
		$config4['max_size']             = 1048;
		$config4['max_width']            = 1048;
		$config4['max_height']           = 1048;
 
		$this->load->library('upload', $config4);
			$this->upload->do_upload('foto');
			$data4= $this->upload->data();
			//lamaran
			//$config5['upload_path']          = './dokumen/';
			
			
			$data=array(
				'nama_wartawan'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'nohp'=>$this->input->post('no_hp'),
				'tgl_lahir'=>$this->input->post('tanggal_lahir'),
				'pendidikan'=>$this->input->post('pendidikan'),
				'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				'file'=>$data['file_name'],
				'ktp'=>$data2['file_name'],
				'ijazah'=>$data3['file_name'],
				'foto'=>$data4['file_name'],
				'surat_lamaran'=>$surat['file_name'],
				'id_user'=>$this->input->post('id_user'),
				'periode'=>$this->input->post('periode')

			);
			$this->Model_user->add_wartawan($data);
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Biodata Telah Tersimpan</h4>
                    <p>Terimkasih Sudah Melakukan Pendaftaran</p>
                </div>');
			redirect('user/User/home');
		}else{

			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Gagal</h4>
                    <p>Data Anda Sebelumnya Telah tersimpan</p>
                </div>');
			redirect('user/User/input_biodata');
		}
		}else{
			$data['pendidikan']=$this->Model_user->pendidikan()->result();
			$data['periode']=$this->Model_user->periode()->row_array();
$this->load->view('user/menu');
		$this->load->view('user/inputbiodata',$data);

		}
	}
	function profil(){

		$data['profil']=$this->Model_user->profilku()->row_array();
		$this->load->view('user/menu');
		$this->load->view('user/profil',$data);
	}
	function log_out(){

		$this->session->sess_destroy();
		redirect('user/User/c');
	}
	function c(){
		$this->load->view('user/menu');
		$this->load->view('user/login');
	}
	function beranda(){
$data['periode']=$this->Model_user->periode()->row_array();
		$this->load->view('user/menu');
		$this->load->view('user/content',$data);
	}
	function profil_perusahaan(){

		$this->load->view('user/menu');
		$this->load->view('user/profil_perusahaan');
	}
	function ganti_foto(){

			$config['upload_path']          = './profil/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['max_size']             = 1048;
		$config['max_width']            = 1048;
		$config['max_height']           = 1048;
 
		$this->load->library('upload', $config);
 
	 $this->upload->do_upload('foto');
	 $data = $this->upload->data();
	 $id=$this->input->post('id');
		$data=array(

			'foto'=>$data['file_name']
		);
		$this->Model_user->ganti_foto($id,$data);
		redirect('user/User/profil');
	}
	function ganti_pass(){

		
			$old=md5($this->input->post('password_lama'));
			$cek=$this->Model_user->cek_pass($old)->num_rows();
			if ($cek >0) {
				$lama=md5($this->input->post('password_lama'));
				$data=array(

					'password'=>md5($this->input->post('password_baru'))
				);
				$this->Model_user->ganti_pass($lama,$data);
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Berhasil</h4>
                    <p>Password Berhasil diganti </p>
                </div>');
				redirect('user/User/beranda');
			}else{
$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Password Lama Salah</h4>
                    <p>Coba Lagi </p>
                </div>');
redirect('user/User/profil');
			}
		
	}
}







?>