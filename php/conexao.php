<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

//Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificar conexão
if ($conn->connect_error) {
    die("Falha na Conexão: " . $conn->connect_error);
}
?>