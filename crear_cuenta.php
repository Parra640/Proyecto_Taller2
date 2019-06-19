<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilos.css" rel="stylesheet">
    <title>PetWorld-Registrate</title>
</head>

<body id="registro_usuario">

    <div class="registrar">

        <h1>crear cuenta en PetWorld</h1>

        <form action="registrar_usuario.php" method="post">
            <label for="nombres">Nombres</label>
            <input type="text" name="nb" placeholder="Ingrese sus nombres">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="ap" placeholder="Ingrese su apellido">

            <label for="Fnacimiento"> Fecha de nacimiento</label>
            <input type="date" name="fe" placeholder="Fecha de nacimiento">

            <label for="email">E-mail</label>
            <input type="text" name="co" placeholder="ejemplo@abc.com">

            <label for="password">Ingrese su contraseña</label>
            <input type="password" name="p1" placeholder="Ingrese su contaseña ">

            <label for="password1">Confirme su contraseña</label>
            <input type="password" name="p2" placeholder="Confirme su contraseña">

            <label for="number">Numero telefonico</label>
            <input type="numero" name="nu" placeholder="numero telefónico" size="9">

            <?php if(!empty($_GET["m"])){
                echo("<p> *contraseñas no coinciden </p>");
            } ?>

            <input id="crear" type="submit" value="Crear cuenta">
        </form>


    </div>



</body>

</html>