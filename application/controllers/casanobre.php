<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casanobre extends CI_Controller {

	public function index()
	{
		$this->load->view('menu_view');
		$this->load->view('casanobre_view');
		$this->load->view('footer_view');
	}

	public function kitchen()
	{
		$this->load->view('menu_view');
		$this->load->view('kitchen_view');
		$this->load->view('footer_view');
	}

}