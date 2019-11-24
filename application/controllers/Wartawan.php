<?php
/**
 * 
 */
class Wartawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses')==1) {
		$this->load->model('Model_wartawan');
	}else{

		redirect('Admin/login');
	}
	}
	function view_wartawan(){

		$data['wartawan']=$this->Model_wartawan->view_wartawan()->result();
		$data['periode']=$this->Model_wartawan->periode()->result();
		$data['content']='view_wartawan';
		$this->load->view('dashboard',$data);
	}
	function add_wartawan(){

		if (isset($_POST['simpan'])) {
			
			$data=array(

				'nama_wartawan'=>$this->input->post('wartawan'),
				'tgl_lahir'=>$this->input->post('tanggal_lahir'),
				'alamat'=>$this->input->post('alamat'),
				'nohp'=>$this->input->post('no_hp'),
				'pendidikan'=>$this->input->post('pendidikan'),
				
				'umur'=>$this->input->post('umur'),
				'kesehatan'=>$this->input->post('kesehatan')


			);
			$this->Model_wartawan->add_wartawan($data);
			redirect('Wartawan/view_wartawan');
		}else{
			$data['pengalaman']=$this->Model_wartawan->pengalaman()->result();
			$data['umur']=$this->Model_wartawan->umur()->result();
			$data['pendidikan']=$this->Model_wartawan->pendidikan()->result();
			$data['content']='addwartawan';
		$this->load->view('dashboard',$data);

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
				
				'umur'=>$this->input->post('umur'),
				'pengalaman_kerja'=>$this->input->post('pengalaman_kerja')


			);
			$this->Model_wartawan->update_wartawan($id,$data);
			redirect('Wartawan/view_wartawan');
		}else{
			$id=$this->uri->segment(3);
			$data['pengalaman']=$this->Model_wartawan->pengalaman()->result();
			$data['umur']=$this->Model_wartawan->umur()->result();
			
			$data['pendidikan']=$this->Model_wartawan->pendidikan()->result();
			$data['edit']=$this->Model_wartawan->edit_wartawan($id)->row_array();

			$data['content']='editwartwan';
		$this->load->view('dashboard',$data);

		}
	}
	function hapus_wartawan(){

$id=$this->uri->segment(3);
$this->Model_wartawan->hapus($id);
redirect('Wartawan/view_wartawan');
	}
	function input_nilai(){

		if (isset($_POST['simpan'])) {
			$update=array(
				'id_wartawan'=>$this->input->post('id')
			);
			$data=array(
				
				'wawasan'=>$this->input->post('wawasan'),
				'pengalaman_kerja'=>$this->input->post('pengalaman_kerja'),
				'kemampuan_menulis'=>$this->input->post('menulis'),
				'kemampuan_berbicara'=>$this->input->post('berbicara'),
				'kerja_dalam_tekanan'=>$this->input->post('kerja')

			);
			$this->Model_wartawan->input_nilai($update,$data);
			redirect('Wartawan/view_wartawan');
		}else{
			$data['pengalaman']=$this->Model_wartawan->pengalaman()->result();
			$data['content']='addnilai';
		$this->load->view('dashboard',$data);


		}
	}
	function cek_periode(){

		$periode=$this->input->post('periode');
		$data=$this->Model_wartawan->cek_periode($periode)->result();
		$no=1; 
		foreach ($data as $tampil) {
			echo "<tr><td>".$no++."</td><td>".$tampil->nama_wartawan."</td><td>".$tampil->alamat."</td><td>".$tampil->nohp."</td><td>".$tampil->nama_pendidikan."</td><td>".$tampil->tgl_lahir."</td><td><a href='".base_url('dokumen/'.$tampil->file.'')."'><img width='30%' src='".base_url('dokumen/'.$tampil->file.'')."'></a></td><td><a href='".base_url('dokumen/'.$tampil->ktp.'')."'><img width='30%' src='".base_url('dokumen/'.$tampil->ktp.'')."'></a></td><td><a href='".base_url('dokumen/'.$tampil->ijazah.'')."'><img width='30%' src='".base_url('dokumen/'.$tampil->ijazah.'')."'></a></td><td><a href='".base_url('dokumen/'.$tampil->foto.'')."'><img width='30%' src='".base_url('dokumen/'.$tampil->foto.'')."'></a></td><td><a href='".base_url('dokumen/'.$tampil->surat_lamaran.'')."'><img width='30%' src='".base_url('dokumen/'.$tampil->surat_lamaran.'')."'></a></td></tr>";
		}

	}
}











?>