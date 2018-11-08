<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class komen_balam extends CI_Model{

	public function input(){
		$this->load->view('balam/formkomentar');
	}

	public function tampil()
	{
		return $this->db->get('komen_balam');
		
	}

	public function simpan($data){
		$this->db->insert('komen_balam', $data);
	}
}