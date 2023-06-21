<?php
    session_start();
    if(!isset($_SESSION['cpf']))
    {
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
	<link rel="stylesheet"	type="text/css" href="../css/geral.css">
	<link rel="stylesheet"	type="text/css" href="../css/meio.css">
</head>
<body>
    <header class="cabecalho">
        <a href="index.html" class="logo">Power Tech</a>
        <div class="search-box">
            <input tupy="text" name="pesquisa" class="search-txt" placeholder="Pesquisar"/>
        </div>
        <ul class="navigation">
            <li><a href="" class="active">Incio</a></li>
            <li><a href="htlm/login.html"  class="active">Login</a></li>
            <li><a href="htlm/cadastro.html"  class="active">Cadastrar</a></li>
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
    </main>
    <footer>
    </footer>


</body>
</html>


