<?php
/**
 * 
 */
class Kriteria extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==1) {
		$this->load->model('Model_kriteria');
		}else{
		redirect('Admin/login');
	}
	}
	function view_kriteria(){

		$data['kriteria']=$this->Model_kriteria->view_kriteria()->result();
		$data['kecocokan']=$this->Model_kriteria->kecocokan()->result();
		$data['hasil']=$this->Model_kriteria->jumlah()->row_array();
		$data['content']='view_kriteria';
		
		$this->load->view('dashboard',$data);
	}

	function input_nilai(){

		if (isset($_POST['simpan'])) {
			
			$data=array(
				
				'c2'=>$this->input->post('wawasan'),
				'c5'=>$this->input->post('konversi_pengalaman'),
				'c3'=>$this->input->post('menulis'),
				'c4'=>$this->input->post('berbicara'),
				'c1'=>$this->input->post('kerja'),
				'id_wartawan'=>$this->input->post('id')

			);
			$alternatif=array(
				'c1'=>$this->input->post('konversi_kerja'),
				'c2'=>$this->input->post('konversi_wawasan'),
				'c3'=>$this->input->post('konversi_menulis'),
				'c4'=>$this->input->post('konversi_berbicara'),
				'c5'=>$this->input->post('konversi_pengalaman'),
				'id_wartawan'=>$this->input->post('id'),
				'vs'=>$this->input->post('vs'),
				

			);
			$this->Model_kriteria->input_nilai($data,$alternatif);
			redirect('Kriteria/view_kriteria');
		}else{
			//$data['pengalaman']=$this->Model_wartawan->pengalaman()->result();
			$data['hasil']=$this->Model_kriteria->jumlah()->row_array();
			$data['content']='addnilai';
		$this->load->view('dashboard',$data);


		}
	}
	function input_bobot(){

		if (isset($_POST['simpan_bobot'])) {
			$data=array(
				'id_wartawan'=>$this->input->post('id'),
				'c2'=>$this->input->post('wawasan'),
				'c5'=>$this->input->post('pengalaman_kerja'),
				'c3'=>$this->input->post('menulis'),
				'c4'=>$this->input->post('berbicara'),
				'c1'=>$this->input->post('kerja'),
				'Vs'=>$this->input->post('vs')

			);
			$this->Model_kriteria->input_bobot($data);
			redirect('Kriteria/view_kriteria');
		}else{
			$data['content']='inputbobot';
		$this->load->view('dashboard',$data);

		}
	}
	function edit_nilai(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id_wartawan');
			$idk=$this->input->post('id_wartawan');
			$data=array(
				
				'c2'=>$this->input->post('wawasan'),
				'c5'=>$this->input->post('konversi_pengalaman'),
				'c3'=>$this->input->post('menulis'),
				'c4'=>$this->input->post('berbicara'),
				'c1'=>$this->input->post('kerja'),
				

			);
			$alternatif=array(
				'c1'=>$this->input->post('konversi_kerja'),
				'c2'=>$this->input->post('konversi_wawasan'),
				'c3'=>$this->input->post('konversi_menulis'),
				'c4'=>$this->input->post('konversi_berbicara'),
				'c5'=>$this->input->post('konversi_pengalaman'),
				
				'vs'=>$this->input->post('vs'),
				

			);
			//$this->Model_kriteria->update_nilai($id,$data,$alternatif);
			$this->db->where('id_wartawan',$id);
			$sql= $this->db->update('tb_nilai',$data);
			$this->db->where('id_wartawan',$idk);
			$sql=$this->db->update('tb_kecocokan',$alternatif);
			
			redirect('Kriteria/view_kriteria');
			return $sql;
		}else{
			$id=$this->uri->segment(3);
			
$data['edit']=$this->Model_kriteria->edit_nilai($id)->row_array();
			$data['content']='editnilai';
		$this->load->view('dashboard',$data);
		}
	}
}







?>