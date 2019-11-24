<?php
/**
 * 
 */
class Model_kriteria extends CI_Model
{
	function view_kriteria(){
$this->db->where('absen',1);
$this->db->where('status !=',0);
$this->db->join('tb_nilai','wartawan.id_wartawan=tb_nilai.id_wartawan','left outer ');
$this->db->select('wartawan.id_wartawan,nama_wartawan,c1,c2,c3,c4,c5,id_nilai');
		return $this->db->get('wartawan');

	}
	function input_nilai($data,$alternatif){
		
		$sql=$this->db->insert('tb_nilai',$data);
		$sql=$this->db->insert('tb_kecocokan',$alternatif);
		return $sql;
	}
	function kecocokan(){
		//$this->db->where('status',1);
		$this->db->order_by("Vs", "desc");
		$this->db->join('wartawan','tb_kecocokan.id_wartawan=wartawan.id_wartawan',' left outer');
		$this->db->select('wartawan.id_wartawan,nama_wartawan,c1,c2,c3,c4,c5,Vs');
		return $this->db->get('tb_kecocokan');
	}
	function input_bobot($data){

		return $this->db->insert('tb_kecocokan',$data);
	}
	function jumlah(){

		return $this->db->query("select sum(Vs) as jumlah from tb_kecocokan");
	}
	function edit_nilai($id){

		$this->db->where('id_wartawan',$id);
		return $this->db->get('tb_nilai');
	}
	function update_nilai($id,$data,$alternatif){

       $this->db->set('tb_nilai',$data);
         $this->db->set('tb_kecocokan',$alternatif);
$this->db->where('a.id_wartawan',$id);
$this->db->where('b.',$id);
//$this->db->join('tb_kecocokan','tb_nilai.id_wartawan=tb_kecocokan.id_wartawan');
$sql=$this->db->update('tb_nilai as a, tb_kecocokan as b');

//$sql=$this->db->update('tb_kecocokan',$alternatif);
		return $sql;
	}

}









?>