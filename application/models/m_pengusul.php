<?php

class M_pengusul extends CI_Model{
	public function __construct(){
			$this->load->database();
	}
	
	public function insert_file($data){
		
		$this->db->insert('file',$data); 
	}
	
}