<?php
/**
 * 
 */
class Model_pendidikan extends CI_Model
{
	function view_pendidikan(){

		return $this->db->get('tb_pendidikan');
	}
	function add_pendidikan($data){

		return $this->db->insert('tb_pendidikan',$data);
	}
	function edit_pendidikan($id){

		$this->db->where('id_pendidikan',$id);
		return $this->db->get('tb_pendidikan');
	}
	function update_pendidikan($id,$data){

$this->db->where('id_pendidikan',$id);
		return $this->db->update('tb_pendidikan',$data);

	}
	function hapus_pendidikan($id){
$this->db->where('id_pendidikan',$id);
		return $this->db->delete('tb_pendidikan');

	}
}











?>