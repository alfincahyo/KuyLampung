<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('daerah_model');
			$this->load->model('artikel_model');
		}

		public function index(){
			$artikel = $this->artikel_model->listing();
			$daerah = $this->daerah_model->listing();
			$data = array('title' 	=> 'Data Artikel',
										'artikel'	=> $artikel,
										'daerah'	=> $daerah,
                    'isi'   	=> 'admin/artikel/list'
                  );
			$this->load->view('admin/layout/wrapper',$data);
		}

		public function tambah(){
			$daerah = $this->daerah_model->listing();
			$artikel = $this->artikel_model->listing();

			$valid = $this->form_validation;
      $valid->set_rules('judul','Judul','required',
                        array('required' => 'Judul Harus Diisi'));
			$valid->set_rules('isi','Isi','required',
												array('required' => 'Isi Harus Diisi'));
      if ($valid->run()===FALSE) {
			$data = array('title' 	=> 'Tambah Data Artikel',
										'daerah'	=> $daerah,
										'artikel'	=> $artikel,
										'isi'   	=> 'admin/artikel/tambah'
									 );
     	$this->load->view('admin/layout/wrapper',$data);
			}else {
				$i    			= $this->input;
				$data = array('id_daerah'   => $i->post('id_daerah'),
											'judul'       => $i->post('judul'),
											'isi'       	=> $i->post('isi')
										);
				$this->artikel_model->tambah($data);
				$this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
				redirect(base_url('admin/artikel'));
		 }
	 }

	 public function edit($id_artikel){
		 $daerah = $this->daerah_model->listing();
		 $artikel = $this->artikel_model->detail($id_artikel);

		 $valid = $this->form_validation;
		 $valid->set_rules('judul','Judul','required',
		  									array('required' => 'Judul Harus Diisi'));
		 $valid->set_rules('isi','Isi','required',
			  								array('required' => 'Isi Harus Diisi'));
		 if ($valid->run()===FALSE) {
		 $data = array('title' 		=> 'Edit Artikel',
					 			   'daerah'		=> $daerah,
									 'artikel'	=> $artikel,
									 'isi'   		=> 'admin/artikel/edit'
								 );
		 $this->load->view('admin/layout/wrapper',$data);
		 }else{
			 $i    			= $this->input;
			 $data = array('id_artikel'	=> $id_artikel,
										 'id_daerah'  => $i->post('id_daerah'),
										 'judul'      => $i->post('judul'),
										 'isi'      	=> $i->post('isi')
									 );
			 $this->artikel_model->edit($data);
			 $this->session->set_flashdata('SUKSES','Data Telah Diedit');
			 redirect(base_url('admin/artikel'));
		 }
	 }

	public function delete($id_artikel){
		$data = array('id_artikel'  => $id_artikel);
		$this->artikel_model->delete($data);
		$this->session->set_flashdata('SUKSES','Data Daerah Telah Dihapus');
		redirect(base_url('admin/artikel'));
	}
}
