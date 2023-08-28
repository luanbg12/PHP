<?php

$jsonFilePath = "https://www.canalti.com.br/api/pokemons.json";

$jsonContent = file_get_contents ($jsonFilePath);

$data = json_decode($jsonContent,true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center text-danger">Pokemons</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($data['pokemon']as $item){?>
    <div class="col">
    <div class="card h-100">
        <img src="<?= $item['img']?>"class="card-img-top" alt="<?= $item["name"]?>">
        <div class="card-body text-bg-dark">
        <h5 class="card-title text-center text-primary fw-bold">Name: <?= $item["name"]?></h5>
        <p class="card-text text-info">Height: <?= $item["height"]?></p>
        <p class="card-text text-warning">Weight <?= $item["weight"]?></p>
            </div>
        </div>
    </div>
    <?php }?>
    </div>
</body>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
