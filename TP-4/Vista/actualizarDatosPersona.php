<?php
include_once("Menu/Cabecera.php");
$metodo = data_submitted();
$objPersona = new c_persona();
$datosPersona = $objPersona->buscar($metodo);
?>
<div class="container-fluid">
    <div class="container col-md-5">
        <?php
        if ($objPersona->modificacion($metodo)) {
            echo ' <p class="lead text-success">La persona se pudo modificar con exito!</p>';
        } else {
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
<?php
include_once("Menu/Pie.php")
?>