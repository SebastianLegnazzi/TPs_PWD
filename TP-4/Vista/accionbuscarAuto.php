<?php
include_once("Menu/Cabecera.php");
$metodo = data_submitted();
$objAuto = new c_auto();
$datosAuto = $objAuto->buscar($metodo);
?>
<div class="container-fluid">
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
            } else {
                echo ' <p class="lead text-danger"> La patente no se encuentra en la base de datos. </p>';
            }
            ?>
        </div>
        <div>
            <div class="mb-3">
                <a href="buscarAuto.php" class="btn btn-dark">Volver</a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("Menu/Pie.php")
?>