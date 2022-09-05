
<?php
include_once "../../cabecera/cabecera-php.php";
include_once "../Control/myController.php";
include_once "../Control/ejercicio_3.php";

$metodo = data_submited();
$objControlador = new tp1_Ej3;
$saludo = $objControlador->saludo($metodo);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <title>Ejericio 3 Respuesta</title>
    </head>
    <body>
        <div  class="container-fluid">
            <div class="container col-md-5">
                <h2>Resultado del Ejercicio 3:</h2>
                <div class="mb-3">
                    <?php 
                    if ($saludo != "") {
                        echo ' <p class="lead">'.$saludo.'</p>';
                    }else{
                        echo ' <p class="lead"> No ingreso un valor valido </p>';
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <a href= "ejercicio_3.php" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    include_once "../../cabecera/footer-php.php"
?>