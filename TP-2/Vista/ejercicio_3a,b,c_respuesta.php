<?php
include_once "../../cabecera/cabecera-php.php";
include_once "../Utiles/herramienta.php";
include_once "../Control/verificaPass.php";

$metodo = data_submited();
$objControlador = new tp2_Ej3;
$verificacion = $objControlador->verificarContraseñaExistente($metodo);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <title>Ejericio 6 Respuesta</title>
    </head>
    <body>
        <div  class="container-fluid">
            <div class="container col-md-5">
              <?php 
                  if ($verificacion) {
                    echo "<h2>Bienvenido a Sebipatita!</h2>";
                    echo "<div class='mb-3'>";
                    echo '<p class="lead">Espero que se divierta!</p>';
                  }else{
                    echo "<h2>Contraseña y/o usuario incorrectos!</h2>";
                    echo "<div class='mb-3'>";
                    echo '<p class="lead">Vuelve a intentar con otra cuenta!</p>';
                  }
              ?>
            </div>
            <div class="mb-3">
                <a href= "ejercicio_3a,b,c.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </body>
</html>
<?php
    include_once "../../cabecera/footer-php.php"
?>