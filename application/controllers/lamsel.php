<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lamsel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('daerah_model');
		$this->load->model('artikel_model');
	}

	public function lamsel1(){
		$artikel = $this->artikel_model->lamsel1();
		$daerah = $this->daerah_model->lamsel();
		$data = array('title' 	=> 'asdas',
									'artikel'	=> $artikel,
									'daerah'	=> $daerah,
									'isi'   	=> 'lamsel/lamsel'
								 );
		$this->load->view('lamsel/layout/wrapper',$data);
	}

	public function read1($id_artikel){
		$artikel = $this->artikel_model->read1($id_artikel);
		$data = array('title' 	=> $artikel->judul,
									'artikel'	=> $artikel,
									'isi'   	=> 'lamsel/lamsel'
								 );
		$this->load->view('lamsel/layout/wrapper',$data);

	}
}
