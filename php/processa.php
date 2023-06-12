<?php
    $cpf = addlashes($_POST['cpf']);
    $nome = addlashes($_POST['nome']); 
    $numro = addlashes($_POST['telefone']);
    $email = addlashes($_POST['email']); 
    $senha = addlashes($_POST['senha']);
    $confSenha = addcslashes($_POST['confirmarSenha'])
    $sexo = addlashes($_POST['sexo']);
    $endereco = addlashes($_POST['endereco']);

    require_once "usuario.php";
    $u = new Usuario;
    if(!empty($cpf) && !empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && 
    !empty($sexo) && !empty($endereco)){
        $u->conectar("mathpbd","localhost", "root", "");
        if($u-msgErro == ""){
            if($senha == $confSenha){
                if(u$->cadastrar($nome, $pemail, $senha, $sexo, $serie, $turma)){
                    echo "Cadastrado com sucesso!"
                }
                else(
                    echo "Email já cadastrado!";
                )
            }
            else{
                echo '"Senha" e "Confirmar Senha" não correspondem!';
            }
        }
        else{
            echo "Erro: ",$u->msErro;
        }
    }
    else{
        echo "Preencha todos os campos!";
    }
?>