<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

		public function __construct(){
        $this->load->database();
	  }

    public function listing(){
        $this->db->select('artikel.*, daerah.nama_daerah');
				$this->db->from('artikel');
				$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
				$this->db->order_by('id_artikel','DESC');
				$query = $this->db->get();
        return $query->result();
    }

    public function detail($id_artikel){
        $query = $this->db->get_where('artikel',array('id_artikel' => $id_artikel));
        return $query->row();
    }

    public function tambah($data){
        $this->db->insert('artikel',$data);
    }

    public function edit($data){
        $this->db->where('id_artikel',$data['id_artikel']);
        $this->db->update('artikel',$data);
    }

    public function delete($data){
        $this->db->where('id_artikel',$data['id_artikel']);
        $this->db->delete('artikel',$data);
    }
}
