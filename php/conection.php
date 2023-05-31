<?php
$hostname = "localhost";
$database = "power_tech";
$usuario = "root";
$senha = ""

$mysqli = new mysqli($hostname, $usuario, $senha, $database);
if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}
?>