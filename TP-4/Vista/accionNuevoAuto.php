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
            if ($objAuto->buscar($datos) == null) {
                if ($objAuto->alta($datos)) {
                    echo "<h3 class='text-success'>El auto se puedo cargar con exito!</h3>";
                } else {
                    echo "<h3 class='text-danger'>El auto no se pudo cargar porque no se encontro la persona en la base de datos!</h3>";
                }
            } else {
                echo "<h3 class='text-danger'>El auto ya existe en la base de datos!</h3>";
            }
            ?>
        </div>
        <div>
            <div class="mb-3">
                <a href="nuevoAuto.php" class="btn btn-dark">Volver</a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("Menu/Pie.php")
?>