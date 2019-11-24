<?php
/**
 * 
 */
class Penilaian extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_penilaian');
		$this->load->library('M_pdf');
	}
	function view_penilaian(){

		$data['nilai']=$this->Model_penilaian->view_penilaian()->result();
		$data['hasil']=$this->Model_penilaian->jumlah()->row_array();

		$data['content']='view_penilaian';
		$this->load->view('dashboard',$data);
	}
	
	function acc(){

		$id=$this->uri->segment(3);
		$data=array(
			'status'=>7

		);
		$this->Model_penilaian->acc($id,$data);
		redirect('Penilaian/view_penilaian');
	}
	function tolak(){
$id=$this->uri->segment(3);
		$data=array(
			'status'=>8

		);
		$this->Model_penilaian->acc($id,$data);
		redirect('Penilaian/view_penilaian');

	}
	function notifikasi(){
$id=$this->uri->segment(3);
		$data=array(
			'notifikasi'=>1

		);
		$this->Model_penilaian->notifikasi($id,$data);
		redirect('Penilaian/view_penilaian');

	}

	function alur(){
		$data['bobot']=$this->Model_penilaian->view_bobot()->result();
		$data['nilai']=$this->Model_penilaian->alur()->result();
		$data['si']=$this->Model_penilaian->view_penilaian()->result();
		$data['jumlah']=$this->Model_penilaian->jumlahku()->row_array();
		$data['hasil']=$this->Model_penilaian->jumlah()->row_array();

		$data['content']='view_alur';
		$this->load->view('dashboard',$data);
	}
	function view_pdf(){
		$data['nilai']=$this->Model_penilaian->view_penilaian()->result();
		$data['hasil']=$this->Model_penilaian->jumlah()->row_array();
		$html=$this->load->view('nilaipdf',$data,true);
		$pdfFilePath = "Data Pelanggan.pdf";
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D"); 

	}
	
}












?>