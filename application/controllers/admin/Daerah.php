
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

      if ($valid->run()) {
        $config['upload_path'] 		= './assets/upload/logo/';
        $config['allowed_types'] 	= 'gif|jpg|png|svg';
        $config['max_size']			  = '12000'; // KB
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('logo_daerah')) {
			     $data = array('title'   => 'Data Daerah',
                         'daerah'  => $daerah,
                         'error'		=> $this->upload->display_errors(),
                         'isi'     => 'admin/daerah/list'
                    );
			     $this->load->view('admin/layout/wrapper',$data);
         }else{
             $upload_data				= array('uploads' =>$this->upload->data());
             // Image Editor
             $config['image_library']		= 'gd2';
             $config['source_image'] 		= './assets/upload/logo/'.$upload_data['uploads']['file_name'];
             $config['new_image'] 				= './assets/upload/logo/thumbs/';
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

             $i    = $this->input;
             $data = array('nama_daerah'   => $i->post('nama_daerah'),
                           'alamat'        => $i->post('alamat'),
                           'telepon'       => $i->post('telepon'),
                           'logo_daerah'   => $upload_data['uploads']['file_name']
                          );
            $this->daerah_model->tambah($data);
            $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
            redirect(base_url('admin/daerah'));
        }
      }
      $data = array('title'   => 'Data Daerah',
                    'daerah'  => $daerah,
                    'isi'     => 'admin/daerah/list'
                   );
      $this->load->view('admin/layout/wrapper',$data);

	  }
    public function edit($id_daerah){
      $daerah = $this->daerah_model->detail($id_daerah);
      $valid = $this->form_validation;
      $valid->set_rules('nama_daerah','Nama_daerah','required',
                        array('required' => 'Nama Daerah Harus Diisi'));
      if ($valid->run()) {
        if (!empty($_FILES['logo_daerah']['name'])) {
          $config['upload_path'] 		= './assets/upload/logo/';
          $config['allowed_types'] 	= 'gif|jpg|png|svg';
          $config['max_size']			  = '12000'; // KB
          $this->load->library('upload', $config);

          if(! $this->upload->do_upload('logo_daerah')) {
  			     $data = array('title'   => 'Data Daerah',
                           'daerah'  => $daerah,
                           'error'	 => $this->upload->display_errors(),
                           'isi'     => 'admin/daerah/edit'
                      );
  			     $this->load->view('admin/layout/wrapper',$data);
           }else{
               $upload_data				= array('uploads' =>$this->upload->data());
               // Image Editor
               $config['image_library']		= 'gd2';
               $config['source_image'] 		= './assets/upload/logo/'.$upload_data['uploads']['file_name'];
               $config['new_image'] 				= './assets/upload/logo/thumbs/';
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

               if ($daerah->logo_daerah != "") {
                 unlink('./assets/upload/logo/'.$daerah->logo_daerah);
                 unlink('./assets/upload/logo/thumbs/'.$daerah->logo_daerah);
               }

               $i    = $this->input;
               $data = array('id_daerah'     => $id_daerah,
                             'nama_daerah'   => $i->post('nama_daerah'),
                             'alamat'        => $i->post('alamat'),
                             'telepon'       => $i->post('telepon'),
                             'logo_daerah'   => $upload_data['uploads']['file_name']
                            );
              $this->daerah_model->edit($data);
              $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
              redirect(base_url('admin/daerah'));
          }
        }else{
          $i    = $this->input;
          $data = array('id_daerah'     => $id_daerah,
                        'nama_daerah'   => $i->post('nama_daerah'),
                        'alamat'        => $i->post('alamat'),
                        'telepon'       => $i->post('telepon')
                       );
         $this->daerah_model->edit($data);
         $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
         redirect(base_url('admin/daerah'));
        }
      }
      $data = array('title'   => 'Data Daerah',
                    'daerah'  => $daerah,
                    'isi'     => 'admin/daerah/edit'
                   );
      $this->load->view('admin/layout/wrapper',$data);
    }
    public function delete($id_daerah){
      $daerah = $this->daerah_model->deatail($id_daerah);
        if ($daerah->logo_daerah != "") {
          unlink('./assets/upload/logo/'.$daerah->logo_daerah);
          unlink('./assets/upload/logo/thumbs/'.$daerah->logo_daerah);
        }

      $data = array('id_daerah'  => $id_daerah);
      $this->daerah_model->delete($data);
      $this->session->set_flashdata('SUKSES','Data Daerah Telah Dihapus');
      redirect(base_url('admin/daerah'));
	  }
}
