<?php
#constantes para acessar o do Banco de Dados
#---------------------------------------------------------------------------------------------------------
define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASSWORD", "");
define("MYSQL_DB_NAME", "aula_php_crud");


#A conexão é feita pelo construtor da classe PDO
#---------------------------------------------------------------------------------------------------------
// $pdo = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);



#bloco try - catch (para capturar e tratar erro)
#---------------------------------------------------------------------------------------------------------
try {
  $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
} catch (PDOException $e) {
  echo 'Erro ao conectar com o Banco de Dados: ' . $e->getMessage();
}






# SQL1
#---------------------------------------------------------------------------------------------------------
// $sql = "SELECT * FROM produtos";
// $result = $pdo->query($sql);
// $rows = $result->fetchAll();
// echo "<pre>";
// print_r($rows);
