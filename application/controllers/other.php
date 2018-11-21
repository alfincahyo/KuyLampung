<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class other extends CI_Controller {

	public function resto()
	{
		$this->load->view('template/header5.php');
		$this->load->view('resto.php');
		$this->load->view('template/footer.php');
	}

	public function belanja()
	{
		$this->load->view('template/header5.php');
		$this->load->view('belanja.php');
		$this->load->view('template/footer.php');
	}

	public function hotel()
	{
		$this->load->view('template/header5.php');
		$this->load->view('hotel.php');
		$this->load->view('template/footer.php');
	}


}
