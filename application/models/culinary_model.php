<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class culinary_model extends CI_Model {

		public function __construct(){
        $this->load->database();
	  }

    public function listing(){
        $query = $this->db->get('culinary');
        return $query->result();
    }

    public function detail($id_culinary){
        $query = $this->db->get_where('culinary',array('id_culinary' => $id_culinary));
        return $query->row();
    }

    public function tambah($data){
        $this->db->insert('culinary',$data);
    }

    public function edit($data){
        $this->db->where('id_culinary',$data['id_culinary']);
        $this->db->update('culinary',$data);
    }

    public function hapus($data){
        $this->db->where('id_culinary',$data['id_culinary']);
        $this->db->delete('culinary',$data);
    }
}
