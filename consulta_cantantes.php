<?php
$conn = new mysqli('localhost', 'root', '', 'webcantantes');
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

if (isset($_POST['btnNombre'])) {
    $query = "SELECT Nombre FROM cantantes";
} elseif (isset($_POST['btnCanciones'])) {
    $query = "SELECT canciones FROM cantantes";
} elseif (isset($_POST['btnNacionalidad'])) {
    $query = "SELECT nacionalidad FROM cantantes";
} else {
    $query = "SELECT * FROM cantantes";
}

$result = $conn->query($query);
$cantantes = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();
?>