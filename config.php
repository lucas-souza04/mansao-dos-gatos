<?php
$hostname = 'localhost';
$db = 'ong';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
