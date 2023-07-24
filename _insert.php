<?php
session_start();

include("./conexao.php");

$produtos = filter_var($_POST["produto"],FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = filter_var($_POST["categoria"], FILTER_SANITIZE_SPECIAL_CHARS);
$quantidade = filter_var($_POST["quantidade"],FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_var($_POST["preco"],FILTER_VALIDATE_INT);
$imagem = filter_var($_POST["imagem"],FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO produtos (nomeproduto, categoriaproduto, qtdeproduto, precoproduto,imgproduto)" 
    ."VALUES (:produtos,:categoria,:quantidade,:preco,:imagem)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':produtos',$produtos);
$stmt->bindParam(':categoria',$categoria);
$stmt->bindParam(':quantidade',$quantidade);
$stmt->bindParam(':preco',$preco);
$stmt->bindParam(':imagem',$imagem);

if ($stmt->execute() && $stmt->rowCount() > 0) {   
    $_SESSION['mensagem'] = "Inserção Realizada com Sucesso!";
    header("Location: frmselectall.php");
} else {
    $_SESSION['mensagem'] = "Erro ao inserir o produto:";
    header("Location: frmselectall.php");
}

unset($pdo);
