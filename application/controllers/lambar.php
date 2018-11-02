<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lambar extends CI_Controller {

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
	public function lambar1()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar1.php');
		$this->load->view('template/footer.php');
	}

	public function lambar2()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar2.php');
		$this->load->view('template/footer.php');
	}

	public function lambar3()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar3.php');
		$this->load->view('template/footer.php');
	}

	public function lambar4()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar4.php');
		$this->load->view('template/footer.php');
	}

	public function lambar5()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar5.php');
		$this->load->view('template/footer.php');
	}

	public function lambar6()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar6.php');
		$this->load->view('template/footer.php');
	}

	public function lambar7()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar7.php');
		$this->load->view('template/footer.php');
	}

	public function lambar8()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar8.php');
		$this->load->view('template/footer.php');
	}

	public function lambar9()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar9.php');
		$this->load->view('template/footer.php');
	}

	public function lambar10()
	{
		$this->load->view('template/header.php');
		$this->load->view('lambar/lambar10.php');
		$this->load->view('template/footer.php');
	}

}
