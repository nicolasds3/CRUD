<?php

$server_name = "localhost";
$user_name = "root";
$password = "root";
$dbname = "crud_nicolas";

$conn = new mysqli($server_name, $user_name, $password, $dbname);

if($conn -> connect_error) {
    die("Conexão falhou!!!" . $conn -> connect_error);
}

?>