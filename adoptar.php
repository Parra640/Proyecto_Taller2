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
    
    <?php 
    if(isset($_SESSION["id"])){ 
        #lo que se ve cuando esta iniciada la sesion 
        
    
     } else{
        #cuando no esta iniciada la sesion
        echo("
            <h1>Para adoptar a una mascota, primero debes iniciar sesion <a href='iniciar_sesion.php'> aqui </a></h1>
            <h1>¿No tienes una cuenta aún? presiona <a href='crear_cuenta.php'>aqui</a> y se parte de esta comunidad. </h1>
        
        ");
    }
    ?>

    <footer>
        <?php include("partes/Pie.php")?>
    </footer>
</body>
</html>