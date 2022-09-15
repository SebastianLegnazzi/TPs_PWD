<?php
include_once "../Control/ejercicio_2.php";
include_once "../../cabecera/cabecera-php.php";
$objControl = new TP3_EJ02();
$mensaje = $objControl->controlTP1EJ02();


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/ejercicio_3.css">
    <title>Ejercicio 2</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container col-md-5">
            <h2>Resultado del Ejercicio TP3 - EJ 2:</h2>
            <div class="mb-3">
                <?php
                    echo ' <p class="lead">' . $mensaje . '</p>';
                ?>
            </div>

        </div>
    </div>

    <br /><button><a href='../Vista/ejercicio_2.php'>Volver</a></button>"
</body>

<?php
include_once "../../cabecera/footer-php.php"
?>