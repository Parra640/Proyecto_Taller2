<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adopción de mascotas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <?php include("partes/Cabecera.php")?>
    </header>
    <h1 class="adopta-titulo">Escoge a tu tipo de mascota preferida</h1>

    <div id="adopcion">
    <div id="perro">
    <a href="adoptar_perros.php"><img src="imagenes/perro.jpg" alt="Imagen de perro" class="imga"></a>
    </div>
    <div id="gato">
    <a href="adoptar_gatos.php"><img src="imagenes/gato.jpg" alt="Imagen de gato" class="imga"></a>
    </div>
    </div>
    
    <footer>
        <?php include("partes/Pie.php")?>
    </footer>
</body>
</html>