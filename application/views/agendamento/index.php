<title>PRAQUERUMO - Agendamento</title>
	<meta  name="description" content='Agendamento de atividades'>
	<link rel="stylesheet" href="<?=base_url("assets/css/jslider.css")?>" type="text/css">
	<link rel="stylesheet" href="<?=base_url("assets/css/jslider.round-blue.css")?>" type="text/css">
	<!--<link href="<?=base_url("assets/css/evento-box.css")?>" rel="stylesheet" media="screen">-->
	<link href="<?=base_url("assets/css/loader.css")?>" rel="stylesheet" media="screen">

	<script type="text/javascript" src="<?=base_url("assets/js/jshashtable-2.1_src.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/jquery.numberformatter-1.2.3.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/tmpl.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/jquery.dependClass-0.1.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/draggable-0.1.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("assets/js/jquery.slider.js")?>"></script>
  </head>
  <body id="top" class="thebg" >
<?=$nav_bar?>
<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#">Agendamento</a></li>
					<li>/</li>
					<li><a href="#" class="active">Reserva Online</a></li>
				</ul>
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>

	<!-- CONTENT -->
	<div class="container">

<div class="container mt25 offset-0">
<?php if ($error):?>
		<p class="alert alert-danger"><?=$error?></p>
<?php endif;?>
<!-- LEFT CONTENT -->
			<div class="col-md-8 pagecontainer2 offset-0 loaderArea">
				<div class="padding30 grey">
					<span class="size16px bold dark left">Identificação</span>
					<div class="roundstep active right">1</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					Por favor, diga-nos quem irá realizar a experiência de turismo.<br/><br/>
<?php
$attributes = array('id' => 'payment-form');

echo form_open("agendamento/realizaTransacaoCartao", $attributes);

$data = array(
	'evento_codigo' => $evento['codigo'],
	'preco_raw' => $preco_raw,
	'quantidade' => $quantidade,
	'descricao' => $descricao_pgto,
	'data_horario' => $descricao,
	'tipo_pagamento' => '#card',
	'preco_str' => $preco,
);
echo form_hidden($data);
?>
<div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Nome:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">Primeiro e Último nome*</span>
<?php
echo form_input(array(
	"name" => "nome",
	"id" => "nome",
	"class" => "form-control",
	"maxlength" => "255",
	"value" => set_value('nome'),
));
echo form_error("nome");
?>
</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>

					<br/>
					<div class="col-md-4 textright">
						<div class="margtop7"><span class="dark">Celular:</span><span class="red">*</span></div>
					</div>

					<div class="col-md-4 textleft">
						<span class="size12">Número para contato*</span>
<?php
echo form_input(array(
	"name" => "celular",
	"id" => "celular",
	"class" => "form-control",
	"maxlength" => "255",
	"value" => set_value('celular'),
));
echo form_error("celular");
?>
</div>
					<div class="clearfix"></div>

					<br/>
					<div class="col-md-4">
					</div>
					<div class="col-md-8 textleft">
						<!--Acompanhamentos / Requisição para fumantes (opcional)
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse3"></button>
						<div id="collapse3" class="collapse">
							<textarea rows="3" class="form-control margtop10"></textarea>
						</div>

						<div class="clearfix"></div>	-->

						Requisições especiais (opcional)
						<!-- Collapse 4 -->
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse4"></button>
						<div id="collapse4" class="collapse">
<?php
echo form_textarea(array(
	"name" => "requisicoes_especiais",
	"id" => "requisicoes_especiais",
	"placeholder" => "Requisitos especiais para deficientes físicos",
	"class" => "form-control margtop10",
	"rows" => "3",
));
?>
</div>
						<!-- End of collapse 4 -->
						<div class="clearfix"></div>

					</div>
					<div class="clearfix"></div>

					<br/>
					<br/>
					<span class="size16px bold dark left">Qual seu e-mail para envio de confirmação de agendamento?</span>
					<div class="roundstep right">2</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					Por favor, digite seu endereço de e-mail para receber a confirmação.<br/>


					<div class="col-md-4 textright">
						<div class="mt15"><span class="dark">E-mail:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
<?php
echo form_input(array(
	"name" => "email",
	"id" => "email",
	"class" => "form-control margtop10",
	"maxlength" => "255",
	"value" => set_value('email'),
));
echo form_error("email");
?>
</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>

					<br/>
					<br/>
					<span class="size16px bold dark left">Como gostaria de pagar?</span>
					<div class="roundstep right">3</div>
					<div class="clearfix"></div>
					<div class="line4"></div>



					<br/>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						Cupom de desconto
						<!-- Collapse 5 -->
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse5"></button>
						<div id="collapse5" class="collapse">
							<input type="text" class="form-control margtop10" placeholder="">
						</div>
						<!-- End of collapse 5 -->
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>


					<br/>
					<!-- Nav tabs -->
					<ul class="nav navigation-tabs">
					  <li class="active"><a href="#card" data-toggle="tab">Cartão de Crédito</a></li>
					  <li><a href="#bank_slip" data-toggle="tab">Boleto</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content4">

					  <!-- Tab 1 -->
					  <div class="tab-pane active" id="card">
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark"></span><span class="red"></span></div>
							</div>
							<div class="col-md-4">
								<img src="http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/cc-icons.e8f4c6b4db3cc0869fa93ad535acbfe7.png" alt="Visa, Master, Diners. Amex" border="0" />
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Número do cartão:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">

<?php
echo form_input(array(
	"name" => "",
	"id" => "numero_cartao",
	"data-iugu" => "number",
	"class" => "form-control margtop10",
	"maxlength" => "16",
));
?>
<div class="carderror"></div>
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							<!--
							<br/>
							<div class="col-md-4 textright">
								<div class="margtop7"><span class="dark">Tipo do cartão:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<select class="form-control mySelectBoxClass">
								  <option selected>xxx-xxx-xxx-772</option>
								  <option>xxx-xxx-xxx-039</option>
								</select>
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							-->
							<br/>
							<div class="col-md-4 textright">
								<div class="margtop7"><span class="dark">Data de validade:</span><span class="red">*</span></div>
							</div>

							<div class="col-md-4">
								<div class="box-expiration">
									<div class="w50percent">
										<div class="wh90percent">
											<select id="validade_mes" class="form-control mySelectBoxClass">
											  <option selected value="01">JAN</option>
											  <option value="02">FEV</option>
											  <option value="03">MAR</option>
											  <option value="04">ABR</option>
											  <option value="05">MAI</option>
											  <option value="06">JUN</option>
											  <option value="07">JUL</option>
											  <option value="08">AGO</option>
											  <option value="09">SET</option>
											  <option value="10">OUT</option>
											  <option value="11">NOV</option>
											  <option value="12">DEZ</option>
											</select>
										</div>
									</div>
<?php
$ano = date("y");
for ($i = $ano; $i <= ($ano + 10);
	$i++) {
	$opcoes[$i] = $i;
}
?>
<div class="w50percentlast">
										<div class="wh90percent right">
<?=form_dropdown(
'',
$opcoes,
1,
'id="validade_ano" class="form-control mySelectBoxClass"'
)?>
</div>
									</div>
								</div><!-- box-expiration -->
								<div class="box-expirtion-error">
									<input type="hidden" id="validade" data-iugu="expiration" value='' />
									<div class="carderror card-expiration"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>


							<br/>
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Cód. Segurança:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
<?php
echo form_input(array(
	"name" => "",
	"id" => "cvv",
	"data-iugu" => "verification_value",
	"class" => "form-control margtop10",
	"maxlength" => "4",
));
?>
<div class="carderror"></div>
</div>
							<div class="col-md-4 textleft margtop15"><!--O que é isso?-->
							</div>
							<div class="clearfix"></div>


							<!--<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">CEP:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft margtop15">
							</div>
							<div class="clearfix"></div>
							-->

							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark"> Nome no cartão:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
<?php
echo form_input(array(
	"name" => "nome_cartao",
	"id" => "nome_cartao",
	"data-iugu" => "full_name",
	"class" => "form-control margtop10",
	"maxlength" => "255",
))
?>
</div>
							<div class="col-md-4 textleft margtop15">(como aparece no cartão)
							</div>
							<div class="clearfix"></div>

					  </div>
					  <!-- End of Tab 1 -->

					  <!-- Tab 2 -->
					  <div class="tab-pane" id="bank_slip">

						<div class="alert alert-warning fade in">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
							<strong>Importante:</strong> O boleto gerado terá validade de 1(um) dia para pagamento,
								após isso, será automaticamente cancelado.
						</div>

						<!--<button type="submit" class="btn-search5">Gerar boleto</button>-->

					  </div>
					  <!-- End of Tab 2 -->
					</div>


					<br/>
					<br/>
					<span class="size16px bold dark left">Revise e confirme seu agendamento</span>
					<div class="roundstep right">4</div>
					<div class="clearfix"></div>
					<div class="line4"></div>

					<div class="alert alert-warning">
					Informações importante sobre seu agendamento:<br/>
					<p class="size12">• Esta reserva não é reembolsável e só pode ser alterada ou cancelada com
					antecedência mínima de 48hs até a realização da atividade.</p>
					</div>

					<div class="checkbox">
					    <label>
<?php
$data = array(
	'name' => 'confirmacao',
	'id' => 'confirmacao',
	'value' => 'accept',
	'checked' => set_checkbox('confirmao', 'accept', false),
);
echo form_checkbox($data);

?>
Completando esse agendamento, concordo que lí e aceito o
								<a href='<?=base_url("termos/termo_de_uso")?>' class="orange">termo de uso & restrições. </a>
								<!-- <a href="#" class="orange">termo de consentimento & condições</a> , e
								<a href="#" class="orange">política de privacidade</a>. -->
<?php echo form_error("confirmacao");?>
</label>
					</div>
					<!--<div class="checkbox">
					    <label>
					      <input type="checkbox"> Confirmação de atividade por SMS.
					    </label>
					</div>-->
					<input type="hidden" name="token" id="token" value="" readonly="true" size="64" />
<?php echo form_button(array(
	"class" => "btn btn-danger margtop20",
	"id" => "btnSubmit",
	"data-loading-text" => "Criando Fatura...",
	"data-complete-text" => "Pronto!",
	"content" => 'Completar Agendamento',
	"type" => "submit",
));

echo form_close();
?>
					<!--<div>
						<div class="loader">Ola</div>
					</div>-->

				</div>

			</div>
			<!-- END OF LEFT CONTENT -->

			<!-- RIGHT CONTENT -->
			<div class="col-md-4" >
				<div class="pagecontainer2 paymentbox grey">
					<div class="padding30">
						<!--<img src="images/thumb.png" class="left margright20" alt=""/> -->
						<!--<img style="padding-left: 20px; padding-right: 20px; padding-top: 10px;" src='<?=base_url("assets/images/atividades/1/thumbnail.jpg")?>' alt="" class="fwimg" />-->
						<span class="opensans size18 dark bold"><?=$evento['titulo']?></span><br/>
						<span class="opensans size13 grey"><?=$evento['cidade']?>, <?=$evento['estado']?></span><br/>
						<img src="<?=base_url("assets/images/atividades/thumbnails/{$evento['fig_thumbnail']}")?>" alt=""/>
					</div>
					<div class="line3"></div>

					<div class="hpadding30 margtop30">
						<table class="table table-bordered margbottom20">
							<!--<tr>
								<td>Usuários recomendam</td>
								<td class="center green bold">97%</td>
							</tr>
							<tr>
								<td>Avaliação dos usuários</td>
								<td class="center green bold">4.5</td>
							</tr>-->
							<tr>
								<td colspan=2><span class="dark">Evento</span>: <?=$evento['titulo']?></td>
							</tr>
							<tr>
								<td colspan=2><span class="dark">Sessão</span>: <?php echo $descricao?></td>
							</tr>
							<tr>
								<td>
									<span class="dark">Agendamento</span>: <?=$quantidade?>tickets<br/>
									Reservas
									<!-- Collapse 1 -->
									<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
									<div id="collapse1" class="collapse in">
<?php for ($i = 0; $i < $quantidade; $i++) {?>
<div class="left size12 lblue">
												01 ticket<br/>
											</div>
											<div class="right size12 lblue">
<?=$preco_unit?><br/>
											</div><div class="clearfix"></div>
<?php }?>
</div>
									<!-- End of collapse 1 -->
									<div class="clearfix"></div>


									<!--Acompanhamentos & Adicionais


									<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse2"></button>
									<div id="collapse2" class="collapse">
										<div class="left size12 lred">
											Translado<br/>
											Almoço
										</div>
										<div class="right size12 lred">
											R$60,00<br/>
											R$20,00
										</div><div class="clearfix"></div>
									</div>
									-->
									<!-- End of collapse 1 -->
									<div class="clearfix"></div>

								</td>
								<td class="center">
									Custo/pessoa<br/>
<?=$preco_avg?><br/>
								</td>
							</tr>
						</table>
					</div>
					<div class="line3"></div>
					<div class="padding20">
						<span class="left size14 dark">Valor Total:</span>
						<span class="right lred2 bold size18"><?=$preco?></span>
						<div class="clearfix"></div>
					</div>


				</div><br/>
				<!--
				<div class="pagecontainer2 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Need Assistance?</h3>
						<p class="size14 grey">Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
						<p class="opensans size30 orange xslim">1-866-599-6674</p>
					</div>
				</div><br/>

				<div class="pagecontainer2 loginbox">
					<div class="cpadding1">
						<span class="icon-lockk"></span>
						<h3 class="opensans">Log in</h3>
						<input type="text" class="form-control logpadding" placeholder="Username">
						<br/>
						<input type="text" class="form-control logpadding" placeholder="Password">
						<div class="margtop20">
							<div class="left">
								<div class="checkbox padding0">
									<label>
									  <input type="checkbox">Remember
									</label>
								</div>
								<a href="#" class="greylink">Lost password?</a><br/>
							</div>
							<div class="right">
								<button class="btn-search5" type="submit" onclick="errorMessage()">Login</button>
							</div>
						</div>
						<div class="clearfix"></div><br/>
					</div>
				</div><br/>
				-->
			</div>
			<!-- END OF RIGHT CONTENT -->


		</div>


	</div>
	<!-- END OF CONTENT -->

	<!-- Javascript  -->
	<script src="<?=base_url("assets/js/js-payment.js")?>"></script>
	<!-- Iugu -->
	<script type="text/javascript" src="https://js.iugu.com/v2"></script>
	<script type="text/javascript" src='<?=base_url("assets/js/iugu.js")?>'></script>

    <!-- Custom Select -->
	<script type='text/javascript' src='<?=base_url("assets/js/jquery.customSelect.js")?>'></script>

	<!-- Load Animo -->
	<script src="<?=base_url("assets/js/animo.js")?>"></script>
