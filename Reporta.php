<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <?php include("partes/Cabecera.php")?>
    </header>
    
    <?php 
    if(isset($_SESSION["id"])){ 
        #lo que se ve cuando esta iniciada la sesion 
        echo("
            <a href='reportar_formulario.php'>Reporta un animal perdido</a>

            <h2> Animales reportados</h2>
        ");
        include 'animales_reportados.php';
     } else{
        #cuando no esta iniciada la sesion
        echo("
            <h1>Para reportar una mascota perdida, primero debes iniciar sesión <a href='iniciar_sesion.php'> aquí </a></h1>
            <h1>¿No tienes una cuenta aún? Haz clic <a href='crear_cuenta.php'>aquí</a> y sé parte de esta comunidad. </h1>
            <h2> Animales reportados</h2>

        ");
        include 'animales_reportados.php';
    }
    ?>

    <footer>
        <?php include("partes/Pie.php")?>
    </footer>
</body>
</html>