<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casanobre extends CI_Controller {

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

	function enviar()
	{

		$para = $this->input->post('emailPara', TRUE);    //CAPTURA O VALOR DA CAIXA DE TEXTO 'E-mail de Destino'
		$msg = $this->input->post('emailMensagem', TRUE);

		// var_dump($para);die;

		$this->email->from('casanobreplanejados@casanobreplanejados.com.br', 'Contato Planejados');                //ESPECIFICA O FROM(REMETENTE) DA MENSAGEM DENTRO DA CLASSE
		$this->email->to('faganello_@hotmail.com');                         //ESPECIFICA O DESTINATÁRIO DA MENSAGEM DENTRO DA CLASSE  
		$this->email->subject('Contato' );         //ESPECIFICA O ASSUNTO DA MENSAGEM DENTRO DA CLASSE
		$this->email->message($msg);	                 //ESPECIFICA O TEXTO DA MENSAGEM DENTRO DA CLASSE
		$this->email->send();                            //AÇÃO QUE ENVIA O E-MAIL COM OS PARÂMETROS DEFINIDOS ANTERIORMENTE
		
		// echo $this->email->print_debugger();             //COMANDO QUE MOSTRA COMO ACONTECEU O ENVIO DA MENSAGEM NO SERVIDOR

		$data['folder'] = 'contact';
		$this->load->view('contact_view', $data);

	}	
}