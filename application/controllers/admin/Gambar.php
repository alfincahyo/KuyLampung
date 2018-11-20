<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('daerah_model');
			$this->load->model('artikel_model');
			$this->load->model('upload_gambar');
		}

		public function index(){
			$gambar = $this->upload_gambar->listing();
			$daerah = $this->daerah_model->listing();
			$artikel = $this->artikel_model->listing();
			$data = array('title' 	=> 'Data Gambar',
										'gambar'	=> $gambar,
										'daerah'	=> $daerah,
										'artikel'	=> $artikel,
                    'isi'   	=> 'admin/gambar/list'
                  );
			$this->load->view('admin/layout/wrapper',$data);
		}

		public function tambah(){
			$daerah = $this->daerah_model->listing();
			$gambar = $this->upload_gambar->listing();
			$artikel = $this->artikel_model->listing();

			$valid = $this->form_validation;
      $valid->set_rules('keterangan','Keterangan','required',
                        array('required' => ' Keterangan Harus Diisi'));

			if ($valid->run()) {
	      $config['upload_path'] 		= './assets/upload/gambar/';
	      $config['allowed_types'] 	= 'gif|jpg|png|svg';
	      $config['max_size']			  = '12000'; // KB
	      $this->load->library('upload', $config);

	      if(! $this->upload->do_upload('gambar')) {
					$data = array('title' 	=> 'Tambah Data Gambar',
												'daerah'	=> $daerah,
												'gambar'	=> $gambar,
												'artikel'	=> $artikel,
												'error'	  => $this->upload->display_errors(),
												'isi'   	=> 'admin/gambar/tambah'
											 );
		     	$this->load->view('admin/layout/wrapper',$data);
					}else {
						$upload_data				= array('uploads' =>$this->upload->data());
						// Image Editor
						$config['image_library']		= 'gd2';
						$config['source_image'] 		= './assets/upload/gambar/'.$upload_data['uploads']['file_name'];
						$config['new_image'] 				= './assets/upload/gambar/thumbs/';
						$config['create_thumb'] 		= TRUE;
						$config['quality'] 					= "100%";
						$config['maintain_ratio'] 	= TRUE;
						$config['width'] 						= 360; // Pixel
						$config['height'] 					= 360; // Pixel
						$config['x_axis'] 					= 0;
						$config['y_axis'] 					= 0;
						$config['thumb_marker'] 		= '';
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						$i    			= $this->input;
						$data = array('id_daerah'   => $i->post('id_daerah'),
													'id_artikel'  => $i->post('id_artikel'),
													'gambar'      => $upload_data['uploads']['file_name'],
													'keterangan'	=> $i->post('keterangan'),
													'id_admin'		=> $this->session->userdata('id')
												);
						$this->upload_gambar->tambah($data);
						$this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
						redirect(base_url('admin/gambar'));
				 }
			 }
			 $data = array('title' 	 => 'Tambah Data Gambar',
										 'daerah'	 => $daerah,
										 'gambar'	 => $gambar,
										 'artikel' => $artikel,
										 'isi'   	 => 'admin/gambar/tambah'
										);
			 $this->load->view('admin/layout/wrapper',$data);
		 }

	 public function edit($id_gambar){
		 $daerah = $this->daerah_model->listing();
		 $artikel = $this->artikel_model->listing();
		 $gambar = $this->upload_gambar->detail($id_gambar);

		 $valid = $this->form_validation;
		 $valid->set_rules('keterangan','Keterangan','required',
											 array('required' => ' Keterangan Harus Diisi'));

		 if ($valid->run()) {
			 if (!empty($_FILES['gambar']['name'])) {
				 $config['upload_path'] 		= './assets/upload/gambar/';
				 $config['allowed_types'] 	= 'gif|jpg|png|svg';
				 $config['max_size']			  = '12000'; // KB
				 $this->load->library('upload', $config);

				 if(! $this->upload->do_upload('gambar')) {
					 $data = array('title' 		=> 'Tambah Data Gambar',
												 'daerah'		=> $daerah,
												 'gambar'		=> $gambar,
												 'artikel'	=> $artikel,
												 'error'	  => $this->upload->display_errors(),
												 'isi'   		=> 'admin/gambar/edit'
												);
					 $this->load->view('admin/layout/wrapper',$data);
					 }else {
						 $upload_data				= array('uploads' =>$this->upload->data());
						 // Image Editor
						 $config['image_library']		= 'gd2';
						 $config['source_image'] 		= './assets/upload/gambar/'.$upload_data['uploads']['file_name'];
						 $config['new_image'] 			= './assets/upload/gambar/thumbs/';
						 $config['create_thumb'] 		= TRUE;
						 $config['quality'] 				= "100%";
						 $config['maintain_ratio'] 	= TRUE;
						 $config['width'] 					= 360; // Pixel
						 $config['height'] 					= 360; // Pixel
						 $config['x_axis'] 					= 0;
						 $config['y_axis'] 					= 0;
						 $config['thumb_marker'] 		= '';
						 $this->load->library('image_lib', $config);
						 $this->image_lib->resize();

						 if ($gambar->gambar != "") {
						 	unlink('./assets/upload/gambar/'.$gambar->gambar);
						 	unlink('./assets/upload/gambar/thumbs/'.$gambar->gambar);
						 }

						 $i    			= $this->input;
						 $data = array('id_gambar'	 => $id_gambar,
							 						 'id_daerah'   => $i->post('id_daerah'),
													 'id_artikel'  => $i->post('id_artikel'),
													 'gambar'      => $upload_data['uploads']['file_name'],
													 'keterangan'	 => $i->post('keterangan')
												 );
						 $this->upload_gambar->edit($data);
						 $this->session->set_flashdata('SUKSES','Data Telah Diedit');
						 redirect(base_url('admin/gambar'));
					}
				}else{
          $i    = $this->input;
          $data = array('id_daerah'     => $id_daerah,
                        'nama_daerah'   => $i->post('nama_daerah'),
												'id_artikel'    => $i->post('id_artikel'),
                        'keterangan'    => $i->post('keterangan')
                       );
         $this->upload_gambar->edit($data);
         $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
         redirect(base_url('admin/daerah'));
        }
      }
			$data = array('title' 		=> 'Tambah Data Gambar',
										'daerah'		=> $daerah,
										'gambar'		=> $gambar,
										'artikel'	  => $artikel,
										'isi'   		=> 'admin/gambar/edit'
									 );
			$this->load->view('admin/layout/wrapper',$data);
    }

	public function delete($id_gambar){
		if ($gambar->gambar != "") {
		 unlink('./assets/upload/gambar/'.$gambar->gambar);
		 unlink('./assets/upload/gambar/thumbs/'.$gambar->gambar);
		}

		$data = array('id_gambar'  => $id_gambar);
		$this->upload_gambar->delete($data);
		$this->session->set_flashdata('SUKSES','Data Daerah Telah Dihapus');
		redirect(base_url('admin/gambar'));
	}
}
