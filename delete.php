<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = $id";

$result = $conn -> query($sql);
$conn -> close();
header("Location: read.php");
exit();
?>