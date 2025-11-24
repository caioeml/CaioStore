<?php
require "conexao.php";

$nome   = $_POST["nome"];
$email  = $_POST["email"];
$senha  = $_POST["senha"];
$conf   = $_POST["confirmar"];

if ($senha !== $conf) {
    echo "<script>alert('As senhas não conferem!'); history.back();</script>";
    exit;
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Verificar se e-mail já existe
$sqlCheck = $con->prepare("SELECT id FROM users WHERE email = ?");
$sqlCheck->bind_param("s", $email);
$sqlCheck->execute();
$sqlCheck->store_result();

if ($sqlCheck->num_rows > 0) {
    echo "<script>alert('Esse e-mail já está registrado.'); history.back();</script>";
    exit;
}

// Inserir no banco
$sql = $con->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
$sql->bind_param("sss", $nome, $email, $senhaHash);

if ($sql->execute()) {
    echo "<script>alert('Conta criada com sucesso! Faça login.'); window.location='login.php';</script>";
} else {
    echo "Erro ao registrar: " . $sql->error;
}
