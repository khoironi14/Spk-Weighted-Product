<?php
/**
 * 
 */
class Model_login extends CI_Model
{
	
	function validasi($data){
		$this->db->where($data);
		return $this->db->get('user');
	}
	function cek_pass($old){
		$this->db->where('password',$old);
		return $this->db->get('user');
	}
	function ganti_pass($lama,$data){
		$this->db->where('password',$lama);
		return $this->db->update('user',$data);

	}
	function update($update_key,$id){
$this->db->where('id_user',$id);
		return $this->db->update('user',$update_key);


	}
	public function get_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('user');
    }
    function periode(){
		//$this->db->where('status',1);
		return $this->db->get('tb_periode');
	}
	
	
}














?>