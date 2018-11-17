<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('daerah_model');
    }

		public function index(){
      $daerah = $this->daerah_model->listing();

      $valid = $this->form_validation;
      $valid->set_rules('nama_daerah','Nama_daerah','required',
                        array('required' => 'Nama Daerah Harus Diisi'));
      if ($valid->run()===FALSE) {
			     $data = array('title'   => 'Data Daerah',
                         'daerah'  => $daerah,
                         'isi'     => 'admin/daerah/list'
                    );
			     $this->load->view('admin/layout/wrapper',$data);
      }else {
          $i    = $this->input;
          $data = array('nama_daerah'   => $i->post('nama_daerah'),
                        'alamat'        => $i->post('alamat')
                      );
          $this->daerah_model->tambah($data);
          $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
          redirect(base_url('admin/daerah'));
      }

	  }

    public function edit($id_daerah){
      $daerah = $this->daerah_model->detail($id_daerah);

      $valid = $this->form_validation;
      $valid->set_rules('nama_daerah','Nama_daerah','required',
                        array('required' => 'Nama Daerah Harus Diisi'));
      if ($valid->run()===FALSE) {

          $data = array('title' => 'Edit Data Daerah',
                        'daerah'  => $daerah,
                        'isi'   => 'admin/daerah/edit'
                       );
          $this->load->view('admin/layout/wrapper',$data);
      }
      else {
          $i    = $this->input;
          $data = array('id_daerah'     => $id_daerah,
                        'nama_daerah'   => $i->post('nama_daerah'),
                        'alamat'        => $i->post('alamat')
                      );
          $this->daerah_model->edit($data);
          $this->session->set_flashdata('SUKSES','Data Telah Diedit');
          redirect(base_url('admin/daerah'));
      }
    }

    public function delete($id_daerah){
      $data = array('id_daerah'  => $id_daerah);
      $this->daerah_model->delete($data);
      $this->session->set_flashdata('SUKSES','Data Daerah Telah Dihapus');
      redirect(base_url('admin/daerah'));
	  }

}
