<?php

$md5 ="";
$sha1 = "";
$texto ="";
$base64 = "";
$base64decodificado = "";
$senhasegura = "";

if (isset($_POST['texto'])){
    $texto = $_POST['texto'];
    $md5 = md5($texto);
    $sha1 = sha1($texto);
    $base64 = base64_decode($texto);
    $base64decodificado = base64_decode($base64);
    $senhasegura = password_hash($texto, PASSWORD_DEFAULT);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criptografia - PHP</h1>
    <hr>
    <form action="" method="POST">
    Digite um dado para ser Critografado
    <input type="text" name="texto">
    <input type="submit" value="criptografar">
    </form>
    <br>
    Texto original: <?= $texto?><br>
    <hr>
    Texto Criptografado : <br>
    <hr>
    <strong>MD5:</strong> <?= $md5?><br><br>
    <strong>SHA1</strong> <?= $sha1?><br><br>
    <strong>Codificado Base 64</strong><br><br>
    <hr>
    <h3>Método password hash</h3>
    <strong>Codificada:</strong> <?= $senhasegura ?> (Codificada - mão unica)<br><br>     
</body>
</html>
