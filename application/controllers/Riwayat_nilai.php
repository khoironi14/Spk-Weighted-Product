<?php
/**
 * 
 */
class Riwayat_nilai extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_riwayat');
	}
	function view_nilai(){
		$data['kecocokan']=$this->Model_riwayat->view_alternatif()->result();

		$data['nilai']=$this->Model_riwayat->view_nilai()->result();
		$data['periode']=$this->Model_riwayat->periode()->result();
		$data['hasil']=$this->Model_riwayat->jumlah()->row_array();
		$data['content']='riwayat_nilai';
$this->load->view('dashboard',$data);
	}
	function cek_periode(){


		$periode=$this->input->post('periode');
		$data=$this->Model_riwayat->cek_periode($periode)->result();
		$no=1;
		foreach ($data as $tampil) {
			echo "
				<tr>
				<td>".$no++."</td>
				<td>".$tampil->nama_wartawan."</td>
				<td>".$tampil->c1."</td>
				<td>".$tampil->c2."</td>
				<td>".$tampil->c3."</td>
				<td>".$tampil->c4."</td>
				<td>".$tampil->c5."</td>

				</tr>

			";
		}
	}

	function cek_periode2(){


		$periode=$this->input->post('periode');
		$data=$this->Model_riwayat->cek_periode2($periode)->result();
		$hasil=$this->Model_riwayat->jumlah()->row_array();
		$no=1;
		$j=0; $hasil1=0;
		foreach ($data as $tampil) {
			$j +=$tampil->Vs;
			echo "
				<tr>
				<td>".$no++."</td>
				<td>".$tampil->nama_wartawan."</td>
				<td>".$tampil->c1."</td>
				<td>".$tampil->c2."</td>
				<td>".$tampil->c3."</td>
				<td>".$tampil->c4."</td>
				<td>".$tampil->c5."</td>
				<td>".$hasil1=$tampil->Vs / $hasil['jumlah']."</td>

				</tr>

			";
		}
	}
}








?>