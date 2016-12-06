<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

  public function enviar_email() {
      $dados['titulo'] = "Você recebeu uma mensagem do seu site!";

      $this->load->library('email');
      $this->email->from($_POST['email'], $_POST['nome']);
      $this->email->to('reingruber@blinkme.com.br', 'Blink.Me');
      $this->email->subject($_POST['assunto']);
      $retorno_site = base_url('');
      $redirect_habilitado = strlen($retorno_site) == 0 ? false : true;

      unset($_POST['email_site']);
      unset($_POST['nome_site']);
      unset($_POST['retorno_site']);
      $dados['campos'] = $_POST;

      $this->email->message($this->load->view('custom_email', $dados, TRUE));
      $x = $this->email->send();
       var_dump($x);
      if ($redirect_habilitado == true) {
          redirect($retorno_site);
          $this->email->print_debugger();
      } else {
          echo('Email enviado com sucesso');
      }
  }

}
