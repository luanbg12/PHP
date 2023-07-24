<?php

$estados = [
    "SP" => "São Paulo",
    "MG" => "Minas Gerais",
    "RJ" => "Rio de Janeiro",
    "ES" => "Espirito Santo",
    "PR" => "Paraná",
    "RS" => "Rio Grande do Sul",
];


foreach ($estados as $sigla => $nome){
    if ($sigla == "PR") {
        echo "$nome - $sigla";
    }
}
