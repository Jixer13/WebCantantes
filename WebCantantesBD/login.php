<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" href="logincss1.css">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicia sesión 🎵</title>
</head>

<body>
<form method="POST" action="loginphp.php">
  <div>
    <h2>Login</h2>
    <h3> Nombre:</h3>
    <input type="text" placeholder="Nombre" name="username" required>
    <h3> Contraseña:</h3>
    <input type="password" placeholder="Contraseña" name="password" required>
    <br><br>
      <h5>Si no tienes cuenta, puedes registrarte <a href="registro.php">aquí</a>  </h5>
      <input type="submit" value="Confirmar">
  </div>
</body>

</html>