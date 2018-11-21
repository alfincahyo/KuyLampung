<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct(){
 		parent::__construct();
 		$this->load->model('culinary_model');
 		$this->load->helper('url');
 	}

	public function beranda()
	{
		$this->load->view('template/header.php');
		$this->load->view('homepage.php');
		$this->load->view('template/footer.php');
	}

	public function culinar(){
		$data['culinary'] = $this->culinary_model->listing();
		$this->load->view('template/header2.php');
		$this->load->view("culinar.php",$data);
		$this->load->view('template/footer.php');
	}

	public function location(){
		$this->load->view('template/header.php');
		$this->load->view('location/menulocation.php');
		$this->load->view('template/footer.php');
	}

	public function souvenirs(){
		$this->load->view('template/header3.php');
		$this->load->view('souvenirs.php');
		$this->load->view('template/footer.php');
	}

	public function about_us(){
		$this->load->view('template/header4.php');
		$this->load->view('AboutUs.php');
		$this->load->view('template/footer.php');
	}

	public function other(){
		$this->load->view('template/header5.php');
		$this->load->view('template/footer.php');
	}
}
