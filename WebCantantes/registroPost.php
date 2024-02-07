<?php
if (
    isset($a["username"]) && !empty($a["username"]) &&
    isset($a["gmail"]) && !empty($a["gmail"]) &&
    isset($a["password"]) && !empty($a["password"])
) {
    header("Location: paginaPrincipal.php");
    exit();
} else {
    echo "Error: Todos los campos son obligatorios y deben tener valores válidos.";
}

?>