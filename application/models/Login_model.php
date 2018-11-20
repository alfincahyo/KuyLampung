<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

		public function __construct(){
        $this->load->database();
	  }

    public function listing(){
        $query = $this->db->get('admin');
        return $query->result();
    }

    public function detail($id_admin){
        $query = $this->db->get_where('admin',array('id_admin' => $id_admin));
        return $query->row();
    }

    public function tambah($data){
        $this->db->insert('admin',$data);
    }

    public function edit($data){
        $this->db->where('id_admin',$data['id_admin']);
        $this->db->update('admin',$data);
    }

    public function delete($data){
        $this->db->where('id_admin',$data['id_admin']);
        $this->db->delete('admin',$data);
    }
}
