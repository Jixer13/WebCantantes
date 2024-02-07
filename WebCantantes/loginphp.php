<?php

$conn = new mysqli('localhost', 'root', '', 'webcantantes');



if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $passwordc = crypt($password,"anuel");

    $sql = "SELECT * FROM usuarios WHERE Nombre = '$username' AND Password = '$passwordc'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: paginaprincipal.php");
        exit();  
    } else {
        
        echo "<script>alert('Error: Nombre de usuario o contraseña incorrectos');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
}

?>