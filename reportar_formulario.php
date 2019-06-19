<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportar una mascota</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <?php include("partes/Cabecera.php") ?>
    </header>

    <form action="procesar_reporte.php" method="POST" enctype="multipart/form-data"> 

        <div>
            <label for="nombre"> Nombre: </label>
            <input type="text"  required name="nombre">
        </div>
        <div>
            <select name="tipo" id="tipo">
                <option>Tipo</option>
                <option value="gato">gato</option>
                <option value="perro">perro</option>
            </select>
        </div>
        <div>
            <select name="sexo" id="sexo">
                <option>Sexo</option>
                <option value="macho">Macho</option>
                <option value="hembra">Hembra</option>
            </select>
        </div>
        <div>
            <label for="raza"> Raza: </label>
            <input type="text" required name="raza">
        </div>
        <div>
            <label for="visto"> Ultima vez visto: </label>
            <input type="text" required name="visto">
        </div>
        <div>
            <label for="imagen"> Inserte foto: </label>
            <input type="file" required name="foto">
        </div>

        <input type="submit" value="REPORTAR">
    </form>

    <footer>
        <?php include("partes/Pie.php") ?>
    </footer>
    
</body>
</html>