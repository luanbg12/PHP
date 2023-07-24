<?php

include("./conexao.php");
session_start();

$erro = null;

if (!isset($_GET['id'])){
    $id = null;
} else {
    $id = $_GET['id'];
};

$sql = "SELECT* FROM produtos WHERE idproduto =:id";
$stmt = $pdo->prepare($sql);
$stmt -> bindParam(':id',$id);
$stmt->execute();

if ($stmt->rowCount() > 0){
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);


$id = $produto["idproduto"];
$nome = $produto["nomeproduto"];
$categoria = $produto["categoriaproduto"];  
$quantidade = $produto["qtdeproduto"];
$preco = $produto["precoproduto"];
$imagem = $produto["imgproduto"];

$btnestado = null;
} else{

    $erro = "Produto não encontrado";


$id = null;
$nome = null;
$categoria = null;
$quantidade = null;
$preco = null;
$imagem = null;

$btnestado = "disabled";
}

unset($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div>
        <h1 class="bg-warning">
            <?= $erro ?>
        </h1>
    </div>
    <div class="container">
        <div class="row offset-md-2">
            <h2>ALTERAR DADOS<h2>
                <form action="_update.php" method="post" method="post" class=>
                    <input type="hidden" name="id" value="<?$id?>">
                    <label for="produto" class="col-sm-8 col-form-label">Produto
                        <input type="text" name="nome" class="form-control" value="<?= $nome ?>">
                    </label><br>
                    <label for="categoria" class="col-sm-8 col-form-control-label">Categoria
                        <input type="text" name="categoria" class="form-control"value="<?= $categoria ?>">
                    </label><br>
                    <label for="quantidade" class="col-sm-8 col-form-control-label">Quantidade
                        <input type="text" name="quantidade" class="form-control"value="<?= $quantidade ?>">
                    </label><br>
                    <label for="preco" class="col-sm-8 col-form control-label">Preço
                        <input type="text" name="preco" class="form-control" value="<?= $preco?>">
                    </label><br>
                    <label for="imagem" class="col-sm-8 col-form-label">Imagem
                        <input type="text" name="imagem" class="form-control" value="<?= $imagem?>">
                    </label><br>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-sucess mb-3"<?= $btnestado ?>>ATUALIZAR</button>
                    </div>

</form>
<a href="frmSelectAll.php">Voltar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
