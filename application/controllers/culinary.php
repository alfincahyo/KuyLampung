<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class culinary extends CI_Controller{
	public function index{
		$data = $this->culinary->get_post();
		$this->load->view('tabel', array('data'=>$data));
	}
}
