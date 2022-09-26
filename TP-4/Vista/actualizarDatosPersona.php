<?php
include "../configuracion.php";
$metodo = data_submitted();
$objPersona = new c_persona();
$datosPersona = $objPersona->buscar($metodo);
include_once("Menu/Cabecera.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar un Persona</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container col-md-5">
            <?php
            if($objPersona->modificacion($metodo)){
                echo ' <p class="lead text-success">La persona se pudo modificar con exito!</p>';
            }else{
                echo '<p class="lead text-danger">Error! no se pudo modificar la persona porque son los mismos!</p>';
            }
            ?>
            <div class="mt-2">
                <a href="buscarPersona.php" class="btn btn-dark">Volver</a>
                <button type="submit" class="btn btn-dark">Modificar</button>
            </div>
        </div>
    </div>
    <script src="js/validarCamposVacios.js"></script>
</body>
<link rel="stylesheet" href="Menu/css_header_footer.css">

</html>
<?php
include_once("Menu/Pie.php")
?>