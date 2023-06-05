<?php
include("php/conexao.php");
?>
<!DOCTYPE html>
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
				<li><a href=""  class="active">Login</a></li>
				<li><a href=""  class="active">Cadastrar</a></li>
				<li><a href=""  class="active">Sobre nos</a></li>
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
				<?php
					for($contador = 0; $contador <= 8; $contador++):
						$tipo = array("gamer","eletrodomesticos","vigESec","celulares","tablets","tvs", "hardware","iluminacao",
						"notebooks");	
						echo"<a href='../Loja_Eletronica/html/".$tipo[$contador].".html'>";
						$sql = "SELECT * FROM produto WHERE tipo ='".$tipo[$contador]."' AND desconto='30'";
						$result = $mysqli->query($sql);
						$produto_data = mysqli_fetch_assoc($result);					
						echo "<div class='caixa' id='item".($contador + 1)."' id='ide'>";
						echo "<h1 class='titulo-main'>".$tipo[$contador]."</h1>";
						echo "<img class='icone' width='85px' height='108px' src='../Loja_Eletronica/img/".$produto_data['imagem']."' alt=''>";
						echo "<div class='ex-topico'/>
							<h2 class='active' style='margin-top: 5px;'>".$produto_data['nome']."</h2>
							<h2 class='active' style='margin-top: 5px; text-transform: capitalize;'>".$produto_data['descricao']."</h2>";
								if($produto_data['desconto'] != null):
									echo "<h3 class='titulo-main' style='text-decoration:line-through;'>R$ ".$produto_data['preco']."</h3>";
									echo "<h3 class='titulo-main'>R$ ".$produto_data['preco'] - ($produto_data['preco'] * ($produto_data['desconto'] / 100))."</h3>";
									echo "<h2 class='active' style='margin-top: 5px;'>À vista no PIX com até ".$produto_data['desconto']." % OFF</h2>";
								else:	
									echo "<h3 class='titulo-main'>R$ ".$produto_data['preco']."</h3>";
								endif;
						echo "</div>
						</div></a>";
					endfor;
				?>
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