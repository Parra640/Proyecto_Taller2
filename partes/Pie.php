<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilos.css" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    
    .container-padre {
        width: 100%;
        max-width: 1200px;
        margin: auto;
    }
    
    footer {
        background-color: rgb(46, 44, 44);
        color: white;
    }
    
    .container {
        width: 100%;
        display: flex;
    }
    
    .pie {
        width: 100%;
        display: flex;
    }
    
    .info {
        max-width: 400px;
    }
    
    .info h1 {
        font-size: 22px;
    }
    
    .info p {
        font-size: 14px;
        color: rgb(158, 157, 157);
    }
    
    .redes {
        max-width: 400px;
    }
    
    .redes h1 {
        font-size: 22px;
    }
    
    .redes p {
        font-size: 14px;
        color: rgb(158, 157, 157);
    }
    
    .redes div {
        margin-top: 20px
    }
    
    .redes label {
        margin-left: 10px;
    }
    
    .contacto {
        max-width: 400px;
    }
    
    .contacto h1 {
        font-size: 22px;
    }
    
    .contacto p {
        font-size: 14px;
        color: rgb(158, 157, 157);
    }
</style>

<body>


    <footer>
        <div class="container-padre">
            <div class="container">
                <div>
                    <div class="info">
                        <h1>Mas informacion de PetWorld</h1>
                        <p> Somos un grupo de peronas que velan por el bienestar de las amascotas desamparadas ,ayudamos a darle una mejor calidad de vida asi como le buscamos un nuevo hogar</p>
                    </div>
                </div>

                <div class="redes">
                    <h1>Redes sociales</h1>
                    <div>
                        <div>
                            <a href="https://www.facebook.com"><img width="36" height="32" src="logotipos/Facebook.png" alt="logotipo facebook"></a>
                            <label>Siguenos en facebook</label>
                        </div>
                        <div>
                            <a href="https://www.instagram.com"><img width="36" height="32" src="logotipos/instagram-v051916.png" alt="instagram"></a>
                            <label>Siguenos en instagram</label>
                        </div>
                    </div>
                </div>

                <div class="contacto">
                    <h1>Informacion de contacto</h1>
                    <div class="direccion">
                        <img src="" alt="">
                        <label>Av. La fontana, La molina,Lima-perú
                    </label>
                    </div>
                    <div class="numeros">
                        <label>949 777 118</label>
                        <label for="">548 235 899</label>
                        <label for="">346 879 988 </label>

                    </div>
                    <div class="correo">
                        <img src="" alt="">
                        <label>PetWorld-peru@gmail.com</label>
                    </div>
                </div>
            </div>

            <div class="pie">
                <div class="copy">
                    &copy; Copyright 2019 HTML.am
                </div>
                <div class="terminos">
                    <a href="">Politicas y Privacidad</a> |
                    <a href="">Terminos y Condiciones</a> |
                    <a href="">Informacion</a> |
                    <a href="">Preguntas frecuentes</a>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>