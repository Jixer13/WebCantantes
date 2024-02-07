<?php
$conn = new mysqli('localhost', 'root', '', 'webcantantes');

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: ");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];

    $compr_query = "SELECT Gmail FROM usuarios WHERE Gmail = '$gmail'";
    $resultado = $conn->query($compr_query);

    if ($resultado->num_rows > 0) {
        echo "<script>alert('Error: Ya hay un usuario registrado');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } 
    
    else {

    $passwordc = crypt($password,"anuel");
    
    $sql = "INSERT INTO usuarios (Nombre,Gmail,Password) VALUES ('$username', '$gmail', '$passwordc')";


    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Error al registrar datos: " . $conn->error;
    }

    }
}
?>
