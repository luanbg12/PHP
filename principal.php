<?php
session_start();
if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
    $email = $_SESSION['login'];
    echo "<h1> TELA PRINCIPAL PHP</h1>";

echo "<br>";
echo "Ola ". $email;
echo "<br> <a href='login.php'>Logoff</a>";
} else {
    header("Location: login.php");
}

