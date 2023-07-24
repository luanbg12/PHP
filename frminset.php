<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row offset-md-2">
            <h2>INSERIR DADOS<h2>
                <form action="_insert.php" method="post">
                    <label for="produto" class="col-sm-8 col-form-label">Produto
                        <input type="text" name="produto" class="form-control">
                    </label><br>
                    <label for="categoria" class="col-sm-8 col-form-control-label">Categoria
                        <input type="text" name="categoria" class="form-control">
                    </label><br>
                    <label for="quantidade" class="col-sm-8 col-form-control-label">Quantidade
                        <input type="text" name="quantidade" class="form-control">
                    </label><br>
                    <label for="preco" class="col-sm-8 col-form control-label">Preço
                        <input type="text" name="preco" class="form-control">
                    </label><br>
                    <label for="imagem" class="col-sm-8 col-form-label">Imagem
                        <input type="text" name="imagem" class="form-control">
                    </label><br>
                    <div class="col auto">
                        <button type="submit" class="btn btn-sucess mb-3">Adicionar</button>
                    </div>

</form>
<a href="frmSelectAll.php">Voltar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
