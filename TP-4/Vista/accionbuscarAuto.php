<?php
    include "../configuracion.php";
    $metodo = data_submitted();
    $objAuto = new c_auto();
    $datosAuto = $objAuto->buscar($metodo);
    include_once("Menu/Cabecera.php")
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
                    if (isset($datosAuto)) {
                    ?>
                        <table class="table table-striped">
                            <tr>
                                <th>Patente</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Dueño</th>
                            </tr>
                            <tr>
                                <td><?php echo $datosAuto[0]->getPatente(); ?></td>
                                <td><?php echo $datosAuto[0]->getMarca(); ?></td>
                                <td><?php echo $datosAuto[0]->getModelo(); ?></td>
                                <td><?php echo $datosAuto[0]->getObjPersona()->getNroDni(); ?></td>
                            </tr>
                        </table>
                    <?php 
                    }else{
                        echo ' <p class="lead text-danger"> La patente no se encuentra en la base de datos. </p>';
                    }
                    ?>
                </div>
                <div>
                    <div class="mb-3">
                        <a href= "buscarAuto.php" class="btn btn-dark">Volver</a>
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