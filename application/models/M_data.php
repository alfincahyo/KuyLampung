<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_data extends CI_Model{

	public function input(){
		$this->load->view('balam/formkomentar');
	}

	public function tampil()
	{
		return $this->db->get('komen_lambar');
		
	}

	public function simpan($data){
		$this->db->insert('komen_lambar', $data);
	}
}