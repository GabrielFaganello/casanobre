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

	public function wc()
	{
		$this->load->view('menu_view');
		$this->load->view('wc_view');
		$this->load->view('footer_view');
	}

	public function room()
	{
		$this->load->view('menu_view');
		$this->load->view('room_view');
		$this->load->view('footer_view');
	}

	public function home_theater()
	{
		$this->load->view('menu_view');
		$this->load->view('home_theater_view');
		$this->load->view('footer_view');
	}

}