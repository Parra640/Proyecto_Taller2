<?php 
$id_mascota = $_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");
$sql = "SELECT * FROM mascota_adoptar WHERE id=$id_mascota ";
$resultado = $pdo->query($sql);
$fila_mascota = $resultado -> fetch();

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

<h1><?php echo($fila_mascota["nombre"]) ?></h1>
<div>
    <div>
        <img src="mascotas_adopcion/mascota_id_<?php echo($fila_mascota["id"]) ?>.jpg" alt=""> 
    </div>
    <div>
        <div>
            <span>Edad: </span><span> <?php echo($fila_mascota['edad']); ?> </span>
        </div>
        <div>
            <span>Sexo: </span><span> <?php echo($fila_mascota['sexo']); ?> </span>
        </div>
        <div>
            <span>Tamaño: </span><span> <?php echo($fila_mascota['tamaño']); ?> </span>
        </div>
        <div>
            <span>Descripcion: </span><span> <?php echo($fila_mascota['descripcion']); ?> </span>
        </div>
    </div>
</div>

<div>
    <button id="boton_adoptar">Deseo Adoptar</button>
</div>

<div class="ventana_fondo" id="fondo_div">
    <div class="popup" id="popup">
        
    <?php if(isset($_SESSION["id"])){ ?>
        <h3>Gracias por elegirme!</h3>
        <p>En pocos momentos mis cuidadores se contactaran contigo <br> para realizar el procedimiento de adpocion.</p>
        <span id="span">
            <a href="adoptar.php" id="cerrar-ventana" class="cerrar-ventana">OK</a>
        </span>

    <?php }else{ ?>
        <h3>Ups!</h3>
        <p>Para poder adoptarme y acceder a otras funciones debes iniciar sesión</p>
        <span id="span">
            <a href="iniciar_sesion.php" id="cerrar-ventana" class="cerrar-ventana">OK</a>
        </span>
    <?php } ?>

    </div>
</div>


<footer>
    <?php include 'partes/Pie.php'?>
</footer>    
<script src="ventana-emergente.js"></script>
</body>
</html>
