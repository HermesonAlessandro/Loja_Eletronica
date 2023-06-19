<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
	<link rel="stylesheet"	type="text/css" href="../css/geral.css">
	<link rel="stylesheet"	type="text/css" href="../css/meio.css">
</head>
<body>
    <header class="cabecalho">
        <a href="index.html" class="logo">Power Tech</a>
        <div class="search-box">
            <input tupy="text" name="pesquisa" class="search-txt" placeholder="Pesquisar"/>
            <a href="#" class="search-blt">
                <img src="../img//loupe.png" alt="Lupa" height="20px" width="20px">
            </a>
        </div>
        <ul class="navigation">
            <li><a href="" class="active">Incio</a></li>
            <li><a href=""  class="active">Login</a></li>
            <li><a href=""  class="active">Cadastrar</a></li>
            <li><a href=""  class="active">Sobre nos</a></li>
            <li class="icon"><a href=""><img src="../img/simple-icon.png" width="119px" height="157px"></a></li>
        </ul>
    </header>
    <main>
        <div class="credencial"> 
                <p class=" paragrafo-comum">Crie sua conta na sua conta para ter experiências personalizadas</p> 
                <p>e ver o que você deseja com mais facilmete</p>            
                <h1 class="h1-formulario">Cadastro</h1>
                <form method="POST" class="cadastro-comum"> 
                    <input class="label" type="text" placeholder="cpf(sem traços ou pontos" name="cpf">
                    <div class="linha-cadastro">
                        <input class="label" type="text" placeholder="nome" name="nome">
                        <input class="label" type="text" placeholder="sobrenome" name="sobrenome">
                    </div>
                    <input class="label" type="number" placeholder="+55 (99) 99999-9999" name="telefone">
                    <input class="label" type="text" placeholder="email" name="email">
                    <input class="label" type="password" placeholder="senha" name="senha">
                    <input class="label" type="password" placeholder="confirmar senha" name="confirmarSenha">
                    <div class="linha-cadastro">                    
                        <div>
                            <input class="" type="radio" value="m" name="sexo">
                            <label>Masculino</label>
                        </div>
                        <div>
                            <input class="" type="radio" value="f" name="sexo">
                            <label>Feminino</label> 
                        </div>
                        <div>
                            <input class="" type="radio" value="" name="sexo">
                            <label>Ocultar</label> 
                        </div>
                    </div>
                    <input class="label" type="endereço" placeholder="endereço" name="endereco">        
                    <input class="button" type="submit" value="Cadastrar"> 
                    <a href="">Ja está cadastrado? <strong class="link-comum">Faça login</strong></a>
                </form>
                <p class="paragrafo-comum">Ao continuar o acesso, você concorda com a <p class="destaque">política de privacidade</p>
                <?php
                    $cpf = addlashes($_POST['cpf']);
                    $nome = addlashes($_POST['nome']);
                    $sobrenome = addlashes($_POST['sobrenome']);  
                    $telefone = addlashes($_POST['telefone']);
                    $email = addlashes($_POST['email']); 
                    $senha = addlashes($_POST['senha']);
                    $confSenha = addcslashes($_POST['confirmarSenha']);
                    $sexo = addlashes($_POST['sexo']);
                    $endereco = addlashes($_POST['endereco']);

                    require_once "usuario.php";
                    $u = new Usuario;
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
        </div>  
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
                <img width="100px" height="100px" src="../img/vs_code.png" alt="">
                <img width="100px" height="100px" src="../img/git.png" alt="">
                <img width="100px" height="100px" src="../img/github.png" alt="">
            </div>
        </div>
    </footer>
</body>
</html>