<?php
/**
 * 
 */
class Model_jadwal extends CI_Model
{
	
	function view_jadwal(){


		return $this->db->get('tb_jadwal');
	}
	function add_jadwal($data){

		return $this->db->insert('tb_jadwal',$data);
	}
	function edit_jadwal($id){
$this->db->where('id_jadwal',$id);
return $this->db->get('tb_jadwal');
	}
	function update_jadwal($id,$data){
$this->db->where('id_jadwal',$id);
return $this->db->update('tb_jadwal',$data);

	}
	function hapus_jadwal($id){
$this->db->where('id_jadwal',$id);
return $this->db->delete('tb_jadwal');

	}
}








?>