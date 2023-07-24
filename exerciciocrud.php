<?php

define("MYSQL_HOST","localhost");
define("MYSQL_USER","user_crud");
define("MYSQL_PASSWORD","12345678");
define("MYSQL_DB_NAME","aula_phd_crud");

try {
    $pdo = new PDO('mysql:host='.MYSQL_HOST.';db-name='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD);
    echo "Teste Ok";
} catch (PDOException $e){
    echo 'Erro ao conectar ao banco de dados:'.$e->getMessage();
}
