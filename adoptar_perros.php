<?php 
$pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");
$todos = "SELECT * FROM mascota_adoptar WHERE tipo='perro' ";
$adulto = "SELECT * FROM mascota_adoptar WHERE tipo='perro' AND edad BETWEEN 16 AND 84";
$cachorrros = "SELECT * FROM mascota_adoptar WHERE tipo='perro' AND edad BETWEEN 0 and 15";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoptar Perros</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <?php include 'partes/Cabecera.php'?>
</header>
    <h2>Ellos están esperando la oportunidad de ser parte de una familia</h2>
    <p>Para conocer mas detalles acerca de las mascotas, presiona en las fotos</p>
    <div class="seleccion">
    <a  href="adoptar_perros.php">todos los perros</a>
    <a href="adoptar_perros.php?a=adulto">Adultos</a>
    <a href="adoptar_perros.php?a=cachorro">Cachorros</a>

    </div>
 

    <?php if(isset($_GET["a"])){ ?>
        <?php if($_GET["a"]=="adulto"){ ?>
        <!-- adulto -->
            <?php foreach($pdo->query($adulto) as $mascota){ ?>
                <div class="caja-grande">
                    <div>
                        <h2><?php echo($mascota["nombre"]) ?></h2>
                        <a href="info_mascota.php?id=<?php echo($mascota["id"]) ?>"><img src="mascotas_adopcion/mascota_id_<?php echo($mascota["id"]) ?>.jpg"></a>
                    </div>
                </div> 
            <?php } ?>

        <?php }else{ ?>
        <!-- cachorro -->
            <?php foreach($pdo->query($cachorrros) as $mascota){ ?>
                <div class="caja-grande">
                    <div>
                        <h2><?php echo($mascota["nombre"]) ?></h2>
                        <a href="info_mascota.php?id=<?php echo($mascota["id"]) ?>"><img src="mascotas_adopcion/mascota_id_<?php echo($mascota["id"]) ?>.jpg"></a>
                    </div>
                </div> 
            <?php } ?>
        <?php } ?>
    <?php } else{ ?>
    <!-- todos  -->
        <?php foreach($pdo->query($todos) as $mascota){ ?>
            <div class="caja-grande">
                <div>
                    <h2><?php echo($mascota["nombre"]) ?></h2>
                    <a href="info_mascota.php?id=<?php echo($mascota["id"]) ?>"><img src="mascotas_adopcion/mascota_id_<?php echo($mascota["id"]) ?>.jpg"></a>
                </div>
            </div> 
        <?php } ?>
    <?php } ?>

<footer>
    <?php include 'partes/Pie.php'?>
</footer>    

</body>
</html>