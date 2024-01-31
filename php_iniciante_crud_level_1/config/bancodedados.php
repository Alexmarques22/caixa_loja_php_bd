<?php
// Usado para se conectar no banco de dados
$host = "localhost";
$nome_bd = "php_iniciante_crud_level_1";
$nomedeusuario = "root";
$senha = "";
try {
$con = new PDO("mysql:host={$host};dbname={$nome_bd}", 
$nomedeusuario, $senha);
}
// se o comando PDO der erro vai sair aqui
catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}
?>
