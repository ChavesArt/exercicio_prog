<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
</head>
<body>
    <form action="cadastrar.php" method="post">
    Nome:<input type="text" name="nome"><br>
    Senha:<input type="password" name="senha"><br>
    <input type="hidden" name="nivel" value="2">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>