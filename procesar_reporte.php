<?php 
session_start();
# datos mascota
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$sexo = $_POST["sexo"];
$raza = $_POST["raza"];
$direccion = $_POST["visto"];
$imagen = addslashes(file_get_contents($_FILES["foto"]["tmp_name"]));

#id usuario que reporta
$id_usuario = $_SESSION["id"];

#agregando a la base de datos

$pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");
$sql = "INSERT INTO mascota VALUES(NULL,'$id_usuario', '$nombre','$tipo', '$sexo','$raza', '$direccion' , '$imagen')";
$pdo->query($sql);
header("Location: Reporta.php");

?>