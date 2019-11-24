<?php
/**
 * 
 */
class Model_bobot extends CI_Model
{
	
	function view_bobot(){

		return $this->db->get('bobot');
	}
	function jumlah(){

		return $this->db->query("select sum(bobot) as jumlah from bobot");
	}
	function edit_bobot($id){
$this->db->where('simbol',$id);
return $this->db->get("bobot");
	}
	function update_bobot($id,$data){

		$this->db->where('simbol',$id);
return $this->db->update("bobot",$data);
	}
	
}




?>