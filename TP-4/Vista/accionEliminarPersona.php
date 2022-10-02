<?php
include_once("Menu/Cabecera.php");
$datos = data_submitted();
$objPersona = new c_persona();
$objAuto = new c_auto();
?>
<div class="container-fluid">
    <div class="container col-md-10">
        <h2>Resultado la busqueda:</h2>
        <div class="mb-3">
            <?php
            if (!$objAuto->buscarDuenio($datos)) {
                if ($objPersona->baja($datos)) {
                    echo "<h3 class='text-success'>La persona se pudo eliminar con exito!</h3>";
                } else {
                    echo "<h3 class='text-danger'>La persona no se pudo eliminar!</h3>";
                }
            } else {
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
<?php
include_once("Menu/Pie.php")
?>