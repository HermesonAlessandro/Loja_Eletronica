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
                        header("location: areaPrivadaAdministrador.php")
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