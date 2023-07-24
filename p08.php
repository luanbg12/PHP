<?php
$brasil = [
    "SP" => ["São Paulo","Mogi das Cruzes","Suzano"],
    "PR" => ["Curitiba","Matinhos","Antonina"],
    "RJ" => ["Rio de Janeiro","Rio das Ostras"],
    "ES" => ["Vitoria","Cachoeira do Itapemerim"],
    "SC" => ["Joinville","Brusque","Mafra", "Jurere", "Camboriu"],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($brasil as $estados => $cidades) { ?>
        <li>
    <?=$estados ?><br>
    <ol>
    <?php foreach ($cidades as $cidade) { ?>
        <li>
        <?= $cidade ?> </li>
        <?php }; ?>
    </ol>
    <?php }; ?>
    </ul>
</body>
</html>
