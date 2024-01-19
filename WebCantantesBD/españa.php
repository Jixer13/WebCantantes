<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>ES</title>
</head>
<style>
body {
    font-family:Verdana;
    text-align: center;
    margin: 20px;
    background-color: #feffca;
}

h1 {
    color: #333;
}

a {
    text-decoration: none;
    color: #3498db;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #e74c3c;
}

.image-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin: 20px 0;
}

.artista {
    text-align: center;
}

img {
    width: 200px; 
    border-radius: 10px; 
    margin: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    

}

img:hover {
    transform: scale(1.1); 
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);

}

p {
    margin-top: 5px;
}
    </style>
<body>

    <h1>Selección de Artistas Españoles</h1><br>
<b style="color: grey">
    <div class="image-container">
        <div class="artista">
            <a href="kiddkeo.php"><img src="kiddkeo.jpg" alt="Kidd Keo"></a>
            <p>Kidd Keo</p>
        </div>

        <div class="artista">
            <a href="eljincho.php"><img src="eljincho.jpg" alt="El Jincho"></a>
            <p>El Jincho</p>
        </div>

        <div class="artista">
            <a href="elpatron970.php"><img src="elpatron970.jpg" alt="El Patron 970"></a>
            <p>El Patron 970</p>
        </div>
    </div>

    <div class="image-container">
        <div class="artista">
            <a href="omar.php"><img src="omar.jpeg" alt="Omar Montes"></a>
            <p>Omar Montes</p>
        </div>

        <div class="artista">
            <a href="jhayco.php"><img src="jhaycofoto.jpg" alt="Jhay Cortez"></a>
            <p>Jhay Cortez</p>
        </div>

        <div class="artista">
            <a href="yovng.php"><img src="yovngfoto.jpg" alt="Yovngchimi"></a>
            <p>Yovngchimi</p>
        </div>
    </div>
</b>

</body>
</html>
