<?php
$conn = new mysqli('localhost', 'root', '', 'webcantantes');

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: ");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];

    $passwordc = crypt($password,"anuel");
    

    $sql = "INSERT INTO usuarios (Nombre,Gmail,Password) VALUES ('$username', '$gmail', '$passwordc')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al registrar datos: " . $conn->error;
    }
}
?>
