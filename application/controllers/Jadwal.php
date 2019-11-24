<?php

class Jadwal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==1) {

		$this->load->model('Model_jadwal');
	}else{
		redirect('Admin/login');
	}
	}
	function view_jadwal(){

		$data['jadwal']=$this->Model_jadwal->view_jadwal()->result();
		$data['content']='view_jadwal';
		$this->load->view('dashboard',$data);
	}
	function add_jadwal(){

		if (isset($_POST['simpan'])) {
			$data=array(

				'tanggal_ujian'=>$this->input->post('tanggal_ujian'),
				'keterangan'=>$this->input->post('keterangan')

			);
			$this->Model_jadwal->add_jadwal($data);
			redirect('Jadwal/view_jadwal');
		}else{
$data['content']='addjadwal';
		$this->load->view('dashboard',$data);

		}
	}



	function edit_jadwal(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$data=array(

				'tanggal_ujian'=>$this->input->post('tanggal_ujian'),
				'keterangan'=>$this->input->post('keterangan')

			);
			$this->Model_jadwal->update_jadwal($id,$data);
			redirect('Jadwal/view_jadwal');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_jadwal->edit_jadwal($id)->row_array();
$data['content']='editjadwal';
		$this->load->view('dashboard',$data);

		}
	}
	function hapus_jadwal(){
$id=$this->uri->segment(3);
$this->Model_jadwal->hapus_jadwal($id);
redirect('Jadwal/view_jadwal');
	}

}







?>