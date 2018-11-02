<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lamsel extends CI_Controller {

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
	public function lamsel1()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel1.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel2()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel2.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel3()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel3.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel4()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel4.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel5()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel5.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel6()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel6.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel7()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel7.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel8()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel8.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel9()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel9.php');
		$this->load->view('template/footer.php');
	}

	public function lamsel10()
	{
		$this->load->view('template/header.php');
		$this->load->view('lamsel/lamsel10.php');
		$this->load->view('template/footer.php');
	}

}
