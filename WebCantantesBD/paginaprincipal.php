<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" type="text/css" href="paginaPrincipalcss.css">
</head>
<body>

    <?php
    include 'consulta_cantantes.php';
    ?>

    <form method="post" action="consulta_cantantes.php">
        <button type="submit" name="btnNombre">Mostrar Nombres</button>
        <button type="submit" name="btnCanciones">Mostrar Canciones</button>
        <button type="submit" name="btnNacionalidad">Mostrar Nacionalidades</button>
    </form>

    <?php if (!empty($cantantes)): ?>
        <table border="1">
            <tr>
                <?php foreach (array_keys($cantantes[0]) as $column): ?>
                    <th><?php echo $column; ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($cantantes as $cantante): ?>
                <tr>
                    <?php foreach ($cantante as $value): ?>
                        <td><?php echo $value; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hay información de cantantes disponible.</p>
    <?php endif; ?>

    <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
    
</body>
</html>
