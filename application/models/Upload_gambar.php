<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_gambar extends CI_Model {

		public function __construct(){
        $this->load->database();
	  }

    public function listing(){
        $this->db->select('gambar.*, daerah.nama_daerah, artikel.judul, admin.username');
				$this->db->from('gambar');
				$this->db->join('daerah','daerah.id_daerah = gambar.id_daerah','LEFT');
        $this->db->join('artikel','artikel.id_artikel = gambar.id_artikel','LEFT');
				$this->db->join('admin','admin.id_admin = gambar.id_admin','LEFT');
				$this->db->order_by('id_gambar','DESC');
				$query = $this->db->get();
        return $query->result();
    }

    public function detail($id_gambar){
        $query = $this->db->get_where('gambar',array('id_gambar' => $id_gambar));
        return $query->row();
    }

    public function tambah($data){
        $this->db->insert('gambar',$data);
    }

    public function edit($data){
        $this->db->where('id_gambar',$data['id_gambar']);
        $this->db->update('gambar',$data);
    }

    public function delete($data){
        $this->db->where('id_gambar',$data['id_gambar']);
        $this->db->delete('gambar',$data);
    }
}
