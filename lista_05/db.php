<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividades_01";
$port = "3306";

$conn = new mysqli(
    $servername, 
    $username, 
    $password, 
    $dbname, 
    $port
);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}