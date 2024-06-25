<?php
require_once "conexao.php";
$conexao = conectar();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$hash = password_hash($senha,PASSWORD_ARGON2I);

$sql = "INSERT INTO usuario (senha,nome) VALUES ('$hash','$nome')";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: login.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}


?>