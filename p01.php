<?php 
$txt = 'SR';
$txt1 = 'Fernando';
$txt2 = "Bem Vindo";

echo 'Oi'. $txt.''.$txt1.''.$txt2;
echo "Oi  $txt txt1 $txt2";


$tipoString = "Tipo String";
$tipoNumero = 10;
$tipoNumeroDecimal = 10.12;
$tipoBooleano = true;
$tipoArray = [1,2,3,4,5];

var_dump($tipoString);
echo "<br>";
var_dump($tipoNumero);
echo "<br>";
var_dump($tipoNumeroDecimal);
echo "<br>";
var_dump($tipoBooleano);
echo "<br>";
var_dump($tipoArray);
