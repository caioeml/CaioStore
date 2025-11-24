<?php
echo "<h2>Testando conexão com MySQL...</h2>";

$host = "127.0.0.1";
$usuario = "root";  // ou o usuário que você criou
$senha = "admin";  
$banco = "pintostore"; // ou outro nome de banco que você criou

$con = new mysqli($host, $usuario, $senha, $banco);

if ($con->connect_errno) {
    echo "<p style='color:red;'>Erro ao conectar: " . $con->connect_error . "</p>";
} else {
    echo "<p style='color:green;'>Conexão bem-sucedida! 🎉</p>";
}

?>
