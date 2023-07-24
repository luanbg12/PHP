<?php
require_once("conexao.php");


$sql = "SELECT * FROM produtos ";
$result = $pdo->query($sql);
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Produtos - Geral</title>

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
</head>

<body>

  <h1>Produtos - Geral</h1>
  <button class="btn btn-primary">Novo Produto</button>
  <hr>
  <table class="table table-striped ">
    <tr>
      <th>Id Produto</th>
      <th>Nome Produto</th>
      <th>Categoria</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Imagem</th>
      <th></th>
    </tr>
    <?php foreach ($rows as $produto) { ?>
    <tr>
      <td><?= $produto["idproduto"] ?></td>
      <td><?= $produto["nomeproduto"] ?></td>
      <td><?= $produto["categoriaproduto"] ?></td>
      <td><?= $produto["qtdeproduto"] ?></td>
      <td><?= $produto["precoproduto"] ?></td>
      <td><?= $produto["imgproduto"] ?></td>
      <td>
        <button class="btn btn-warning"><i class="bi bi-pencil"></i></button>
        <button class="btn btn-danger"><i class=" bi bi-trash3-fill"></i></button>
      </td>
    </tr>
    <?php } ?>

  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
