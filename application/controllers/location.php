<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class location extends CI_Controller {

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
	public function lamsel()
	{
		$this->load->view('template/header.php');
		$this->load->view('location/lamsel.php');
		$this->load->view('template/footer.php');
	}

	public function balam()
	{
		$this->load->view('template/header.php');
		$this->load->view('location/balam.php');
		$this->load->view('template/footer.php');
	}

	public function lambar()
	{
		$this->load->view('template/header.php');
		$this->load->view('location/lambar.php');
		$this->load->view('template/footer.php');
	}
}
