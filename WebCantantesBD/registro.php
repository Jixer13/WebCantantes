<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registrocss.css">
    <title>Registro</title>
</head>
<body>
<form method="POST" action="registrophp.php">
        <div>
            <h2>Registro</h2>
            
            <h3>Nombre de Usuario</h3>
            <input type="text" name="username" placeholder="Nombre de Usuario" required>

            <h3>Correo</h3>
            <input type="email" name="gmail" placeholder="Correo" required>

            <h3>Contraseña</h3>
            <input type="password" name="password" placeholder="Contraseña" required>

            <input type="submit" value="Registrarse" class="Redirect">
        </div>
    </form>
</body>
</html>



