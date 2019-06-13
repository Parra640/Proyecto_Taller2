<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
    <title>Iniciar Sesion</title>
</head>

<body id="inicio_sesion">
    <div class="login">
        <img class="logo" src="logotipos/user.png" alt="logotipo petworld">
        <h1>Iniciar Sesion Petworld</h1>
        <form action="verificar_sesion.php" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="u" placeholder="Ingrese su nombre">

            <label for="password">Contraseña</label>
            <input type="password" name="p" placeholder="Ingrese su contraseña ">

            <?php if(!empty($_GET["m"])){
                echo("<p> sesion incorrecta </p>");
            } ?>

            <input type="submit" value="iniciar sesion">
            
        </form>
        <a href="recuperar.php"> ¿Olvidaste tu contraseña?</a>
        <!-- DARLE MAS ESPACIO ENTRE ESTOS DOS ELEMENTOS -->
        <a href="crear_cuenta.php">Aún no tengo una cuenta</a>
    </div>

</body>

</html>