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
                <p class=" paragrafo-comum">Entre na sua conta para ter experiências personalizadas</p> 
                <p>e ver o que você deseja com mais facilmete</p>            
                <h1 class="h1-formulario">Login</h1>
                <form method="POST" class="login-comum"> 
                    <input class="label" type="email" placeholder="Email" name="email">
                    <input class="label" type="password" placeholder="Senha" name="senha">
                    <div class="linha-cadastro">                    
                        <div>
                            <input class="" type="radio" value="cliente" name="tipoUso">
                            <label>Cliente</label>
                        </div>
                        <div>
                            <input class="" type="radio" value="administrador" name="tipoUso">
                            <label>Administrador</label> 
                        </div>
                    </div>
                    <input class="button" type="submit" value="Entrar">
                    <a href="">Ainda não está inscrito? <strong class="link-comum">Cadastre-se!</strong></a>
                </form>
                <p class="paragrafo-comum">Ao continuar o acesso, você concorda com a <p class="destaque">política de privacidade</p></p>
                    <?php
            if(isset($_POST['email']))
            {
            $email = addcslashes($_POST['email']);
            $senha = addcslashes($_POST['senha']);
            $tipoUso = addcslashes($_POST['tipoUso']);

            if(!empty($email) && !empty($senha) && !empty($tipoUso))
            {
                $u->conectar("power_tech","localhost","root","");
                if($u->msgErro == ""){
                    if($u->logar($email,$senha,$tipoUso))
                    {
                        if($tipoUso == "cliente")
                        {
                            header("location: areaPrivadaCliente.php");                    
                        }
                        else
                        {
                            header("location: areaPrivadaAdministrador.php");
                        }
                    }else
                    {
                        ?>
                        <div class="msg-erro">                    
                        "Email e/ou senha incorretos!"
                        </div>
                        <?php
                    }
                }else
                {
                    echo "Erro: ".$u->msgErro;
                }
            }else
            {
                ?>
                <div class="msg-erro">                    
                "Preencha todos os campos"
                </div>
                <?php
            }

        }

    ?>
            </div>
        </div>
    </main>
</body>
</html>