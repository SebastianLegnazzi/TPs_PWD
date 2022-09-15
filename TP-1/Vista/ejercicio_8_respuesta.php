<?php
include_once "../../cabecera/cabecera-php.php";
include_once "../Utiles/herramienta.php";
include_once "../Control/ejercicio_8.php";

$metodo = data_submited();
$objControlador = new tp1_Ej8;
$mensaje = $objControlador->controlEJ8($metodo);
?>

<html>

<head>
    <title>TP 1 - Ejercicio 8</title>
</head>

<body>
    <h1>Respuesta del Servidor EJ 8</h1>
    <?php
    echo $mensaje;
    ?>
    <p><a href="ejercicio_8.php">Atras</a></p>
</body>

</html>