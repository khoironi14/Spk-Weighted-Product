<?php

class Model_periode extends CI_Model
{
	
	function view_periode(){

		return $this->db->get('tb_periode');
	}
	function add_periode($data){

		return $this->db->insert('tb_periode',$data);
	}
	function edit_periode($id){

		$this->db->where('id_periode',$id);
		return $this->db->get('tb_periode');
	}
	function update_periode($id,$data){

		$this->db->where('id_periode',$id);
		return $this->db->update('tb_periode',$data);
	}
	function hapus_periode($id){
$this->db->where('id_periode',$id);
		return $this->db->delete('tb_periode');

	}
}








?>