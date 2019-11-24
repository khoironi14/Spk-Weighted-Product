<?php
/**
 * 
 */
class Model_user extends CI_Model
{
	
	function registrasi_user($data){
		return $this->db->insert('user',$data);
		
	}
	function login($data){

		$this->db->where($data);
		return $this->db->get('user');
	}
	function pendidikan(){

		return $this->db->get('tb_pendidikan');
	}
	function add_wartawan($data){

return $this->db->insert('wartawan',$data);
	}
	function cek_email($email){

		$this->db->where('email',$email);
		return $this->db->get('user');
	}
	function cek_user($user){

		$this->db->where('id_user',$user);
		return $this->db->get('wartawan');
	}
	function profilku(){

		echo $id=$this->session->userdata('id_user');
		$this->db->where('id_user',$id);
		return $this->db->get('user');
	}
	function status(){

		echo $id=$this->session->userdata('id_user');
		$this->db->where('id_user',$id);
		return $this->db->get('wartawan');
	}
	function ganti_foto($id,$data){
$this->db->where('id_user',$id);
$this->db->update('user',$data);

	}
	function cek_pass($old){
		$this->db->where('password',$old);
		return $this->db->get('user');
	}
	function ganti_pass($lama,$data){
		$this->db->where('password',$lama);
		return $this->db->update('user',$data);

	}
	function jadwal(){

		return $this->db->get('tb_jadwal');
	}
	function periode(){
		//$this->db->where('status',1);
		return $this->db->get('tb_periode');
	}
}







?>