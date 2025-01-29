<?php 

try{
$username = 'root';
$password = '';
$dbname = 'agenda_online';
$host = 'localhost';

$conexao = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
} catch(PDOException $e){
    echo 'Erro na conexão com o banco de dados: ' . $e;
}
