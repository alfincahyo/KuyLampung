<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model {

		public function __construct(){
        $this->load->database();
	  }

    public function listing(){
        $query = $this->db->get('daerah');
        return $query->result();
    }

		public function balam(){
			$this->db->select('*');
			$this->db->from('daerah');
			$this->db->limit(1);
			$this->db->offset(0);
			$query = $this->db->get();
			return $query->result();

    }

		public function lamsel(){
	      $this->db->select('*');
				$this->db->from('daerah');
				$this->db->limit(1);
				$this->db->offset(1);
				$query = $this->db->get();
		    return $query->result();
		}

		public function lambar(){
	      $this->db->select('*');
				$this->db->from('daerah');
				$this->db->limit(1);
				$this->db->offset(2);
				$query = $this->db->get();
		    return $query->result();
		}

		public function read($id_daerah){
        $query = $this->db->get_where('daerah',array('id_daerah' => $id_daerah));
        return $query->row();
    }

    public function detail($id_daerah){
        $query = $this->db->get_where('daerah',array('id_daerah' => $id_daerah));
        return $query->row();
    }

    public function tambah($data){
        $this->db->insert('daerah',$data);
    }

    public function edit($data){
        $this->db->where('id_daerah',$data['id_daerah']);
        $this->db->update('daerah',$data);
    }

    public function delete($data){
        $this->db->where('id_daerah',$data['id_daerah']);
        $this->db->delete('daerah',$data);
    }
}
