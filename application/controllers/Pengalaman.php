<?php
/**
 * 
 */
class Pengalaman extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kerja');
	}
	function view_pengalaman(){

		$data['pengalaman']=$this->Model_kerja->view_pengalaman()->result();
		$data['content']='viewpengalaman';
$this->load->view('dashboard',$data);
	}
	function add_pengalaman(){

		if (isset($_POST['simpan'])) {
			$data=array(
				'lama_kerja'=>$this->input->post('pengalaman'),
				'bobot'=>$this->input->post('nilai'),
				'keterangan'=>$this->input->post('keterangan')


			);
			$this->Model_kerja->add_pengalaman($data);
			redirect('Pengalaman/view_pengalaman');
		}else{
$data['content']='addpengalaman';
$this->load->view('dashboard',$data);

		}
	}
	function edit_pengalaman(){
if (isset($_POST['simpan'])) {
	$id=$this->input->post('id_kerja');
			$data=array(
				'lama_kerja'=>$this->input->post('pengalaman'),
				'bobot'=>$this->input->post('nilai'),
				'keterangan'=>$this->input->post('keterangan')


			);
			$this->Model_kerja->update_pengalaman($id,$data);
			redirect('Pengalaman/view_pengalaman');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_kerja->edit_pengalaman($id)->row_array();
$data['content']='editpengalaman';
$this->load->view('dashboard',$data);

		}

	}
	function hapus_pengalaman(){

		$id=$this->uri->segment(3);
		$this->Model_kerja->hapus_pengalaman($id);
		redirect('Pengalaman/view_pengalaman');
	}
}







?>