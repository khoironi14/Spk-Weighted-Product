<?php
/**
 * 
 */
class Model_staff extends CI_Model
{
	
	function view_wartawan(){
		
		//$this->db->join('pengalaman_kerja','wartawan.pengalaman_kerja=pengalaman_kerja.id_kerja');
		//$this->db->join('tb_pendidikan','wartawan.pendidikan=tb_pendidikan.id_pendidikan');
		//$this->db->join('umur','wartawan.umur=umur.id_umur');
		return $this->db->get('wartawan');
	}
	function add_wartawan($data){

		return $this->db->insert('wartawan',$data);

	}
	function pendidikan(){


		return $this->db->get('tb_pendidikan');
	}
	function pengalaman(){

		return $this->db->query('select * from pengalaman_kerja');
	}
	function umur(){

		return $this->db->get('umur');
	}
	function edit_wartawan($id){
$this->db->where('id_wartawan',$id);
return $this->db->get('wartawan');

	}
	function update_wartawan($id,$data){

		$this->db->where('id_wartawan',$id);
return $this->db->update('wartawan',$data);
	}
	
	function hapus($id){

$this->db->where('id_wartawan',$id);
return $this->db->delete('wartawan');


	}
	function detail_wartawan($id){

		$this->db->where('id_wartawan',$id);
		return $this->db->get('wartawan');
	}
	function acc($id){
$this->db->where('id_wartawan',$id);
		return $this->db->update('wartawan',array('status'=>1));

	}
	function tolak($id){

$this->db->where('id_wartawan',$id);
		return $this->db->update('wartawan',array('status'=>2));

	}
	function cek_pass($old){
		$this->db->where('password',$old);
		return $this->db->get('user');
	}
	function ganti_pass($lama,$data){
		$this->db->where('password',$lama);
		return $this->db->update('user',$data);

	}
	function ganti_foto($id,$data){
$this->db->where('id_user',$id);
$this->db->update('user',$data);
}
	
}




?>