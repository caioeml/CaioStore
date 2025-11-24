<?php
session_start();
require "conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = $con->prepare("SELECT id, nome, senha FROM users WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($senha, $user["senha"])) {
        $_SESSION["user_id"]   = $user["id"];
        $_SESSION["user_nome"] = $user["nome"];

        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Senha incorreta!'); history.back();</script>";
        exit;
    }
} else {
    echo "<script>alert('E-mail não encontrado!'); history.back();</script>";
    exit;
}
