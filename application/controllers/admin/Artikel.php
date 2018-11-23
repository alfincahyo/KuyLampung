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

			if ($valid->run()) {
        $config['upload_path'] 		= './assets/upload/gambar/';
        $config['allowed_types'] 	= 'gif|jpg|png|svg';
        $config['max_size']			  = '12000'; // KB
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('gambar_artikel')) {
					$data = array('title' 	=> 'Tambah Data Artikel',
												'daerah'	=> $daerah,
												'artikel'	=> $artikel,
												'error'	  => $this->upload->display_errors(),
												'isi'   	=> 'admin/artikel/tambah'
											 );
		     	$this->load->view('admin/layout/wrapper',$data);
				 }else{
						$upload_data				= array('uploads' =>$this->upload->data());
						// Image Editor
						$config['image_library']		= 'gd2';
						$config['source_image'] 		= './assets/upload/gambar/'.$upload_data['uploads']['file_name'];
						$config['new_image'] 				= './assets/upload/gambar/thumbs/';
						$config['create_thumb'] 		= TRUE;
						$config['quality'] 					= "100%";
						$config['maintain_ratio'] 	= TRUE;
						$config['width'] 						= 360; // Pixel
						$config['height'] 					= 200; // Pixel
						$config['x_axis'] 					= 0;
						$config['y_axis'] 					= 0;
						$config['thumb_marker'] 		= '';
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();

						$i    			= $this->input;
						$data = array('id_daerah'   => $i->post('id_daerah'),
													'judul'       	=> $i->post('judul'),
													'isi'       	=> $i->post('isi'),
													'id_admin'		=> $this->session->userdata('id'),
													'gambar'		=> $upload_data['uploads']['file_name']
												);
						$this->artikel_model->tambah($data);
						$this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
						redirect(base_url('admin/artikel'));
				 }
	  	}
			$data = array('title' 	=> 'Tambah Data Artikel',
										'daerah'	=> $daerah,
										'artikel'	=> $artikel,
										'isi'   	=> 'admin/artikel/tambah'
									 );
			$this->load->view('admin/layout/wrapper',$data);
	 }

	 public function edit($id_artikel){
		 $daerah = $this->daerah_model->listing();
		 $artikel = $this->artikel_model->detail($id_artikel);

		 $valid = $this->form_validation;
		 $valid->set_rules('judul','Judul','required',
		  									array('required' => 'Judul Harus Diisi'));
		 $valid->set_rules('isi','Isi','required',
			  								array('required' => 'Isi Harus Diisi'));
		 if ($valid->run()) {
			 if (!empty($_FILES['gambar_artikel']['name'])) {
				 $config['upload_path'] 		= './assets/upload/gambar/';
				 $config['allowed_types'] 	= 'gif|jpg|png|svg';
				 $config['max_size']			  = '12000'; // KB
				 $this->load->library('upload', $config);

				 if (! $this->upload->do_upload('gambar_artikel')) {
					 $data = array('title' 		=> 'Edit Artikel',
								 			   'daerah'		=> $daerah,
												 'artikel'	=> $artikel,
												 'isi'   		=> 'admin/artikel/edit'
											 );
					 $this->load->view('admin/layout/wrapper',$data);
					 }else{
						 $upload_data				= array('uploads' =>$this->upload->data());
						 // Image Editor
						 $config['image_library']		= 'gd2';
						 $config['source_image'] 		= './assets/upload/gambar/'.$upload_data['uploads']['file_name'];
						 $config['new_image'] 			= './assets/upload/gambar/thumbs/';
						 $config['create_thumb'] 		= TRUE;
						 $config['quality'] 				= "100%";
						 $config['maintain_ratio'] 	= TRUE;
						 $config['width'] 					= 360; // Pixel
						 $config['height'] 					= 200; // Pixel
						 $config['x_axis'] 					= 0;
						 $config['y_axis'] 					= 0;
						 $config['thumb_marker'] 		= '';
						 $this->load->library('image_lib', $config);
						 $this->image_lib->resize();

						 if ($daerah->gambar != "") {
							 unlink('./assets/upload/gambar/'.$daerah->gambar);
							 unlink('./assets/upload/gambar/thumbs/'.$daerah->gambar);
						 }

						 $i    			= $this->input;
						 $data = array('id_artikel'	=> $id_artikel,
													 'id_daerah'  => $i->post('id_daerah'),
													 'judul'      => $i->post('judul'),
													 'isi'      	=> $i->post('isi'),
													  'gambar'			=> $upload_data['uploads']['file_name']
												 );
						 $this->artikel_model->edit($data);
						 $this->session->set_flashdata('SUKSES','Data Telah Diedit');
						 redirect(base_url('admin/artikel'));
					 }
				 }else{
           $i    = $this->input;
           $data = array('id_daerah'  => $id_artikel,
					 							 'daerah'			=> $daerah,
												 'artikel'		=> $artikel,
												 'isi'   			=> 'admin/artikel/edit'
                        );
          $this->artikel_model->edit($data);
          $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
          redirect(base_url('admin/daerah'));
         }
			}
			$data = array('title' 	=> 'Edit Data Artikel',
										'daerah'	=> $daerah,
										'artikel'	=> $artikel,
										'isi'   	=> 'admin/artikel/edit'
									 );
			$this->load->view('admin/layout/wrapper',$data);
	 }

	public function delete($id_artikel){
		if ($daerah->gambar != "") {
			unlink('./assets/upload/gambar/'.$daerah->gambar);
			unlink('./assets/upload/gambar/thumbs/'.$daerah->gambar);
		}
		$data = array('id_artikel'  => $id_artikel);
		$this->artikel_model->delete($data);
		$this->session->set_flashdata('SUKSES','Data Daerah Telah Dihapus');
		redirect(base_url('admin/artikel'));
	}
}
