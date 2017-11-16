<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class casanobre_model extends CI_Model{

   public final function __construct()
   {
      parent::__construct();
   }

    function enviar_email(){

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
		$this->email->to('casanobreplanejados@casanobreplanejados.com.br');                         //ESPECIFICA O DESTINATÁRIO DA MENSAGEM DENTRO DA CLASSE  
		$this->email->subject('Contato');         //ESPECIFICA O ASSUNTO DA MENSAGEM DENTRO DA CLASSE
		$this->email->message($mensagem);	                 //ESPECIFICA O TEXTO DA MENSAGEM DENTRO DA CLASSE
		
		if ($this->email->send()) {
			// $this->email->send();    
			$retorno = TRUE;
		}else{

			$retorno = FALSE;
		}
		
		// $debug_msg =  $this->email->print_debugger();
// 
		// var_dump($debug_msg , $retorno);die;             //COMANDO QUE MOSTRA COMO ACONTECEU O ENVIO DA MENSAGEM NO SERVIDOR

		return $retorno;
	}


}