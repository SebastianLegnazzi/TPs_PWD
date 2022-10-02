<?php
include_once("Menu/Cabecera.php");
$datos = data_submitted();
$objAuto = new c_auto();
?>
<div class="container-fluid">
    <div class="container col-md-10">
        <h2>Resultado la busqueda:</h2>
        <div class="mb-3">
            <?php
            if ($objAuto->baja($datos)) {
                echo "<h3 class='text-success'>El auto se pudo eliminar con exito!</h3>";
            } else {
                echo "<h3 class='text-danger'>El auto no se pudo eliminar!</h3>";
            }
            ?>
        </div>
        <div>
            <div class="mb-3">
                <a href="verAutos.php" class="btn btn-dark">Volver</a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("Menu/Pie.php")
?>