<?php
$host   = "localhost";   // ou 127.0.0.1
$usuario = "root";       // usuário do MySQL
$senha  = "admin";
$banco  = "pintostore";

$con = new mysqli($host, $usuario, $senha, $banco);

if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
}
?>
