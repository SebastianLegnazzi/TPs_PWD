<?php
include_once("Menu/Cabecera.php");
$datos = data_submitted();
$objPersona = new c_persona();
$objAuto = new c_auto();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container col-md-10">
            <h2>Resultado la busqueda:</h2>
            <div class="mb-3">
                <?php
                if(!$objAuto->buscarDuenio($datos)){
                    if ($objPersona->baja($datos)) {
                        echo "<h3 class='text-success'>La persona se pudo eliminar con exito!</h3>";
                    } else {
                        echo "<h3 class='text-danger'>La persona no se pudo eliminar!</h3>";
                    }
                }else{
                    echo "<h3 class='text-danger'>La persona tiene autos a su nombre, deberias eliminarlos primero.</h3>";
                }
                ?>
            </div>
            <div>
                <div class="mb-3">
                    <a href="listaPersona.php" class="btn btn-dark">Volver</a>
                </div>
            </div>
        </div>
    </div>

</body>
<link rel="stylesheet" href="Menu/css_header_footer.css">
</html>
<?php
include_once("Menu/Pie.php")
?>