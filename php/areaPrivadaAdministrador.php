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
            <h1 id="titulo-espassado">Adicionar Produto</h1>
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
                if(isset($_POST['nome']))
                {
                    $nome = addslashes($_POST['nome']);
                    $tipo = addslashes($_POST['tipo']);
                    $descricao = addslashes($_POST['descricao']);  
                    $preco = addslashes($_POST['preco']);
                    $desconto = addslashes($_POST['desconto']); 
                    $quantidade = addslashes($_POST['quantidade']);
                    $imagem = addslashes($_POST['imagem']);

                    require_once "produto.php";
                    $p = new Produto;
                    if(!empty($nome) && !empty($tipo) && !empty($descricao) && !empty($preco) && !empty($quantidade) && 
                    !empty($imagem)){
                        $p->conectar("power_tech","localhost", "root", "");
                        if($p->msgErro == ""){
                            if($p->cadastrar($nome, $tipo, $descricao, $preco, $desconto, $quantidade, $imagem)){
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
            <div class="tabela">
                <?php
                        ?>
                        <table>
                            <thead>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Descrição</th>
                                <th>Preco</th>
                                <th>Desconto</th>
                                <th>Quantidade</th>
                                <th>Imagem</th>
                            </thead>
                            <tbody>
                                <?php
                                while ($produto_data = mysqli_fetch_assoc($p->dados)){?>
                                    <td><?php $produto_data['id'] ?></td>
                                    <td><?php $produto_data['nome'] ?></td>
                                    <td><?php $produto_data['tipo'] ?></td>
                                    <td><?php $produto_data['descricao'] ?></td>
                                    <td><?php $produto_data['preco'] ?></td>
                                    <td><?php $produto_data['desconto'] ?></td>
                                    <td><?php $produto_data['quantidade'] ?></td>
                                    <td><?php $produto_data['imagem'] ?></td>
                                <?php
                                }
                                ?>
                            </tbody>   
                        </table>
                        <?php              
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

