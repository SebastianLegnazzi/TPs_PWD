
<?php
include_once "../../cabecera/cabecera-php.php";
include_once "../Utiles/herramienta.php";
include_once "../Control/ejercicio_7.php";

$metodo = data_submited();
$objControlador = new tp1_Ej7;
$mensaje=$objControlador->controlEJ7($metodo);

?>

<html>
    <head>
    <title>TP 1 - Ejercicio 7</title>
    </head>
    <body>
        <h1>Respuesta del Servidor EJ 7</h1>
        <?php
            echo $mensaje;
        ?>
        <p><a href="ejercicio_7.php">Atras</a></p>
    </body>
</html>