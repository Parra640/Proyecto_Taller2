<?php 
session_start();
if(isset($_SESSION["id"])){

<<<<<<< HEAD

foreach($pdo->query($sql) as $fila){
    $nombre = $fila["nombre"];
    $apellido = $fila["apellido"];
=======
    $id=$_SESSION["id"];
    $pdo = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");
    $sql = "SELECT * FROM usuario WHERE id=$id";
    
    foreach($pdo->query($sql) as $fila){
        $nombre = $fila["nombre"];
        $apellido = $fila["apellido"];
        $email = $fila["email"];
        $telefono = $fila["numeroTelefono"];
    }
>>>>>>> 88dba08ece8ac4c24ca42dc46547f93f4064fcb0
}
    
?>

<div class="padre">
    <div class="hijo A">
        <li><img width="250" src="logotipos/petworld.png" alt="logotipo principal"></li>
    </div>
    <div class="hijo B">
        <ul class="nav">
            <li><a href="index.php">INICIO</a></li>
            <li><a href="">INFORMACION</a>
                <ul>
                    <li><a href="Informacion-somos.php">¿QUIENES SOMOS?</a></li>
                    <li><a href="Informacion-colaboradores.php">COLABORADORES</a></li>
                    <li><a href="Informacion-actividades.php">ACTIVIDADES</a></li>
                </ul>
            </li>
            
            <li><a href="adoptar.php">ADOPTA</a></li>
            <li><a href="Reporta.php">REPORTA</a></li>

            <li><img src="logotipos/user.png" alt="perfil" width="60"> 
                <?php if(isset($_SESSION["id"])){ 
                    echo ("$nombre $apellido");
                    echo("
                    <ul class='solo'>
                        <li><a href='Cerrar_session.php'>CERRAR SESION</a></li>
                    </ul> 
                    ");
                } else{
                    echo("
                    <ul class='solo'>
                        <li><a href='iniciar_sesion.php'>INICIAR SESION</a></li>
                        <li><a href='crear_cuenta.php'>CREAR CUENTA</a></li>
                    </ul>
                    ");
                } ?>
                
            </li>

        </ul>
    </div>
</div>
 