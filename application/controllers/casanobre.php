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

		$nome_contato = $this->input->post('nome');    //CAPTURA O VALOR DA CAIXA DE TEXTO 'E-mail de Destino'
		$fone_contato = $this->input->post('fone');    //CAPTURA O VALOR DA CAIXA DE TEXTO 'E-mail de Destino'
		$assunto_contato = $this->input->post('assunto');    //CAPTURA O VALOR DA CAIXA DE TEXTO 'E-mail de Destino'
		$email_contato = $this->input->post('email');    //CAPTURA O VALOR DA CAIXA DE TEXTO 'E-mail de Destino'
		$msg_contato = $this->input->post('emailMensagem');

		$mensagem = "Nome: $nome_contato\n".
					"E-mail: $email_contato\n".
					"Telefone: $fone_contato\n".
					"Assunto: $assunto_contato\n".
					"Mensagem: $msg_contato";


		$this->email->from('casanobreplanejados@casanobreplanejados.com.br', 'Contato Planejados');                //ESPECIFICA O FROM(REMETENTE) DA MENSAGEM DENTRO DA CLASSE
		$this->email->to('faganello_@hotmail.com');                         //ESPECIFICA O DESTINATÁRIO DA MENSAGEM DENTRO DA CLASSE  
		$this->email->subject('Contato');         //ESPECIFICA O ASSUNTO DA MENSAGEM DENTRO DA CLASSE
		$this->email->message($mensagem);	                 //ESPECIFICA O TEXTO DA MENSAGEM DENTRO DA CLASSE
		$this->email->send();                            //AÇÃO QUE ENVIA O E-MAIL COM OS PARÂMETROS DEFINIDOS ANTERIORMENTE
		
		// echo $this->email->print_debugger();             //COMANDO QUE MOSTRA COMO ACONTECEU O ENVIO DA MENSAGEM NO SERVIDOR

		$this->load->view('menu_view');
		$this->load->view('contact_view');
		$this->load->view('footer_view');

	}	
}