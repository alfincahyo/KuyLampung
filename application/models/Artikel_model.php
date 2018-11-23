<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

		public function __construct(){
        $this->load->database();
	  }

    public function listing(){
        $this->db->select('artikel.*, daerah.nama_daerah, admin.username');
				$this->db->from('artikel');
				$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
				$this->db->join('admin','admin.id_admin = artikel.id_admin','LEFT');
				$this->db->order_by('id_artikel','DESC');
				$query = $this->db->get();
        return $query->result();
    }
		public function balam1(){
			$this->db->select('artikel.*, daerah.nama_daerah');
			$this->db->from('artikel');
			$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
			$this->db->order_by('id_artikel','ASC');
			$query = $this->db->get();
			return $query->row();
		}

		public function balam(){
			$this->db->select('artikel.*, daerah.nama_daerah');
			$this->db->from('artikel');
			$this->db->where('artikel.id_daerah',12);
			$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
			$this->db->order_by('id_artikel','ASC');
			$query = $this->db->get();
			return $query->result();
    }

		public function lamsel1(){
			$this->db->select('artikel.*, daerah.nama_daerah');
			$this->db->from('artikel');
			$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
			$this->db->order_by('id_artikel','ASC');
			$query = $this->db->get();
			return $query->row();
		}

		public function lamsel(){
			$this->db->select('artikel.*, daerah.nama_daerah');
			$this->db->from('artikel');
			$this->db->where('artikel.id_daerah',14);
			$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
			$this->db->order_by('id_artikel','ASC');
			$query = $this->db->get();
			return $query->result();
    }

		public function lambar1(){
			$this->db->select('artikel.*, daerah.nama_daerah');
			$this->db->from('artikel');
			$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
			$this->db->order_by('id_artikel','ASC');
			$query = $this->db->get();
			return $query->row();
		}

		public function lambar(){
			$this->db->select('artikel.*, daerah.nama_daerah');
			$this->db->from('artikel');
			$this->db->where('artikel.id_daerah',13);
			$this->db->join('daerah','daerah.id_daerah = artikel.id_daerah','LEFT');
			$this->db->order_by('id_artikel','ASC');
			$query = $this->db->get();
			return $query->result();
    }

		public function read2($id_artikel){
				$query = $this->db->get_where('artikel',array('id_artikel' => $id_artikel));
				return $query->row();
		}

		public function read1($id_artikel){
				$query = $this->db->get_where('artikel',array('id_artikel' => $id_artikel));
				return $query->row();
		}

		public function read($id_artikel){
        $query = $this->db->get_where('artikel',array('id_artikel' => $id_artikel));
        return $query->row();
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
