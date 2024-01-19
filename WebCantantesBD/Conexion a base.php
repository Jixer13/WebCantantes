<?php
$conexion= new mysqli('localhost','root','1234','prueba_datos');

if($conexion->connetion_errno) {
    die('A tu casa'); // Para cerrar la pagina web //
    else {
        echo "Todo Ok, estás conectado. <br> ";


        $sql="SELECT * FROM Usuarios WHERE Apellido='Perez'";
        $resultado=$conexion->query($sql);
        if($resultado->num_rows) {
            while($fila=$resultado->fetch_assoc()) {
                echo $fila['id'].' '.$fila['Nombre'].' '.$fila['Apellido']."<br>";
            }

            $sq12="INSERT INTO Usuarios (Id,Nombre,Apellido,Password,Email) VALUES (null,'Lucia','Pérez','1234','luci@gmail.com')";
            $conexion->query($sq12);
            if($conexion->affected_rows>=1){
                echo 'Filas insertadas: '.$conexion->affected_rows;
            }

        }

    }

}
?>