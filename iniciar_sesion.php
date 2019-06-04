<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
    <div class="login">
        <img class="logo" src="logotipos/user.png" alt="logotipo petworld">
        <h1>Inicia Sesion</h1>
        <form action="post">
            <label for="usuario">usuario</label>
            <input type="text" name="u" placeholder="ingrese su nombre">

            <label for="password">contraseña</label>
            <input type="password" name="p" placeholder="ingrese su contraseña ">

            <input type="submit" value="iniciar sesion">
            <a href="recuperar.php"> olvidaste tu contraseña?</a>

        </form>

    </div>

</body>

</html>