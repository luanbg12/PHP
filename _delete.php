<?php
session_start();

include('./conexao.php');

$id = $_POST['id'];
$sql = "DELETE FROM produtos WHERE idproduto = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute() && $stmt->rowCount() > 0) {
    $_SESSION['mensagem'] = "Inserção realizada com sucesso:";
    header("Location: frmselectall.php");
} else {
    $_SESSION['mensagem'] = "Erro ao excluir o produto:";
    header("Location: frmselectall.php");
}
unset($pdo);
