<?php 

$usuario = $_POST["u"];
$password = $_POST["p"];
$contador=false;
$pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");

$sql = "SELECT * FROM usuario WHERE nombre='$usuario'";

foreach($pdo->query($sql) as $fila){
    if($password==$fila["contraseña"]){
        $id= $fila["id"];
        $contador=true;
    }
}

if($contador==True){
    session_start();
    $_SESSION["id"]=$id;
    header("Location: index.php");
} else{
    header("Location: iniciar_sesion.php?m=2");
}

?>