<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class balam extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('daerah_model');
		$this->load->model('artikel_model');
	}

	public function balam1()
	{
		$artikel = $this->artikel_model->balam1();
		$daerah = $this->daerah_model->balam();
		$data = array('title' 	=> 'fgdfgsf',
									'artikel'	=> $artikel,
									'daerah'	=> $daerah,
									'isi'   	=> 'balam/balam'
								 );
		$this->load->view('balam/layout/wrapper',$data);
	}

	public function read($id_artikel){
		$artikel = $this->artikel_model->read($id_artikel);
		$data = array('title' 	=> $artikel->judul,
									'artikel'	=> $artikel,
									'isi'   	=> 'balam/balam'
								 );
		$this->load->view('balam/layout/wrapper',$data);

	}
}
