<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller
{
	function __construct(){
		parent:: __construct();
		$this->load->model('M_data');
	}
	public function input()
{
	$this->load->view('balam/formkomentar');
}
public function simpan()
{
	$data = array(
		'nama' => $this->input->post('nama'), 
		'isi' => $this->input->post('komentar')
	);
	$proses = $this->M_data->simpan($data);
	
}

}
