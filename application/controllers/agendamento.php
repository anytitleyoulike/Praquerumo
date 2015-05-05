<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Agendamento extends CI_Controller {

	public function novo() {
		$this->load->model("eventos_model");

		$evento = $this->input->post("evento");
		$quantidade = $this->input->post("quantidade");
		$this->_novoAgendamento($evento, $quantidade);
	}

	public function realizaTransacao() {
		echo "Codigo " . $this->input->post('evento_codigo');
		echo "<br>";
		echo "Quantidade " . $this->input->post('quantidade');
		echo "<br>";
		echo "Tipo de pagamento " . $this->input->post('tipo_pagamento');
	}

	public function aguardaPagamento() {
		$this->load->template("eventos/aguardando_pagamento");
	}

	public function realizaTransacaoBoleto() {
		$this->load->model("eventos_model");
		$this->load->model("usuarios_model");
		$this->load->model("faturas_model");
		$this->load->library('form_validation');
		$this->load->helper('pqr_email');
		$this->load->helper('iugu');

		$evento = $this->input->post('evento_codigo');
		$quantidade = $this->input->post('quantidade');

		//$dados_validados = $this->_validacao();
		$dados_validados = true;
		if ($dados_validados) {
			$email = $this->input->post('email');
			$nome = $this->input->post('nome');
			$celular = $this->input->post('celular');
			$requisitos_especiais = $this->input->post('requisicoes_especiais');
			$preco = $this->input->post('preco_raw');
			$preco_formatado = str_replace('.', '', $preco);
			$descricao = $this->input->post('descricao');
			$data_horario = $this->input->post('data_horario');

			$disponivel = $this->_verificaDisponibilidade($evento, $quantidade);

			if ($disponivel != 0) {
				$resultado = $this->_criaBoleto($email, $descricao,
					$quantidade, $preco_formatado);

				if (!array_key_exists("errors", $resultado)) {
					$invoice_id = $resultado["invoice_id"];
					$usuario = $this->_getUsuarioId($nome, $celular, $email);

					$vagas_atualizados = $this->_atualizaVagas($resultado["success"],
						$evento, $disponivel, $quantidade);

					//add fatura
					$fatura = array(
						'id' => $invoice_id,
						'evento_codigo' => $evento,
						'usuario_id' => $usuario,
						'data' => datetime_now(),
					);

					$this->faturas_model->salva($fatura);
					//verificar gatilho que aciona o salvamento de faturas

					//gerar voucher
					//gerar qrcode

					$dados_email = array(
						//'evento' => $evento,
						'nome' => $nome,
						'url' => $resultado['url'],
						//'voucher' => $invoice_id,
						//'quantidade' => $quantidade,
						//'preco' => $preco_formatado,
						//'data_horario' => $data_horario,
					);

					//send email de confirmação(com voucher e qrcode)
					$this->_sendEmailToClientWaiting($email, $dados_email);
					//pegar email do organizador
					//$this->_sendEmailToOrganizer();
					$this->_sendEmailToPQRWaiting($dados_email);
					//load page de sucesso no agendamento
					//$this->load->view("eventos/sucesso");
					//redirect(base_url("fatura/novo"));

					echo json_encode(array('success' => $resultado['success'],
						'url_boleto' => $resultado['url'], 'errors' => $resultado['errors'],
						'url_aguardando' => base_url("agendamento/aguardaPagamento")));
					//$this->load->template('eventos/aguardando_pagamento', $dados_email);
				} else {
					echo json_encode(array('success' => false,
						'errors' => 'erros na criação do boleto'));
				}
			} else {
				echo json_encode(array('success' => false,
					'errors' => 'vagas indesponiveis'));
			}
		} else {
			echo json_encode(array('success' => false,
				'errors' => 'dados invalidos'));
		}
	}

	public function realizaTransacaoCartao() {

		$this->load->model("eventos_model");
		$this->load->model("usuarios_model");
		$this->load->model("faturas_model");
		$this->load->library('form_validation');
		$this->load->helper('pqr_email');
		$this->load->helper('iugu');
		$this->load->helper('lr');

		$evento = $this->input->post('evento_codigo');
		$quantidade = $this->input->post('quantidade');

		$dados_validados = $this->_validacao();

		if ($dados_validados) {
			$token = $this->input->post('token');
			$nome_completo = $this->input->post('nome');
			$celular = $this->input->post('celular');
			$requisitos_especiais = $this->input->post('requisicoes_especiais');
			$email = $this->input->post('email');
			$preco = $this->input->post('preco_raw');
			$preco_formatado = str_replace('.', '', $preco);
			$preco_confirmacao = $this->input->post('preco_str');
			$descricao = $this->input->post('descricao');
			$data_horario = $this->input->post('data_horario');

			$disponivel = $this->_verificaDisponibilidade($evento, $quantidade);

			if ($disponivel != 0) {
				$result_pgto = $this->_pagar($token, $email, $descricao,
					$quantidade, $preco_formatado);

				if ($result_pgto->success) {
					$invoice_id = $result_pgto["invoice_id"];

					$vagas_atualizados = $this->_atualizaVagas($result_pgto["success"],
						$evento, $disponivel, $quantidade);

					//retorna usuario_id, se nao existir, cria um usuario anonimo
					$usuario = $this->_getUsuarioId($nome_completo, $celular, $email);

					//add fatura
					$fatura = array(
						'id' => $invoice_id,
						'evento_codigo' => $evento,
						'usuario_id' => $usuario,
						'data' => datetime_now(),
					);

					$this->faturas_model->salva($fatura);
					//verificar gatilho que aciona o salvamento de faturas

					//gerar voucher
					//gerar qrcode

					/*Inicio de dados para email*/
					$dados_atividade = $this->_dadosAtividade($evento);
					$dados_usuario = $this->_dadosUsuario($usuario);
					$dados_compra = array(
						'data_compra' => datetime_now(),
						'quantidade' => $quantidade,
						'preco' => $preco_confirmacao,
						'voucher' => $invoice_id,
					);
					/*Fim de dados para email*/

					$dados_email = array(
						'atividade' => $dados_atividade,
						'usuario' => $dados_usuario,
						'compra' => $dados_compra,
					);
					//send email de confirmação(com voucher e qrcode)

					//$this->_sendEmailToClient($email, $dados_email);

					//pegar email do organizador
					//$this->_sendEmailToOrganizer();

					//$this->_sendEmailToPQR($dados_email);

					//load page de sucesso no agendamento
					//$this->load->view("eventos/sucesso");
					//

					$this->load->template('eventos/sucesso', $dados_email);

					//redirect(base_url("fatura/novo"));
				} else {
					$error = getMessageErrorByLR($result_pgto->LR);
					$this->_novoAgendamento($evento, $quantidade, $error);
				}
			} else {
				//nao tem vagas disponiveis
				//colocar mensagem no flash_session
				$error = "Não há vagas disponiveis!";
				$this->_novoAgendamento($evento, $quantidade, $error);
			}
		} else {
			$this->_novoAgendamento($evento, $quantidade);
		}
	}

	function _sendEmailToClient($to, $data) {
		$subject = "Confirmação de pagamento!";
		$conteudo = $this->load->view('emails/venda_realizada', $data, TRUE);
		send_email($to, $subject, $conteudo);
	}

	function _sendEmailToClientWaiting($to, $data) {
		$subject = "Aguardando de pagamento!";
		$conteudo = $this->load->view('emails/aguardando_pagamento', $data, TRUE);
		send_email($to, $subject, $conteudo);
	}

	function _sendEmailToOrganizer($to, $subject, $conteudo) {
		send_email($to, $subject, $conteudo);
	}

	function _sendEmailToPQR($data) {
		$subject = "Pagamento realizado!";
		$conteudo = $this->load->view('emails/venda_realizada', $data, TRUE);
		send_email("comercial@praquerumo.com.br", $subject, $conteudo);
	}

	function _sendEmailToPQRWaiting($data) {
		$subject = "Aguardando Pagamento!";
		$conteudo = $this->load->view('emails/aguardando_pagamento', $data, TRUE);
		send_email("comercial@praquerumo.com.br", $subject, $conteudo);
	}

	function _getUsuarioId($nome_completo, $celular, $email) {
		$nomes = explode(" ", $nome_completo, 2);

		$usuario = $this->usuarios_model->buscaUsuarioId($email);

		//cadastra como anonimo se nao estiver no bd
		if (empty($usuario)) {
			$cliente_iugu = $this->_addClienteIugu($email, $nome_completo);

			$usuario = array(
				'nome' => $nomes[0],
				'sobrenome' => $nomes[1],
				'telefone' => $celular,
				'username' => $email,
				'email' => $email,
				'senha' => md5($nomes[0]),
				'cliente' => true,
				'organizador' => false,
				'revendedor' => false,
				'anonimo' => true,
				'id_iugu' => $cliente_iugu['id'],
				'dt_criacao' => datetime_now(),
				'dt_atualizacao' => datetime_now(),
			);

			$this->usuarios_model->salva($usuario);
			$usuario = $this->usuarios_model->buscaUsuarioId($email);
		}

		return $usuario['id'];
	}

	function _dadosUsuario($usuario_id) {

		return $this->usuarios_model->buscaUsuario($usuario_id);
	}

	/*validacao dos campos do formulario*/
	function _validacao() {
		//validar nome para que tenha nome + sobrenome
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]|max_length[60]|xss_clean');
		$this->form_validation->set_rules('celular', 'Celular', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('confirmacao', '"Concorda com os termos"', 'required');

		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

		return $this->form_validation->run();
	}

	function _dadosAtividade($codigo_evento) {
		$evento = $this->eventos_model->buscarEventoDetalhes($codigo_evento);
		$dados_atividade = array(
			'titulo' => $evento['titulo'],
			'ponto_encontro' => $evento['ponto_encontro'],
			'data' => $evento['data_inicio'],
			'horario' => $evento['hora_inicio'],
		);

		return $dados_atividade;
	}

	function _novoAgendamento($codigo_evento, $quantidade, $error = null) {
		$evento = $this->eventos_model->buscarEventoDetalhes($codigo_evento);
		$preco = $evento['preco'] * $quantidade;
		$str_preco = numeroEmReais($preco);

		$descricao = getDayData($evento['data_inicio']) .
		" de " . getMonthFullNameData($evento['data_inicio']) . " " .
		getSessionTime($evento['hora_inicio']) . " - " . getSessionTime($evento['hora_fim']);

		$data = array(
			"evento" => $evento,
			"quantidade" => $quantidade,
			"error" => $error,
			"preco" => $str_preco,
			"preco_unit" => numeroEmReais($evento['preco']),
			"preco_raw" => $evento['preco'],
			"preco_avg" => numeroEmReais($preco / $quantidade),
			"descricao_pgto" => $evento['titulo'] . ", " . $descricao,
			"descricao" => $descricao,
		);
		$this->load->template("agendamento/index", $data);
	}

	/*descontar de disponiveis do evento*/
	function _atualizaVagas($result_success, $evento, $vagas_disponiveis, $quantidade) {
		if ($result_success) {
			$vagas = (int) $vagas_disponiveis - $quantidade;
			$vagas_restantes = ($vagas > 0) ? $vagas : 0;
			$dados = array('disponivel' => $vagas_restantes);
			$this->eventos_model->atualizaVagasDisponiveis($evento, $dados);

			return true;
		} else {
			//erro na operação bancaria
			return false;
		}
	}

	/*Verifica se ainda existem vagas disponiveis*/
	function _verificaDisponibilidade($evento, $quantidade) {
		$vagas_array = $this->eventos_model->buscaVagasDisponiveis($evento);
		$vagas_disponiveis = $vagas_array['disponivel'];

		return ($quantidade <= (int) $vagas_disponiveis) ? $vagas_disponiveis : 0;
	}

	/* Cria cliente iugu */
	function _addClienteIugu($email, $nome_completo) {
		setIuguAPIToken();

		$cliente = array(
			'email' => $email,
			'name' => $nome_completo,
		);

		return Iugu_Customer::create($cliente);
	}

	/*Realiza o pagamento pelo iugu*/
	function _pagar($token, $email, $descricao, $quantidade, $preco) {

		setIuguAPIToken();
		$carrinho = array(
			"token" => $token,
			"email" => $email,
			"items" => array(
				array(
					"description" => $descricao,
					"quantity" => $quantidade,
					"price_cents" => $preco,
				),
			),
		);

		return Iugu_Charge::create($carrinho);
	}

	function _criaBoleto($email, $descricao, $quantidade, $preco) {
		setIuguAPIToken();
		$carrinho = array(
			"method" => "bank_slip",
			"email" => $email,
			"due_date" => date("d/m/Y"),
			"items" => array(
				array(
					"description" => $descricao,
					"quantity" => $quantidade,
					"price_cents" => $preco,
				),
			));

		return Iugu_Charge::create($carrinho);
	}

}