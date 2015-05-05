    <!-- Top wrapper -->
	<div class="navbar-wrapper2">
      <div class="container navbar-aligntitle">
		<div class="navbar ">

			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="<?=base_url()?>" class="navbar-brand"><img src="<?=base_url("assets/images/logo_beta.png")?>" alt="Pra Que Rumo Logo" class="logo"/></a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right navbar-verticalalign">
					  <!-- <li><a id="nav_atividades" href="#">Atividades</a></li> -->
<?php
if (isset($estado)) {?>
							  <li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?=$estado?><b class="lightcaret mt-2"></b></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
								  <li class="dropdown-header"># Estados #</li>
								  <!-- <li><a href="<?=base_url("estado/switchState/acre")?>">Acre</a></li> -->
								  <li><a href="<?=base_url("estado/switchState/amazonas")?>">Amazonas</a></li>
								  <!-- <li><a href="<?=base_url("estado/switchState/amapa")?>">Amapá</a></li>
								  <li><a href="<?=base_url("estado/switchState/para")?>">Pará</a></li>
								  <li><a href="<?=base_url("estado/switchState/rondonia")?>">Rondônia</a></li> -->
								  <li><a href="<?=base_url("estado/switchState/roraima")?>">Roraima</a></li>
								  <!-- <li><a href="<?=base_url("estado/switchState/tocantins")?>">Tocantins</a></li> -->
								</ul>
							  </li>
<?php }?>
				  	  <li><a href="<?=base_url("equipe")?>">Equipe</a></li>
				  	  <!-- <li><a id="nav_contatos" href="#">Contato</a></li> -->
				</ul>
			  </div>
			  <!-- /Navigation-->
			</div>

        </div>
      </div>
    </div>
	<!-- /Top wrapper -->