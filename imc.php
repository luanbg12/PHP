<?php

$altura = 1.61;
$peso = 62.50;
$imc = $peso / ($altura * $altura);
$imc = round($imc, 2);

echo "Seu Imc é $imc";

if ($imc < 18.5) {
    echo "Imc $imc - Abaixo do Peso";
} elseif ($imc >=18.5 && $imc <= 24.9){
    echo "Imc $imc - Peso Normal";
} elseif ($imc >= 25.0 && $imc <= 29.9)
    echo "Imc $imc - Pré-obesidade";
    elseif ($imc >= 30.0 && $imc <= 34.9)
    echo "Imc $imc - Obesidade Grau 1";
    elseif (35.0 >= 35.0 && $imc <= 39.9)
    echo "Obesidade Grau 2";

    
