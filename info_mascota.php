<?php 
$id = $_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");
$sql = "SELECT * FROM mascota_adoptar WHERE id=$id ";
$resultado = $pdo->query($sql);
$fila = $resultado -> fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion de mascota</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <?php include 'partes/Cabecera.php'?>
</header>

<h1><?php echo($fila["nombre"]) ?></h1>
<div>
    <div>
        <img src="mascotas_adopcion/mascota_id_<?php echo($fila["id"]) ?>.jpg" alt=""> 
    </div>
    <div>
        <div>
            <span>Edad: </span><span> <?php echo($fila['edad']); ?> </span>
        </div>
        <div>
            <span>Sexo: </span><span> <?php echo($fila['sexo']); ?> </span>
        </div>
        <div>
            <span>Tamaño: </span><span> <?php echo($fila['tamaño']); ?> </span>
        </div>
        <div>
            <span>Descripcion: </span><span> <?php echo($fila['descripcion']); ?> </span>
        </div>
    </div>
</div>

<div>
    <a href="">Deseo Adoptar</a>
    <!-- en proceso -->
</div>

<footer>
    <?php include 'partes/Pie.php'?>
</footer>    

</body>
</html>
