<?php 
$conectar = new PDO("mysql:host=localhost;dbname=petworld;charset=utf8","root","");

?>

<div class="div_padre_reportados">

    <?php foreach($conectar->query("SELECT * FROM mascota") as $mascota_perdida){ 
        $id=$mascota_perdida["id_usuario"];
        $consulta2="SELECT numeroTelefono FROM usuario WHERE id=$id ";
        foreach($conectar->query($consulta2) as $data_usuario){
            $telefono= $data_usuario["numeroTelefono"];
        }
    ?>
    
        <div class="cajones_reportados">
            <div class="imagen_reportados">
                <img src="data:image/jpg;base64, <?php echo base64_encode($mascota_perdida["imagen"]); ?> ">
            </div>
            <div>
                <div>
                    <span>nombre: </span><span> <?php echo($mascota_perdida['nombre']); ?> </span>
                </div>
                <div>
                    <span>sexo: </span><span> <?php echo($mascota_perdida['sexo']); ?> </span>
                </div>
                <div>
                    <span>raza: </span><span> <?php echo($mascota_perdida['raza']); ?></span>
                </div>
                <div>
                    <span>visto por: </span><span> <?php echo($mascota_perdida['direccion']); ?> </span>
                </div>
                <div>
                    <span>contacta a: </span><span> <?php echo($telefono) ?> </span>
                </div>
            </div>
        </div>        
    <?php } ?>

</div>