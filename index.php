<!DOCTYPE html>
<?php 
	include("php/conexao.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<link rel="stylesheet" type="text/css" href="css/cabecalho.css">
		<link rel="stylesheet"	type="text/css" href="css/geral.css">
		<link rel="stylesheet"	type="text/css" href="css/meio.css">
	</head>
    <body>
		<header class="cabecalho">
			<a href="index.html" class="logo">Power Tech</a>
			<div class="search-box">
			<input tupy="text" name="pesquisa" class="search-txt" placeholder="Pesquisar"/>
			<a href="#" class="search-blt">
				<img src="../Loja_Eletronica/img//loupe.png" alt="Lupa" height="20px" width="20px">
			</a>
			</div>
			<ul class="navigation">
				<li><a href="" class="active">Incio</a></li>
				<li><a href=""  class="active">Html</a></li>
				<li><a href=""  class="active">Java</a></li>
				<li><a href=""  class="active">Mysql</a></li>
				<li class="icon"><a href=""><img src="../Loja_Eletronica/img/simple-icon.png" width="119px" height="157px"></a></li>
			</ul>
		</header>
		<main>
			<div class="topico-maior-superior">				
				<div id="margem">
					<a href="" class="active-main">Baixe o APP</a>
				</div>
				<div id="margem">
					<a href="" class="active-main">Serviços</a>
				</div>
				<div id="margem">
					<a href="" class="active-main">Oferta do dia</a>
				</div>
			</div>
			<div class="topico-maior-superior-a">
				<div class="topico-maior">
					<a href="" class="titulo-main">CONFIRA NOSSAS MAIORES OFERTAS!</a>
				</div>
			</div>
			<div class="topicos">
				<a href="../Loja_Eletronica/html/gamer.html"><div class="caixa" id="item1" id="ide"><h1 class="titulo-main">Gamer</h1>
					<img class="icone" width="85px" height="108px" src="../Loja_Eletronica/img/ps5.jpg" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Console Sony Playstation 5 + Controle Sem fio PS5 DualSense</h2>
						<h3 class="titulo-main">R$ 3.799,99</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item2" id="html">
					<h1 class="titulo-main">Pcs e Notbooks</h1>
					<img class="icone" width="70px" height="70px" src="../Loja_Eletronica/img/pc-gamer-skul-3000-intel-quad-core-i3-10100f-rgb-amd-radeon-rx-550-8gb-ddr4-ssd-240gb-linux-preto-g4704-120630_1644605124_original.jpg" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">PC Gamer Skul 3000 I3-10100F, Radeon RX 550, 8GB DDR4, SSD 240GB, 500W PFC ATIVO, Linux - G4704-120630</h2>
						<h3 class="titulo-main">R$ 2.799,99</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 10% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item3" id="php">
					<h1 class="titulo-main">Tvs</h1>
					<img class="icone" width="125px" height="91px" src="../Loja_Eletronica/img/218853.00-smart-tv-4-k-samsung-50-udh-wi-fi.avif" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Smart TV 4K Samsung 50" UN50AU7700, UHD, 3 HDMI, 1 USB, Wi-Fi Integrado</h2>
						<h3 class="titulo-main">R$ 2.881,35</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item4" id="js">
					<h1 class="titulo-main">Tablets</h1>
					<img class="icone"width="100px" height="100px" src="../Loja_Eletronica/img/tablet_samsung_galaxy_tab_a_10_1_wifi_t510_prata_5997_1_ec68af1a150c312445044fb71bb0d06d.webp">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Console Sony Playstation 5 + Controle Sem fio PS5 DualSense</h2>
						<h3 class="titulo-main">R$ 3.799,99</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item5" id="java">
					<h1 class="titulo-main">Hardware</h1>
					<img class="icone"width="100px" height="100px" src="../Loja_Eletronica/img/placa-de_video.jpg" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Placa De Vídeo PcYes Nvidia Geforce gtx 1050 ti 4GB 128 Bits Dual-Fan</h2>
						<h3 class="titulo-main">R$ 3.258,79</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>	
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item6" id="ap">
					<h1 class="titulo-main">Celulares</h1>
					<img class="icone"width="100px" height="100px" src="../Loja_Eletronica/img/iphone_8_plus_apple_de_vitrine_87_1_d605fa4fd91c2e9a31b02ff8c5c13146_20211129173858.png" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Iphone 8 Plus Apple de Vitrine</h2>
						<h3 class="titulo-main">R$ 1.450,00 </h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 10% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item7" id="ap">
					<h1 class="titulo-main">Eletrodomésticos</h1>
					<img class="icone"width="100px" height="100px" src="../Loja_Eletronica/img/Microwave_ME3BC_Front_Close_Electrolux-principal.webp" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Micro-ondas de Embutir Electrolux 34l Experience ME3BC</h2>
						<h3 class="titulo-main">2.399,00</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item8" id="ap">
					<h1 class="titulo-main">Vigilância e Segurança</h1>
					<img class="icone"width="100px" height="100px" src="../Loja_Eletronica/img/camera.png" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Console Sony Playstation 5 + Controle Sem fio PS5 DualSense</h2>
						<h3 class="titulo-main">R$ 3.799,99</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>
					</div>
				</div></a>
				<a href=""><div class="caixa" id="item9" id="ap">
					<h1 class="titulo-main">Iluminação</h1>
					<img class="icone"width="100px" height="100px" src="../Loja_Eletronica/img/lanterna_holofote_super_potente_led_30w_recarregavel_2849_1_20200905082201.webp" alt="">
					<div class="ex-topico">
						<h2 class="active" style="margin-top: 5px;">Console Sony Playstation 5 + Controle Sem fio PS5 DualSense</h2>
						<h3 class="titulo-main">R$ 3.799,99</h3>
						<h2 class="active" style="margin-top: 5px;">À vista no PIX com até 5% OFF</h2>
					</div>
				</div></a>
			</div>
		<div>
		</main>
		<footer>
			<div class="footer-coluna">
				<div class="navigation-footer-curto">
					<h1 class="titulo-footer">Colaboradores:</h1>
				</div>
				<ul class="navigation-footer">
					<li class="lista-padrao"><a href="index.html" class="conteudo-footer">Lucas Machado</a></li>
					<li class="lista-padrao"><a href="#" class="conteudo-footer">Hermeson Alessandro</a></li>
					<li class="lista-padrao"><a href="#"  class="conteudo-footer">Kalebe Ribeiro</a></li>
					<li class="lista-padrao"><a href="#"  class="conteudo-footer">Pedro Eduardo</a></li>
					<li class="lista-padrao"><a href="#"  class="conteudo-footer">Erika Silva</a></li>
				</ul>
			</div>
			<div class="footer-vertical">
				<div>
					<img width="100px" height="100px" src="..//Inform-tica-Lab/img/github.png" alt="">
					<img width="100px" height="100px" src="../Inform-tica-Lab/img/git.png" alt="">
					<img width="100px" height="100px" src="../Inform-tica-Lab/img/vs_code.png" alt="">
				</div>
			</div>
		</footer>
    </body>
</html>