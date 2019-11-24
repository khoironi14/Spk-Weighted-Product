<?php 

class Staff extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('staf/Model_staff');
	}
	function view_wartawan(){

		$data['wartawan']=$this->Model_staff->view_wartawan()->result();
		$data['content']='view_wartawan';
		$this->load->view('staff/dashboard',$data);
	}
	function add_wartawan(){

		if (isset($_POST['simpan'])) {
	
			$data=array(

				'nama_wartawan'=>$this->input->post('wartawan'),
				'tgl_lahir'=>$this->input->post('tanggal_lahir'),
				'alamat'=>$this->input->post('alamat'),
				'nohp'=>$this->input->post('no_hp'),
				'pendidikan'=>$this->input->post('pendidikan'),
				'kesehatan'=>$this->input->post('kesehatan'),
				'umur'=>$this->input->post('umur')


			);
			$this->Model_staff->add_wartawan($data);
			redirect('staf/Staff/view_wartawan');
		}else{
				$data['pengalaman']=$this->Model_staff->pengalaman()->result();
			$data['umur']=$this->Model_staff->umur()->result();
			
			$data['pendidikan']=$this->Model_staff->pendidikan()->result();
			$data['content']='addwartawan';
		$this->load->view('staff/dashboard',$data);

		}
	}
	function edit_wartawan(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$data=array(

				'nama_wartawan'=>$this->input->post('wartawan'),
				'tgl_lahir'=>$this->input->post('tanggal_lahir'),
				'alamat'=>$this->input->post('alamat'),
				'nohp'=>$this->input->post('no_hp'),
				'pendidikan'=>$this->input->post('pendidikan'),
				


			);
			$this->Model_staff->update_wartawan($id,$data);
			redirect('staf/Staff/view_wartawan');
		}else{
			$id=$this->uri->segment(4);
			$data['pengalaman']=$this->Model_staff->pengalaman()->result();
			$data['umur']=$this->Model_staff->umur()->result();
			
			$data['pendidikan']=$this->Model_staff->pendidikan()->result();
			$data['edit']=$this->Model_staff->edit_wartawan($id)->row_array();

			$data['content']='editwartawan';
		$this->load->view('staff/dashboard',$data);

		}
	}
	function hapus_wartawan(){

$id=$this->uri->segment(4);
$this->Model_staff->hapus($id);
redirect('staf/Staff/view_wartawan');
	}
	function detail_wartawan(){
$id=$this->uri->segment(4);
$data['detail']=$this->Model_staff->detail_wartawan($id)->row_array();
$data['content']='detailwartawan';
		$this->load->view('staff/dashboard',$data);


	}
	function acc(){
$id=$this->uri->segment(4);
$this->Model_staff->acc($id);

				$this->session->set_flashdata('msg', 
                '<div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Berhasil</h4>
                    <p>Data Telah Terkirim ke Admin</p>
                </div>');
redirect('staf/Staff/view_wartawan');
	}
	function tolak(){
$id=$this->uri->segment(4);
$this->Model_staff->tolak($id);
$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Data ditolak</h4>
                    <p>Data Ditolak </p>
                </div>');
redirect('staf/Staff/view_wartawan');

	}
	function ganti_pass(){

		if (isset($_POST['simpan'])) {
			$old=md5($this->input->post('password_lama'));
			$cek=$this->Model_staff->cek_pass($old)->num_rows();
			if ($cek >0) {
				$lama=md5($this->input->post('password_lama'));
				$data=array(

					'password'=>md5($this->input->post('password_baru'))
				);
				$this->Model_staff->ganti_pass($lama,$data);
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Berhasil</h4>
                    <p>Password Berhasil diganti </p>
                </div>');
				redirect('Welcome/staff');
			}else{
$this->session->set_flashdata('msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Password Lama Salah</h4>
                    <p>Coba Lagi </p>
                </div>');
redirect('staf/Staff/ganti_pass');
			}
		}else{
$data['content']='gantipass';
$this->load->view('staff/dashboard',$data);

		}
	}
	function ganti_fotoku(){
if (isset($_POST['simpan'])) {
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
		$this->Model_staff->ganti_foto($id,$data);
		redirect('Admin/staff');
}else{
		
			$data['content']='gantifoto';
$this->load->view('staff/dashboard',$data);
}
		
	}
	}







?>