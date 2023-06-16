<?php
    session_start();
    if(!isset($_SESSION['cpf']))
    {
        header("location: login.php");
        exit;
    }
?>
<a href="sair.php">Sair</a>
