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
    if(!empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($telefone) && !empty($email) && !empty($senha) && 
    !empty($sexo) && !empty($endereco)){
        $u->conectar("power_tech","localhost", "root", "");
        if($u->msgErro == ""){
            if($senha == $confSenha){
                if($u->cadastrar($nome, $sobrenome, $telefone, $email, $senha, $sexo, $endereco)){
                    ?>
                    <div class="msg-boa">                    
                    "Cadastrado com sucesso!"
                    </div>
                    <?php
                }
                else(
                    ?>
                    <div class="msg-erro">                    
                    "Email já cadastrado!"
                    </div>
                    <?php
                )
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