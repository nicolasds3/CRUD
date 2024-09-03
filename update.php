<?php
include "db.php";

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST')  {

    $name = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuario SET nome ='$name', email = '$email' WHERE id = '$id'";

    if ($conn->query($sql) === true) {
        echo "<br/>" . "Registro editado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br/>" . $conn->error;
    }

    $conn -> close();
    header("Location: read.php");
    exit();
}

$sql = "SELECT * FROM usuario WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body> 
    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">
        <label for="upd_nome">Nome novo:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>" required>
        <label for="upd_email">Email novo:</label> 
        <input type="text" name= "email" id="email" value="<?php echo $row['email']; ?>" required>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="read.php">Ver novos registros.</a>
</body>
</html>