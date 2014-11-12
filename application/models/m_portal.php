<?php

class M_portal extends CI_Model{
	public function __construct(){
			$this->load->database();
	}
	
	public function insert_daftar($no_ktp, $nama_ktp, $alamat, $email, $password){
		
		$query = $this->db->query("
			insert into pengusul values ('$no_ktp','$nama_ktp','$alamat','$email','$password')
			");
		return $query;
	}
	
	public function loginValidasi($log_email,$log_pass){
		
		$query = $this->db->get_where('pengusul', array('email' => $log_email, 'password' => $log_pass));
		if($query->num_rows()== 1){
			foreach($query->result() as $row)
			{
				$id = $row->no_ktp;
			}
			return $id;
			//return true;
		}else{
			return -1;
		}
	
	}
	
	public function getPengusulbyId($id){
	
		$query = $this->db->query("
			select * from pengusul where no_ktp='$id'
			");
		return $query;
	}
}