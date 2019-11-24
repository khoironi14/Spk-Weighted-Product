<?php
/**
 * 
 */
class Model_umur extends CI_Model
{
	
	function view_umur(){

		return $this->db->get('umur');
	}
	function add_umur($data){

		return $this->db->insert('umur',$data);
	}
	function edit_umur($id){

		$this->db->where('id_umur',$id);
		return $this->db->get('umur');
	}
	function update_umur($id,$data){
$this->db->where('id_umur',$id);
		return $this->db->update('umur',$data);
	}
	function hapus($id){
$this->db->where('id_umur',$id);

return $this->db->delete('umur');
	}
}







?>