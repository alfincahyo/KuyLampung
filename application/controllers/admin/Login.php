<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
		public function index(){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required',
							array('required' => 'Username Harus Diisi'));;
			$this->form_validation->set_rules('password','Password','required',
							array('required' => 'Password Harus Diisi'));
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->form_validation->run()) {
				$this->simple_login->login($username,$password,base_url('admin/dasbor'),base_url('login'));
			}
			$data = array('title' => 'Login Administrator');
			$this->load->view('admin/login_view',$data);
		}
		public function logout(){
			$this->simple_login->logout();
		}
}
