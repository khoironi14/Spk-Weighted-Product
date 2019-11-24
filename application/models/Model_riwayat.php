<?php
/**
 * 
 */
class Model_riwayat extends CI_Model
{
	
	function view_nilai(){
		$this->db->join('wartawan','tb_nilai.id_wartawan=wartawan.id_wartawan');
		return $this->db->get('tb_nilai');
	}
	function view_alternatif(){
$this->db->join('wartawan','tb_kecocokan.id_wartawan=wartawan.id_wartawan');
		return $this->db->get('tb_kecocokan');

	}
	function jumlah(){

		return $this->db->query("select sum(Vs) as jumlah from tb_kecocokan");
	}
	function periode(){

		return $this->db->get('tb_periode');
	}
	function cek_periode($periode){
$this->db->where('periode',$periode);
$this->db->join('wartawan','tb_nilai.id_wartawan=wartawan.id_wartawan');
		return $this->db->get('tb_nilai');
	}
	function cek_periode2($periode){
$this->db->where('periode',$periode);
$this->db->join('wartawan','tb_kecocokan.id_wartawan=wartawan.id_wartawan');
		return $this->db->get('tb_kecocokan');

}

}







?>