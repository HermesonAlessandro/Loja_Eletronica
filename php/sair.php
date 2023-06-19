<?php
session_start();
unset($_SESSION['cpf']);
header("location: login.php");
?>