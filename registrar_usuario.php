<?php 
# Almacenar datos en la bd del registro de una cuenta
$nombre = $_POST["nb"];
$apellido = $_POST["ap"];
$nacimiento = $_POST["fe"];
$email = $_POST["co"];
$password1 = $_POST["p1"];
$password2 = $_POST["p2"];
$numero = $_POST["nu"];


if($password1 != $password2){
    header("Location: crear_cuenta.php?m=1");
} else{

    $pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");
    $sql = "INSERT INTO usuario VALUES(NULL,'$nombre','$apellido','$nacimiento','$email','$password1','$numero')";
    $pdo->query($sql);
    header("Location: iniciar_sesion.php");

}


?>