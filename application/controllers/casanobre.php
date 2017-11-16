<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casanobre extends CI_Controller {


    function __construct()
    {
      	parent::__construct();
      	$this->load->model("casanobre_model", "casanobre_model");
   	}

	public function index()
	{
		$this->load->view('menu_view');
		$this->load->view('casanobre_view');
		$this->load->view('footer_view');
	}

	public function kitchens()
	{
		$data['folder'] = 'kitchen';
		$this->load->view('menu_view');
		$this->load->view('kitchens_view', $data);
		$this->load->view('footer_view');
	}

	public function wcs()
	{
		$data['folder'] = 'wc';
		$this->load->view('menu_view');
		$this->load->view('wcs_view', $data);
		$this->load->view('footer_view');
	}

	public function rooms()
	{
		$data['folder'] = 'rooms';
		$this->load->view('menu_view');
		$this->load->view('rooms_view', $data);
		$this->load->view('footer_view');
	}

	public function home_theaters()
	{
		$data['folder'] = 'home-theater';
		$this->load->view('menu_view');
		$this->load->view('home_theaters_view', $data);
		$this->load->view('footer_view');
	}

	public function corp()
	{
		$data['folder'] = 'corp';
		$this->load->view('menu_view');
		$this->load->view('corp_view', $data);
		$this->load->view('footer_view');
	}
	public function contact()
	{
		$data['folder'] = 'contact';
		$this->load->view('menu_view');
		$this->load->view('contact_view', $data);
		$this->load->view('footer_view');
	}

	public function enviar()
	{
		echo $this->casanobre_model->enviar_email();
	}	
}