<?php
include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuario (nome, email) VALUE ('$name', '$email')";

        if ($conn->query($sql) === true) {
            echo "<br/>" . "Novo registro criado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br/>" . $conn->error;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="POST" action="create.php">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label> 
        <input type="text" name= "email" id="email" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<br>
<a href="../CRUD/read.php">Ver registro.</a>