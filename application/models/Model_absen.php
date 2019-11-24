<?php
/**
 * 
 */
class Model_absen extends CI_Model
{
	
	function absensi(){
		//$this->db->join('tb_absensi','wartawan.id_wartawan=tb_absensi.id_wartawan','right outer join');
		//return $this->db->get('tb_absensi');
		$this->db->where('status !=',0);
		return $this->db->get('wartawan');
	}
	function wartawan(){
		$this->db->where('status',1);
		return $this->db->get('wartawan');
	}
	function input_absensi($id,$data){
		$this->db->where('id_wartawan',$id);
		$sql=$this->db->update('wartawan',array('absen'=>1));
		$sql=$this->db->insert('tb_absensi',$data);
		return $sql;

	}
	function tidak_hadir($id){
$this->db->where('id_wartawan',$id);
	$sql=$this->db->update('wartawan',array('absen'=>2));
		return $sql;
	}
}






?>