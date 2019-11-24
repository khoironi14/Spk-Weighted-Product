<?php
/**
 * 
 */
class Bobot extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==1) {

		$this->load->model('Model_bobot');
	}
	}
	function view_bobot(){

		$data['bobot']=$this->Model_bobot->view_bobot()->result();
		$data['jumlah']=$this->Model_bobot->jumlah()->row_array();
		$data['content']='view_bobot';
		$this->load->view('dashboard',$data);
	}
	function edit_bobot(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('simbol');
			$data=array(
				'kriteria'=>$this->input->post('kriteria'),
				'bobot'=>$this->input->post('bobot')

			);
			$this->Model_bobot->update_bobot($id,$data);
			redirect('Bobot/view_bobot');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_bobot->edit_bobot($id)->row_array();
			$data['content']='editbobot';
		$this->load->view('dashboard',$data);

		}
	}
	
}






?>