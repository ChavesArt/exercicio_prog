<?php


$senha = "minhasenha";
echo "Minha senha:$senha <br> <hr>";

echo"Não recomendados <br>";
//MD5
$hash = md5($senha);
echo "<b>MD5:</b>". $hash;

//SHA1
$hash = sha1($senha);

echo "<br><b>SHA1:</b> ". $hash;
echo"<hr>";

echo "Recomendados <br>";

//Crypt

$hash = crypt($senha,'iffar');

echo "<b>Crypt:</b> ". $hash;

//password_hash
$hash = password_hash($senha,PASSWORD_ARGON2I);
echo "<br><b>Password_hash:</b> ". $hash;
echo "<hr>";

?>