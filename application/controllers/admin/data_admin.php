<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_admin extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('admin_model');
    }

		public function index(){
      $admin = $this->admin_model->listing();

      $valid = $this->form_validation;
      $valid->set_rules('username','username','required',
                        array('required' => 'Username Harus Diisi'));
      if ($valid->run()===FALSE) {
			     $data = array('title'   => 'Data Admin',
                         'admin'  => $admin,
                         'isi'     => 'admin/data_admin/list'
                    );
			     $this->load->view('admin/layout/wrapper',$data);
      }else {
          $i    = $this->input;
          $data = array('username'=> $i->post('username'),
                        'password'=> $i->post('password')
                      );
          $this->admin_model->tambah($data);
          $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
          redirect(base_url('admin/data_admin'));
      }

	  }

    public function edit($id_admin){
      $daerah = $this->admin_model->detail($id_admin);

      $valid = $this->form_validation;
      $valid->set_rules('username','username','required',
                        array('required' => 'Username Harus Diisi'));
      if ($valid->run()===FALSE) {

          $data = array('title' => 'Edit Data Data Admin',
                        'admin'  => $admin,
                        'isi'   => 'admin/admin/edit'
                       );
          $this->load->view('admin/layout/wrapper',$data);
      }
      else {
          $i    = $this->input;
          $data = array('id_admin'     => $id_admin,
                        'username'   => $i->post('username'),
                        'password'        => $i->post('password')
                      );
          $this->daerah_model->edit($data);
          $this->session->set_flashdata('SUKSES','Data Telah Diedit');
          redirect(base_url('admin/data_admin'));
      }
    }

    public function hapus($id_admin){
      $data = array('id_admin'  => $id_admin);
      $this->admin_model->hapus($data);
      $this->session->set_flashdata('SUKSES','Data Admin Telah Dihapus');
      redirect(base_url('admin/data_admin'));
	  }

}
