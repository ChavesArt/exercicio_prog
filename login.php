<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
    Nome:<input type="text" name="nome"><br>
    Senha:<input type="password" name="senha"><br>
    <input type="submit" value="Enviar">
    </form>
    
</body>
</html>
<?php
if($_POST){
    require_once 'conexao.php';
    $conexao = conectar();

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario where nome = '$nome'";
    $result = mysqli_query($conexao, $sql);   
   
    if(mysqli_affected_rows($conexao) >=  1 ){
    $usuarios = mysqli_fetch_assoc($result);
            if(password_verify($senha,$usuarios['senha'])){
                echo"Senha confere.";
                
            }else{
                echo"Senha não confere";
            }
    
        }
       

    }
?>