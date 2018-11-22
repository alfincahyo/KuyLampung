<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lambar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('daerah_model');
		$this->load->model('artikel_model');
	}

	public function lambar1(){
		$artikel = $this->artikel_model->lambar1();
		$daerah = $this->daerah_model->lambar();
		$data = array('title' 	=> 'fgdfgsf',
									'artikel'	=> $artikel,
									'daerah'	=> $daerah,
									'isi'   	=> 'lambar/lambar'
								 );
		$this->load->view('lambar/layout/wrapper',$data);
	}

	public function read2($id_artikel){
		$artikel = $this->artikel_model->read2($id_artikel);
		$data = array('title' 	=> $artikel->judul,
									'artikel'	=> $artikel,
									'isi'   	=> 'lambar/lambar'
								 );
		$this->load->view('lambar/layout/wrapper',$data);

	}

}
