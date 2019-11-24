<?php
/**
 * 
 */
class Periode extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_periode');
	}
	function view_periode(){

		$data['periode']=$this->Model_periode->view_periode()->result();
		$data['content']='view_periode';
$this->load->view('dashboard',$data);
	}
	function add_periode(){

		if (isset($_POST['simpan'])) {
			$data=array(
				'periode'=>$this->input->post('periode'),
				'periode_akhir'=>$this->input->post('periode_akhir')

			);
			$this->Model_periode->add_periode($data);
			redirect('Periode/view_periode');
		}else{
$data['content']='add_periode';
$this->load->view('dashboard',$data);

		}
	}
	function edit_periode(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$data=array(
				'periode'=>$this->input->post('periode'),
				'periode_akhir'=>$this->input->post('periode_akhir')

			);
			$this->Model_periode->update_periode($id,$data);
			redirect('Periode/view_periode');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_periode->edit_periode($id)->row_array();
$data['content']='edit_periode';
$this->load->view('dashboard',$data);

		}
	}
	function hapus_periode($id){

		$id=$this->uri->segment(3);
		$this->Model_periode->hapus_periode($id);
		redirect('Periode/view_periode');
	}
}









?>