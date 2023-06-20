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
        <div class="perfil">
            <h1><?php   

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
                    $cpf = addlashes($_POST['nome']);
                    $nome = addlashes($_POST['tipo']);
                    $sobrenome = addlashes($_POST['descricao']);  
                    $telefone = addlashes($_POST['preco']);
                    $email = addlashes($_POST['desconto']); 
                    $senha = addlashes($_POST['quantidade']);
                    $confSenha = addcslashes($_POST['imagem']);

                    require_once "produto.php";
                    $u = new Produto;
                    if(!empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($telefone) && !empty($email) && !empty($senha) && 
                    !empty($sexo) && !empty($endereco)){
                        $u->conectar("power_tech","localhost", "root", "");
                        if($u->msgErro == ""){
                            if($senha == $confSenha){
                                if($u->cadastrar($nome, $sobrenome, $telefone, $email, $senha, $sexo, $endereco)){
                                    ?>
                                    <div class="msg-sucesso">                    
                                    "Cadastrado com sucesso!"
                                    </div>
                                    <?php
                                }
                                else{
                                    ?>
                                    <div class="msg-erro">                    
                                    "Email já cadastrado!"
                                    </div>
                                    <?php
                                }
                            }
                            else{
                                ?>
                                <div class="msg-erro">                    
                                "Senha e confirmar senha nao correspondem!"
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


