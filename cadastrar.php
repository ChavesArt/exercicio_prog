<?php
require_once "conexao.php";
$conexao = conectar();

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$hash = password_hash($senha,PASSWORD_ARGON2I);

$sql = "INSERT INTO usuario (senha,nome,nivel) VALUES ('$hash','$nome','$nivel')";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: login.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}


?>