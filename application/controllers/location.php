<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class location extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('daerah_model');
		$this->load->model('artikel_model');
	}

	public function balam(){
		$artikel = $this->artikel_model->balam();
		$daerah = $this->daerah_model->balam();
		$data = array('title' 	=> 'fgdfgsf',
									'artikel'	=> $artikel,
									'daerah'	=> $daerah,
									'isi'   	=> 'location/balam'
								 );

		$this->load->view('template/header.php');
		$this->load->view('location/balam.php',$data);
		$this->load->view('template/footer.php');
	}

	public function lambar(){
		$artikel = $this->artikel_model->lambar();
		$daerah = $this->daerah_model->lambar();
		$data = array('title' 	=> 'fgdfgsf',
									'artikel'	=> $artikel,
									'daerah'	=> $daerah,
									'isi'   	=> 'location/lambar'
								 );
		$this->load->view('template/header.php');
		$this->load->view('location/lambar.php',$data);
		$this->load->view('template/footer.php');
	}

	public function lamsel(){
		$artikel = $this->artikel_model->lamsel();
		$daerah = $this->daerah_model->lamsel();
		$data = array('title' 	=> 'fgdfgsf',
									'artikel'	=> $artikel,
									'daerah'	=> $daerah,
									'isi'   	=> 'location/lamsel'
								 );
		 $this->load->view('template/header.php');
	   $this->load->view('location/lamsel.php',$data);
		 $this->load->view('template/footer.php');
	}
}
