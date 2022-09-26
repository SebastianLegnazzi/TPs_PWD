<?php
include_once("Menu/Cabecera.php");
$datos = data_submitted();
$objPersona = new c_persona();
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
                if($objPersona->buscar($datos) == null){
                    if ($objPersona->alta($datos)) {
                        echo "<h3 class='text-success'>La persona se pudo cargar con exito!</h3>";
                    } else {
                        echo "<h3 class='text-danger'>La persona no se pudo cargar!</h3>";
                    }
                }else{
                    echo "<h3 class='text-danger'>La persona ya existe en la base de datos!</h3>";
                }
                ?>
            </div>
            <div>
                <div class="mb-3">
                    <a href="nuevaPersona.php" class="btn btn-dark">Volver</a>
                    <a href= "listaPersona.php" class="btn btn-dark">Ver lista personas</a>
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