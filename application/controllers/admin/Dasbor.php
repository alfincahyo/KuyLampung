<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('login_model');
			}
		public function index(){
			$admin = $this->login_model->listing();
			$data = array('title' => 'Data Administrator',
                    'admin'   => $admin,
                    'isi'   => 'admin/dasbor/list'
                   );
			$this->load->view('admin/layout/wrapper',$data);
	  }
		public function tambah(){
			$admin = $this->login_model->listing();

			$valid = $this->form_validation;
			$valid->set_rules('nama','Nama','required',
												array('required' => 'Nama Harus Diisi'));
			$valid->set_rules('username','Username','required|is_unique[admin.username]',
												array('required'  => 'username Harus Diisi',
															'is_unique' => 'Username: <strong>'.
															$this->input->post('username').
															'</strong> Sudah Digunakan. Buat Username Baru !'
														 ));
		  $valid->set_rules('password','Password','required|max_length[32] |min_length[6]',
												array('required' 		=> 'Password Harus Diisi',
															'max_length'	=> 'Password Maksimasl 32 Karakter',
															'min_length'	=> 'Password Minimal 6 Karakter',
														 ));
		 $valid->set_rules('email','Email','required|valid_email',
												array('required' 		=> 'Nama Harus Diisi',
															'valid_email'	=> 'Email Tidak Valid'
														 ));

		if ($valid->run()===FALSE) {
		 $data = array('title'   => 'Tambah Administrator',
                   'admin'   => $admin,
                   'isi'     => 'admin/dasbor/tambah'
                 	);
     $this->load->view('admin/layout/wrapper',$data);
	 	}else{
		 $i = $this->input;
		 $data = array('nama'		   => $i->post('nama'),
		 							 'username'	 => $i->post('username'),
		 							 'password'  => sha1($i->post('password')),
									 'email'		 => $i->post('email')
								  );
		 $this->login_model->tambah($data);
		 $this->session->set_flashdata('SUKSES','Data Telah Ditambahkan');
		 redirect(base_url('admin/dasbor'));
	 }
  }
		 public function edit($id_admin){
			 $admin = $this->login_model->detail($id_admin);

			 $valid = $this->form_validation;
			 $valid->set_rules('nama','Nama','required',
												 array('required' => 'Nama Harus Diisi'));
			 $valid->set_rules('password','Password','required|max_length[32] |min_length[6]',
												 array('required' 		=> 'Password Harus Diisi',
															 'max_length'	=> 'Password Maksimasl 32 Karakter',
															 'min_length'	=> 'Password Minimal 6 Karakter',
															));
			$valid->set_rules('email','Email','required|valid_email',
												 array('required' 		=> 'Nama Harus Diisi',
															 'valid_email'	=> 'Email Tidak Valid'
															));

		 if ($valid->run()===FALSE) {
			$data = array('title'   => 'Edit Administrator',
										'admin'   => $admin,
										'isi'     => 'admin/dasbor/edit'
									 );
			$this->load->view('admin/layout/wrapper',$data);
		 }else{
			$i = $this->input;
			if (strlen($i->post('password')) < 6 || strlen($i->post('password')) > 32 ) {
				$data = array('id_admin'	 => $id_admin,
											'nama'		   => $i->post('nama'),
											'username'	 => $i->post('username'),
											'email'		 	 => $i->post('email')
										 );
			}else{
			$data = array('id_admin'	 => $id_admin,
										'nama'		   => $i->post('nama'),
										'username'	 => $i->post('username'),
										'password'   => sha1($i->post('password')),
										'email'		 	 => $i->post('email')
									 );
		}
		$this->login_model->tambah($data);
		$this->session->set_flashdata('SUKSES','Data Telah Diedit');
		redirect(base_url('admin/dasbor'));
	}
}
	public function delete($id_admin){
		$data = array('id_admin'  => $id_admin);
		$this->login_model->delete($data);
		$this->session->set_flashdata('SUKSES','Data Daerah Telah Dihapus');
		redirect(base_url('admin/dasbor'));
	}
}
