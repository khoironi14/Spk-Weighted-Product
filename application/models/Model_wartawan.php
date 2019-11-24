<?php
/**
 * 
 */
class Model_wartawan extends CI_Model
{
	
	function view_wartawan(){
		//$this->db->join('nilai','wartawan.id_wartawan=nilai.id_wartawan','left outer');
		//$this->db->join('pengalaman_kerja','wartawan.pengalaman_kerja=pengalaman_kerja.id_kerja');
		$this->db->join('tb_pendidikan','wartawan.pendidikan=tb_pendidikan.id_pendidikan');
		//$this->db->join('umur','wartawan.umur=umur.id_umur');
		$this->db->where('status !=',0);
		return $this->db->get('wartawan');
	}
	function add_wartawan($data){

		return $this->db->insert('wartawan',$data);

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
	function pendidikan(){


		return $this->db->get('tb_pendidikan');
	}

	function pengalaman(){

		return $this->db->query('select * from pengalaman_kerja');
	}
	function umur(){

		return $this->db->get('umur');
	}
	function input_nilai($update,$data){
		$this->db->where($update);
		return $this->db->update('wartawan',$data);
	}
	function periode(){
		//$this->db->where('status',1);
		return $this->db->get('tb_periode');
	}
	function cek_periode($periode){
$this->db->where('periode',$periode);
$this->db->join('tb_pendidikan','wartawan.pendidikan=tb_pendidikan.id_pendidikan');
return $this->db->get('wartawan');


	}

}







?>