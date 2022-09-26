<?php
    include_once("Menu/Cabecera.php");
    $metodo = data_submitted();
    $objAuto = new c_auto();
    $objPersona = new c_persona();
    $datosAuto = $objAuto->buscar($metodo);
    $nroDni["NroDni"] = $metodo["DniDuenio"];
    $datosPersona = $objPersona->buscar($nroDni);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Auto</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<div  class="container-fluid">
            <div class="container col-md-10">
                <h2>Resultado la busqueda:</h2>
                <div class="mb-3">
                    <?php 
                    if ($datosAuto != null) {
                        if(count($datosPersona) == 1){
                            $datosModificados = ["Patente" => $metodo["Patente"], "DniDuenio" => $metodo["DniDuenio"], "Marca" => $datosAuto[0]->getMarca(), "Modelo" => $datosAuto[0]->getModelo()];
                            if($objAuto->modificacion($datosModificados)){
                                echo '<p class="lead text-success"> Los datos se modificaron correctamente!</p>';
                            }else{
                                echo '<p class="lead text-danger"> Es el mismo dueño!</p>';
                            }
                        }else{
                            echo '<p class="lead text-danger"> La persona no se encuentra en la base de datos!</p>';
                        }
                    }else{
                        echo ' <p class="lead text-danger">El auto no se encuentra en la base de datos!</p>';
                    }
                    ?>
                </div>
                <div>
                    <div class="mb-3">
                        <a href= "cambioDuenio.php" class="btn btn-dark">Volver</a>
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