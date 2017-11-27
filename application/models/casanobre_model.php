<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class casanobre_model extends CI_Model{

	public final function __construct()
	{
	  parent::__construct();
	}

	function enviar_email(){

		$nome_contato = $this->input->post('nome');
		$fone_contato = $this->input->post('fone');
		$assunto_contato = $this->input->post('assunto');
		$email_contato = $this->input->post('email');
		$msg_contato = $this->input->post('emailMensagem');

		$mensagem = "Nome: $nome_contato\n".
					"E-mail: $email_contato\n".
					"Telefone: $fone_contato\n".
					"Assunto: $assunto_contato\n".
					"Mensagem: $msg_contato";


		$this->email->from('casanobreplanejados@casanobreplanejados.com.br', 'Contato Planejados');
		$this->email->to('casanobreplanejados@casanobreplanejados.com.br');
		$this->email->subject('Contato');
		$this->email->message($mensagem);
		
		if ($this->email->send()) {
			$retorno = TRUE;
		}else{
			$retorno = FALSE;
		}

		return $retorno;
	}


}