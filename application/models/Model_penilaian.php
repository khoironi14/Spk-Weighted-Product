<?php

class Model_penilaian extends CI_Model
{
	
	function view_penilaian(){

			$this->db->order_by("Vs", "desc");
		$this->db->join('wartawan','tb_kecocokan.id_wartawan=wartawan.id_wartawan',' left outer');
		$this->db->select('wartawan.id_wartawan,nama_wartawan,status,Vs,notifikasi');
		return $this->db->get('tb_kecocokan');
	}
	

	function jumlah(){

		return $this->db->query("select sum(Vs) as jumlah from tb_kecocokan");
	}
	function acc($id,$data){
$this->db->where('id_wartawan',$id);
return $this->db->update('wartawan',$data);

	}
	function jumlahku(){

		return $this->db->query("select sum(bobot) as jumlah from bobot");
	}
	function notifikasi($id,$data){
$this->db->where('id_wartawan',$id);
return $this->db->update('wartawan',$data);

	}
	function alur(){
$this->db->join('wartawan','tb_nilai.id_wartawan=wartawan.id_wartawan');
		return $this->db->get('tb_nilai');
	}
	function view_bobot(){

		return $this->db->get('bobot');
	}
}










?>