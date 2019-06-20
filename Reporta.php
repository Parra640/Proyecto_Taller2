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
    <div >
        <?php 
        if(isset($_SESSION["id"])){ 
            #lo que se ve cuando esta iniciada la sesion 
            echo("
            <div class='reporta-fondo' id='fondo-reporta01'>
                <div class='reporta-texto'>
                        <a href='reportar_formulario.php'>Reporta un animal perdido</a>
                </div>
            </div>
                

                <h2> Animales reportados</h2>
            ");
            include 'animales_reportados.php';
         } else{
            #cuando no esta iniciada la sesion
            echo("
            <div class='reporta-fondo' id='fondo-reporta02'>
                <div class='reporta-texto'>
                        <h1>Para reportar una mascota perdida, primero debes iniciar sesión <a href='iniciar_sesion.php'> aquí </a></h1>
                        <h1>¿No tienes una cuenta aún? Haz clic <a href='crear_cuenta.php'>aquí</a> y sé parte de esta comunidad. </h1>
                </div>
            </div>

            <h2 id='animales-reportados-h1'> Animales reportados</h2>
             

            ");
            include 'animales_reportados.php';
        }
        ?>
    </div>

    <footer>
        <?php include("partes/Pie.php")?>
    </footer>
</body>

</html>