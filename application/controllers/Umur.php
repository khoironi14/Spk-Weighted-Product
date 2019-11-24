<?php
/**
 * 
 */
class Umur extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_umur');
	}
	function view_umur(){

		$data['umur']=$this->Model_umur->view_umur()->result();
		$data['content']='viewumur';
		$this->load->view('dashboard',$data);
	}
	function add_umur(){

		if (isset($_POST['simpan'])) {
			$data=array(

				'umur'=>$this->input->post('umur'),
				'bobot'=>$this->input->post('nilai'),
				'keterangan'=>$this->input->post('keterangan')
			);
			$this->Model_umur->add_umur($data);
			redirect('Umur/view_umur');
		}else{
$data['content']='addumur';
		$this->load->view('dashboard',$data);

		}
	}
	function edit_umur(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id_umur');
			$data=array(

				'umur'=>$this->input->post('umur'),
				'bobot'=>$this->input->post('nilai'),
				'keterangan'=>$this->input->post('keterangan')
				
			);
			$this->Model_umur->update_umur($id,$data);
			redirect('Umur/view_umur');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_umur->edit_umur($id)->row_array();
$data['content']='editumur';
		$this->load->view('dashboard',$data);

		}
	}
	function hapus(){

		$id=$this->uri->segment(3);
		$this->Model_umur->hapus($id);
		redirect('Umur/view_umur');
	}
}






?>