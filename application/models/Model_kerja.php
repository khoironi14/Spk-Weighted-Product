<?php
/**
 * 
 */
class Model_kerja extends CI_Model
{
	
	function view_pengalaman(){

		return $this->db->get('pengalaman_kerja');
	}
	function add_pengalaman($data){
return $this->db->insert('pengalaman_kerja',$data);

	}
	function edit_pengalaman($id){

		$this->db->where('id_kerja',$id);
		return $this->db->get('pengalaman_kerja');
	}
	function update_pengalaman($id,$data){

		$this->db->where('id_kerja',$id);
		return $this->db->update('pengalaman_kerja',$data);
	}
	function hapus_pengalaman($id){

		$this->db->where('id_kerja',$id);
			return $this->db->delete('pengalaman_kerja');
	}
}





?>