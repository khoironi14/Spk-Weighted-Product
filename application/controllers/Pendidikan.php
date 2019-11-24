<?php
/**
 * 
 */
class Pendidikan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pendidikan');
	}
	function view_pendidikan(){

		$data['pendidikan']=$this->Model_pendidikan->view_pendidikan()->result();
		$data['content']='viewpendidikan';
$this->load->view('dashboard',$data);
	}
	function add_pendidikan(){

		if (isset($_POST['simpan'])) {
			$data=array(
				'nama_pendidikan'=>$this->input->post('pendidikan'),
				'bobot'=>$this->input->post('nilai'),
				'keterangan'=>$this->input->post('keterangan')

			);
			$this->Model_pendidikan->add_pendidikan($data);
			redirect('Pendidikan/view_pendidikan');
		}else{

			$data['content']='addpendidikan';
$this->load->view('dashboard',$data);
		}
	}

	function edit_pendidikan(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$data=array(
				'nama_pendidikan'=>$this->input->post('pendidikan'),
				'bobot'=>$this->input->post('nilai'),
				'keterangan'=>$this->input->post('keterangan')

			);
			$this->Model_pendidikan->update_pendidikan($id,$data);
			redirect('Pendidikan/view_pendidikan');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_pendidikan->edit_pendidikan($id)->row_array();
			$data['content']='editpendidikan';
$this->load->view('dashboard',$data);
		}
	}
	function hapus(){

		$id=$this->uri->segment(3);
		$this->Model_pendidikan->hapus_pendidikan($id);
		redirect('Pendidikan/view_pendidikan');


	}
}









?>