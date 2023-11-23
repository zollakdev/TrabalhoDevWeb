<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projetodev";
$port = 3306;

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
