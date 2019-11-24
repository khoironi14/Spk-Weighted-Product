<?php
/**
 * 
 */
class Absensi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_absen');
	}
	function view_absen(){

		$data['absen']=$this->Model_absen->absensi()->result();
		$data['content']='view_absen';
$this->load->view('dashboard',$data);

	}
	function input_absensi(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('nama');
			$data=array(
				'id_wartawan'=>$this->input->post('nama'),
				'tanggal_ujian'=>$this->input->post('tanggal')

			);
			$this->Model_absen->input_absensi($id,$data);
			redirect('Absensi/view_absen');
		}else{
			$data['wartawan']=$this->Model_absen->wartawan()->result();
$data['content']='input_absen';
$this->load->view('dashboard',$data);

		}
	}
	function tidak_hadir(){

		$id=$this->uri->segment(3);
		$this->Model_absen->tidak_hadir($id);
		redirect('Absensi/view_absen');
	}
}





?>