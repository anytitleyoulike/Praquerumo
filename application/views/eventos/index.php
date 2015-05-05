<!DOCTYPE html>
<html>
  <head>
	<title>PRAQUERUMO - <?=lang("title_pagina_inicial")?></title>
	<link rel="canonical" href="http://www.praquerumo.com.br/" />
	<meta  name="description" content="Encontre atividades de turismo de aventura e ecoturismo na Amazônia. Experimente atividades como Rafting, Stand-Up Paddle, Trekking, Caiaque e muito mais.">
	<!--<link href="<?=base_url("assets/css/style01.css")?>" rel="stylesheet" media="screen">-->
	<link href="<?=base_url("assets/css/evento-box.css")?>" rel="stylesheet" media="screen">
	<!-- Carousel -->
	<link href="<?=base_url("assets/css/carousel.css")?>" rel="stylesheet">


    <style type="text/css">
    	.price{
    		position: absolute;
    		top: 10px;
    		right: 23px;
    		background: orange;
    		color: white;
    	}
    	.presentation{
    		height: 120px;
    	}
    	.box-activity{
    		margin-bottom: 30px;
    	}
    	.line-info{
    		margin-top: -20px;

    	}
    	.line-info2{
    		margin-top: 170px;
    	}
    	.box-info{
    		text-align: center;
    		margin-bottom: 5px;
    	}
    	.box-circle{
    		float: left;
    	}
    	.box-height{
    		height: 370px;
    	}
    	.box-dates{
    		position: absolute;
    		bottom: 15px;
    	}
    </style>


  </head>
  <body id="top">

    <!-- begin header -->
<?=$nav_bar?>
	<!-- end header -->

	<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
			<div class="fullscreenbanner">
				<ul>
					<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300">
						<img src="<?=base_url("assets/images/destaques/4.jpg")?>" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Pra Que Rumo</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Descubra seu Rumo</span><br/>
								<span class="lato size20 normal caps white"></span><br/><br/>
								<span class="lato size48 slim uppercase yellow"></span><br/>
							 </div>
						</div>
					</li>

<?php foreach ($destaques as $destaque) {?>
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300">
						<img src="<?=base_url("assets/images/atividades/destaques/{$destaque['fig_destaque']}")?>" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white"><?=$destaque['cidade']?></span><br/><br/><br/>
								<span class="lato size100 slim caps white"><?=$destaque['modalidade']?></span><br/>
								<span class="lato size20 normal caps white">por</span><br/><br/>
								<span class="lato size48 slim uppercase yellow"><?=numeroEmReais($destaque['preco'])?></span><br/>
							 </div>
						</div>
					</li>

<?php }?>
				</ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>

		<!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


		});
		</script>






	<!-- WRAP -->
	<div class="wrap bgfix cstyle03">

		<!-- 3 COLS OVER HEADER-->
		<div class="container mt-200 z-index100">
		  <div class="row">

			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one">
						<img src="<?=base_url("assets/images/destaques/info1.png")?>" alt="" />
						<div class="mhover none">
							<span class="icon">
								<a href="#">
									<img src="<?=base_url("assets/images/spacer.png")?>" alt=""/>
								</a>
							</span>
						</div>
					</div>
					<div class="ctitle"><!--primeiro evento--><!-- <a href="#"> --><img src="<?=base_url("assets/images/spacer.png")?>" alt=""/></a>
						<span><!-- R$50,00 --></span>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one"><img src="<?=base_url("assets/images/destaques/info2.png")?>" alt="" /><div class="mhover none"><span class="icon"><a href="#"><img src="<?=base_url("assets/images/spacer.png")?>" alt=""/></a></span></div></div>
					<div class="ctitle"><!-- Kayak --><!-- <a href="#"> --><img src="<?=base_url("assets/images/spacer.png")?>" alt=""/></a>
						<span><!-- R$150,00 --></span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one"><img src="<?=base_url("assets/images/destaques/info3.png")?>" alt="" /><div class="mhover none"><span class="icon"><a href="#"><img src="<?=base_url("assets/images/spacer.png")?>" alt=""/></a></span></div></div>
					<div class="ctitle"><!-- Bóia Cross --><!-- <a href="#"> --><img src="<?=base_url("assets/images/spacer.png")?>" alt=""/></a>
						<span><!-- R$120,00 --></span>
					</div>
				</div>
			</div>
		  </div>
		</div>
		<!-- / 3 COLS OVER HEADER-->
		<div class="lastminute lcfix">
			<div class="container lmc">
					<!--<div class="line3 line-info"></div>-->

					<div class="col-md-4">
						<div class="opensans grey2 center">
							<div class="box-info box-circle">
								<span class="gcircle">1</span><span class="lato size20 dark mt6 ml10 left"><b>Escolha</b></span>
							</div>
							<div class="clearfix"></div>
							<span class="size18">Selecione uma de nossas atividades e convide seus amigos para compartilhar a aventura.</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="opensans grey2 center">
							<div class="box-info box-circle">
								<span class="gcircle">2</span><span class="lato size20 dark mt6 ml10 left"><b>Agende</b></span>
							</div>
							<div class="clearfix"></div>
							<span class="size18">Opte pela melhor data disponível e deixe os organizadores resolverem o resto para você.</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="opensans grey2 center">
							<div class="box-info box-circle">
								<span class="gcircle">3</span><span class="lato size20 dark mt6 ml10 left"><b>Vivencie</b></span>
							</div>
							<div class="clearfix"></div>
							<span class="size18">Desfrute de experiências renovadoras que o farão sair da rotina.</span>
						</div>
					</div>

					<!--<div class="line3 line-info2"></div>-->

			</div>
		</div>

		<div id="atividades" class="container cstyle07">
<?php $counter = 0;
foreach ($atividades as $atividade) {?>
			  <div class="col-md-4 box-activity">
				<div class="boxshadow center">
					<span class="badge pull-right price"><?=numeroEmReais($atividade['preco'])?></span>
					<a href="<?=base_url("atividades/{$atividade['slug']}")?>">
						<img src="<?=base_url("assets/images/atividades/thumbnails/{$atividade['fig_thumbnail']}")?>" alt="" class="fwimg"/>
					</a>
					<div class="bscontainer box-height">
						<h4 class="lato bold caps"><?php $attributes = array('class' => 'ancora-titulo');?>
							<?=anchor(base_url("atividades/{$atividade['slug']}"),
'<h3 class="box-titulo black palo-alto size18">'
. character_limiter($atividade["titulo"], 30) .
'</h3>', $attributes)?>
</h4>
						<h6 class="grey" style="text-align: left; float: center; padding-left: 30px; margin-top: 0px;">
<?=$atividade["cidade"] . "/" . $atividade["estado"]?>
</h6>

<?php $avaliacao = $atividade['avaliacao'];
	if ($avaliacao['nota'] == null) {
		$rating = 0;
	} else {

		$rating = round($avaliacao['nota']);
	}

	if ($avaliacao['recomenda'] == null) {
		$recomendacoes = 0;
	} else {

		$recomendacoes = $atividade['recomendacao']['quantidade'];
	}

	?>
									<img src="<?=base_url("assets/images/user-rating-{$rating}.png")?>" width="100"	alt=""/>
						<hr>
						<div class="presentation">
							<p class="grey">
<?=character_limiter($atividade["apresentacao"], 120)?>
</p>
						</div>
						<!-- Mais eventos -->
						<div class="clearfix"></div>
						<div class="box-dates">
<?php

	foreach ($atividade['eventos'] as $evento) {

		if ($evento['disponivel'] > 0) {
			echo anchor(base_url("atividades/{$atividade['slug']}/#agendamento"), '<time datetime="2014-09-20" class="calendar-icon calendar-small calendar-green calendar-left10">
															  <em> ' . lang("evento_disponivel") . '</em>
															  <strong>' . getMonthNameData($evento['data_inicio']) . '</strong>
															  <span>' . getDayData($evento['data_inicio']) . '</span>
															</time>');
		} else {
			echo anchor(base_url("atividades/{$atividade['slug']}"), '<time datetime="2014-09-20" class="calendar-icon calendar-small calendar-red calendar-left10">
															  <em> ' . lang("evento_indisponivel") . '</em>
															  <strong>' . getMonthNameData($evento['data_inicio']) . '</strong>
															  <span>' . getDayData($evento['data_inicio']) . '</span>
															</time>');
		}
	}
	?>

<?=anchor(base_url("atividades/{$atividade['slug']}"), '<time datetime="2014-09-20" class="calendar-icon calendar-small calendar-orange calendar-left10">
															  <em>Mais</em>
															  <strong>Datas</strong>
															  <span>+</span>
															</time>')?>
</div>
						<!--<form action="list4.html">
							<button class="roundbtn" type="submit">Mais</button>
						</form>-->
					</div>
				</div>
			  </div>
<?php
$counter++;
	if ($counter % 3 == 0) {
		echo '<div class="clearfix"></div>';
	}
}
?>

		</div>

		<!-- Comeco midia -->

		<div class="footerbg4">
			<div class="container">
				<div>
					<h5 class="bold left grey">Saiu na Imprensa:</h5>
				</div>
				<div class="clearfix"></div>
				<div>
					<a href="http://www.agenciacti.com.br/index.php?option=com_content&view=article&id=5751:-inpa-realizara-projeto-de-turismo-cientifico-em-manaus-durante-a-copa-2014&catid=1:latest-news" target="_blank"
						class=""><img src="<?=base_url('assets/images/imprensa/agenciacti.png')?>"
						alt="Agência Gestão CT&I" width="188" height="60"/></a>
					<a href="http://www.portalamazonia.com.br/cultura/turismo/no-amazonas-projeto-pra-que-rumo-aposta-em-turismo-de-aventura" target="_blank"
						class=""><img src="<?=base_url('assets/images/imprensa/portal_amazonia.png')?>"
						alt="Portal Amazônia" width="188" height="60"/></a>
					<a href="http://www.emtempo.com.br/start-ups-de-manaus-rumo-ao-cenario-internacional/" target="_blank"
						class=""><img src="<?=base_url('assets/images/imprensa/amazonas_em_tempo.png')?>"
						alt="Amazonas Em Tempo" width="188" height="60"/></a>
					<a href="https://www.inpa.gov.br/noticias/noticia_sgno2.php?codigo=3255" target="_blank"
						class=""><img src="<?=base_url('assets/images/imprensa/inpa.png')?>"
						alt="INPA" width="100" height="80"/></a>
					<a href="http://www.brasil.gov.br/ciencia-e-tecnologia/2014/06/inpa-promove-projeto-de-turismo-cientifico-em-manaus-am" target="_blank"
						class=""><img src="<?=base_url('assets/images/imprensa/portal_brasil.png')?>"
						alt="Portal Brasil" width="100" height="80"/></a>
					<a href="http://www.cntur.com.br/noticias/03_10_14b.htm" target="_blank"
						class=""><img src="<?=base_url('assets/images/imprensa/logo-cntur.png')?>"
						alt="CNTUR" width="188" height="60"/></a>
				</div>
			</div>
		</div>

		<!-- fim midia -->




    <!-- Javascript -->

    <!-- This page JS -->
	<script src="<?=base_url("assets/js/js-index3.js")?>"></script>

    <!-- Custom functions -->
    <script src="<?=base_url("assets/js/functions.js")?>"></script>

    <!-- Picker UI-->
	<script src="<?=base_url("assets/js/jquery-ui.js")?>"></script>

	<!-- Easing -->
    <script src="<?=base_url("assets/js/jquery.easing.js")?>"></script>

    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="<?=base_url("assets/js/jquery.themepunch.revolution.min.js")?>"></script>

   <!-- Nicescroll-->
	<script src="<?=base_url("assets/js/jquery.nicescroll.min.js")?>"></script>

    <!-- CarouFredSel -->
    <script src="<?=base_url("assets/js/jquery.carouFredSel-6.2.1-packed.js")?>"></script>
    <script src="<?=base_url("assets/js/jquery.touchSwipe.min.js")?>"></script>
	<!--<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
-->
    <!-- Custom Select-->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>

    <!-- Include all compiled plugins (below), or include individual files as needed
    <script src="dist/js/bootstrap.min.js"></script>-->
  </body>
</html>