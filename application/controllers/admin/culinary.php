<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class culinary extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('culinary_model');
      $this->load->helper('url');
    }

    public function index(){
      $culinary = $this->culinary_model->listing();
      $data = array('title'   => 'Data Artikel Culinary',
                         'culinary'  => $culinary,
                         'isi'     => 'admin/culinary/list'
                    );
			$this->load->view('admin/layout/wrapper',$data);


	  }

    public function tambah(){

      $valid = $this->form_validation;
      $valid->set_rules('isi_posting','isi_posting','required',
                        array('required' => '<div class="alert alert-warning">Isi Harus Diisi</div>'));



      if ($valid->run()===FALSE) {
          $data = array('title'   => 'Tambah Artikel culinary',
                      'isi'     => 'admin/culinary/tambah'
                 );
          $this->load->view('admin/layout/wrapper',$data);
      }else {
          $i    = $this->input;
          $data = array('judul_posting'   => $i->post('judul_posting'),
                        'rating'        => $i->post('rating'),
                        'resep'        => $i->post('resep'),
                        'gambar'        => $i->post('gambar'),
                        'isi_posting'        => $i->post('isi_posting')
                      );
          $this->culinary_model->tambah($data);
          $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
          redirect(base_url('admin/culinary/tambah'));
      }


	  }

    public function edit($id_culinary){

      $culinary = $this->culinary_model->detail($id_culinary);
      $valid = $this->form_validation;
      $valid->set_rules('isi_posting','isi_posting','required',
                        array('required' => '<div class="alert alert-warning">Isi Harus Diisi</div>'));



      if ($valid->run()===FALSE) {
          $data = array('title'   => 'Edit Artikel culinary',
                        'culinary'  => $culinary,
                      'isi'     => 'admin/culinary/edit'
                 );
          $this->load->view('admin/layout/wrapper',$data);
      }else {
          $i    = $this->input;

          $data = array('id_culinary'   => $id_culinary,
                        'judul_posting'   => $i->post('judul_posting'),
                        'rating'        => $i->post('rating'),
                        'resep'        => $i->post('resep'),
                        'gambar'        => $i->post('gambar'),
                        'isi_posting'        => $i->post('isi_posting')
                      );

          $this->culinary_model->edit($data);
          $this->session->set_flashdata('SUKSES','Data Telah Diedit');
          redirect(base_url('admin/culinary/'));
      }


	  }

    public function hapus($id_culinary){
      $data = array('id_culinary'  => $id_culinary);
      $this->culinary_model->hapus($data);
      $this->session->set_flashdata('SUKSES','Data Admin Telah Dihapus');
      redirect(base_url('admin/culinary'));
	  }





}
