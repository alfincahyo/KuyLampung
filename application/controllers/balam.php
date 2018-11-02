<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class balam extends CI_Controller {

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

	function __construct(){
		parent:: __construct();
		$this->load->model('M_data');
	}

	public function balam1()
	{
		$data['komen_lambar'] = $this->M_data->tampil()->result();
		$this->load->view('template/header.php');
		$this->load->view('balam/balam1.php',$data);
		$this->load->view('template/footer.php');
	}

	public function balam2()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam2.php');
		$this->load->view('template/footer.php');
	}

	public function balam3()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam3.php');
		$this->load->view('template/footer.php');
	}

	public function balam4()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam4.php');
		$this->load->view('template/footer.php');
	}

	public function balam5()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam5.php');
		$this->load->view('template/footer.php');
	}

	public function balam6()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam6.php');
		$this->load->view('template/footer.php');
	}

	public function balam7()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam7.php');
		$this->load->view('template/footer.php');
	}

	public function balam8()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam8.php');
		$this->load->view('template/footer.php');
	}

	public function balam9()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam9.php');
		$this->load->view('template/footer.php');
	}

	public function balam10()
	{
		$this->load->view('template/header.php');
		$this->load->view('balam/balam10.php');
		$this->load->view('template/footer.php');
	}

}
