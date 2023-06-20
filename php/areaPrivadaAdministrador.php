<?php
    session_start();
    if(!isset($_SESSION['cpf']))
    {
        header("location: login.php");
        exit;
    }
    include("conexao.php");
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
        <div class="perfil">
            <h1><?php
                $sql = "SELECT * FROM administrador WHERE cpf='".$_SESSION['cpf']."'";                
                $result = $mysqli->query($sql);
                $adm_data = mysqli_fetch_assoc($result);
                echo $adm_data['nome']." ".$adm_data['sobrenome'];

            ?></h1>
            <img src="../img/usuario.png" class="photo-usuario" width="119px" height="157px">
            <h1>Adcionar Produto</h1>
            <div class="credencial">
                <form method="POST">
                    <input class="label" type="text" placeholder="nome" name="nome">
                    <input class="label" type="text" placeholder="tipo" name="tipo">
                    <input class="label" type="text" placeholder="descricao" name="descricao">
                    <input class="label" type="text" placeholder="preco" name="preco">
                    <input class="label" type="text" placeholder="desconto(Em porcentagem)" name="desconto">
                    <input class="label" type="text" placeholder="quantidade" name="quantidade">
                    <input class="label" type="text" placeholder="imagem(nome)" name="imagem">    
                    <input class="button" type="submit" value="Adcionar"> 
                </form>
                <?php
                if(isset($_POST['email']))
                {
                    $nome = addlashes($_POST['nome']);
                    $tipo = addlashes($_POST['tipo']);
                    $descricao = addlashes($_POST['descricao']);  
                    $preco = addlashes($_POST['preco']);
                    $desconto = addlashes($_POST['desconto']); 
                    $quantidade = addlashes($_POST['quantidade']);
                    $imagem = addcslashes($_POST['imagem']);

                    require_once "produto.php";
                    $p = new Produto;
                    if(!empty($nome) && !empty($tipo) && !empty($descricao) && !empty($preco) && !empty($desconto) && !empty($quantidade) && 
                    !empty($imagem)){
                        $p->conectar("power_tech","localhost", "root", "");
                        if($u->msgErro == ""){
                            if($u->cadastrar($nome, $tipo, $descricao, $preco, $desconto, $quantidade, $imagem)){
                                ?>
                                <div class="msg-sucesso">                    
                                    "Adcionado com sucesso!"
                                </div>
                                <?php
                            }
                            else{
                                    ?>
                                    <div class="msg-erro">                    
                                    "Produto já existente"
                                    </div>
                                    <?php
                                }    
                        }
                        else{
                            echo "Erro: ",$u->msErro;
                        }
                    }
                    else{
                        ?>
                        <div class="msg-erro">                    
                            "Preencha todos os campos!"
                        </div>
                        <?php
                    }
                }
        ?>
            </div>
            <h1>Excluir Produto</h1>
            <div class="credencial">
                <form method="POST">
                    <input class="label" type="text" placeholder="id" name="id">
                    <input class="label" type="text" placeholder="nome" name="nome">
                    <input class="label" type="text" placeholder="tipo" name="tipo">
                    <input class="button" type="submit" value="Adcionar">
                </form> 
            </div>
            <h1>Modificar produto</h1>
            <div class="credencial"> >            
            <form method="POST">
                    <input class="label" type="text" placeholder="nome" name="nome">
                    <input class="label" type="text" placeholder="tipo" name="tipo">
                    <input class="label" type="text" placeholder="descricao" name="descricao">
                    <input class="label" type="text" placeholder="preco" name="preco">
                    <input class="label" type="text" placeholder="desconto(Em porcentagem)" name="desconto">
                    <input class="label" type="text" placeholder="quantidade" name="quantidade">
                    <input class="label" type="text" placeholder="imagem(nome)" name="imagem">    
                    <input class="button" type="submit" value="Adcionar"> 
                </form>
            </div>
            <a href="sair.php" class="opcao">Sair</a>
        </div>
    </main>
    <footer>
    </footer>


</body>
</html>

