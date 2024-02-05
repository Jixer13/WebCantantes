<?php
// Hemos creado las variables donde estan las fotos o ajustes que ayudan en el resto del codigo //

$kk = 'https://lastfm.freetls.fastly.net/i/u/ar0/9ea61a703767dc5d75c916d1cb61f149.jpg';
$aa = 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F21%2F2018%2F07%2Fscreen-shot-2018-07-19-at-9-06-23-am.png&w=400&h=532&c=sc&poi=face&q=60';
$kv = 'https://is1-ssl.mzstatic.com/image/thumb/Features115/v4/fe/bb/28/febb28c4-3c9f-4bd5-ee9c-906b729d22bc/pr_source.png/375x375bb.jpg';
$yv = 'https://p16-tm-sg.tiktokmusic.me/img/tos-alisg-i-0000/823221fc5cdd4938b0570d5dde498a6c~c5_750x750.image';
$jz = 'https://dice-i-scdn-co.imgix.net/image/0a7511f2e4213a6bc8eff10ff0e86ee9648fd67c';
$fototamaño = 250;

// Iniciamos las base de datos //
$conn = new mysqli('localhost', 'root', '', 'webcantantes');

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Aqui verificamos comprobamos si hay contenido en el ['btnNombre'], comprobamos el contenido del input "Search" y comprobamos que esta vacio, si no lo esta //
// nos va a crear una variable para guardar la busqueda, despues nos forzara el texto introduccido para evitar problemas de minusculas, si el nombre introduccido //
// coincide con un nombre de la base de datos nos dara la info almacenada y lo guardara en una variable //

if (isset($_POST['btnNombre'])) {
    if (isset($_POST['buscar']) && !empty($_POST['buscar'])) {

        $nombreBuscado = $_POST['buscar'];
        $nombreBuscado= strtoupper($nombreBuscado);
        $query = "SELECT * FROM cantantes WHERE Nombre = '$nombreBuscado'";
        $result = $conn->query($query);

    
        if ($result->num_rows > 0) {
            $cantante = $result->fetch_assoc();
             
            // Al guardar el nombre que se busco anteriormente, nos comprobara si existe y 

            if ($nombreBuscado == "ANUEL") {
                echo '<img src="' . $aa . '" width="' . $fototamaño . '" height="' . $fototamaño . 'px"><br><br>';
            } elseif ($nombreBuscado == "KIDD KEO") {
                echo '<img src="' . $kk . '" width="' . $fototamaño . '" height="' . $fototamaño . 'px"><br><br>';
            } elseif ($nombreBuscado == "KING VON") {
                echo '<img src="' . $kv . '" width="' . $fototamaño . '" height="' . $fototamaño . 'px"><br><br>';
            } elseif ($nombreBuscado == "YOVNGCHIMI") {
                echo '<img src="' . $yv . '" width="' . $fototamaño . '" height="' . $fototamaño . 'px"><br><br>';
            } elseif ($nombreBuscado == "JON Z") {
                echo '<img src="' . $jz . '" width="' . $fototamaño . '" height="' . $fototamaño . 'px"><br><br>';    
            }
        } else {
            echo "<div style='color: #320000d6; background-color: rgba(65, 65, 65, 0.799); width: 43%;'>No se encontraron resultados para el nombre: $nombreBuscado</div><br>";        }
    } else {
        $query = "SELECT Nombre FROM cantantes";
    }

} elseif (isset($_POST['btnCanciones'])) {
    $query = "SELECT Nombre, Canciones FROM cantantes";
} elseif (isset($_POST['btnNacionalidad'])) {
    $query = "SELECT Nombre, Nacionalidad FROM cantantes";
} elseif (isset($_POST['btbiografia'])) {
    $query = "SELECT Nombre, Biografia FROM cantantes";
} elseif (isset($_POST['btAlbumes'])) {
    $query = "SELECT Nombre, Albumes FROM cantantes";
} else {
    $query = "SELECT * FROM cantantes";
}

$result = $conn->query($query);

$cantantes = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link rel="stylesheet" href="pp.css">
</head>

<body>
    <!-- Aquí creamos los botones para poder sacar por pantalla los datos de la base de datos -->
    <h1> Busca a tu cantante</h1>
    <form method="post">
        <input type="text" placeholder="Search" name="buscar" ></input><br><br>
        <button type="submit" name="btnNombre">Mostrar Nombres</button>
        <button type="submit" name="btnCanciones">Mostrar Canciones</button>
        <button type="submit" name="btnNacionalidad">Mostrar Nacionalidades</button>
        <button type="submit" name="btbiografia">Mostrar Biografia</button>
        <button type="submit" name="btAlbumes">Mostrar Albumes</button>
        
    </form>

    <?php if (!empty($cantantes)) : ?>
        <table border="1">
            <tr>
                <?php foreach (array_keys($cantantes[0]) as $column) : ?>
                    <th><?php echo $column; ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($cantantes as $cantante) : ?>
                <tr>
                    <?php foreach ($cantante as $value) : ?>
                        <td><?php echo $value; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p style='color: #320000d6 ; background-color: rgba(62, 65, 65, 0.799) ; width: 43%'>No hay información de cantantes disponible.</p>
    <?php endif; ?>

        
    <br>
    <!-- Boton para cerrar sesión --> 
    <form method="post">
        <button type="submit" formaction="login.php" name="boton1">Cerrar Sesión</button>
    </form>

    
    <h2> Comentarios </h2>
        <form method="post" action="guardar_comentario.php">
        <input id="comentarios" placeholder="Opina sobre la pagina web (Su cometario sera almacenado y publicado)"></input>
        <button type="submit">Enviar Comentario</button>
    </form>
</body>

</html>
