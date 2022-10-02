<?php
include_once("Menu/Cabecera.php");
$metodo = data_submitted();
$objPersona = new c_persona();
$datosPersona = $objPersona->buscar($metodo);
?>
<div class="container-fluid">
    <div class="container col-md-5">
        <?php
        if ($datosPersona != null) {
        ?>
            <form action="actualizarDatosPersona.php" method="get" class="needs-validation" novalidate>
                <div>
                    <label class="mt-3">Nombre: </label><input type="text" name="Nombre" id="Nombre" class="form-control" required value="<?php echo $datosPersona[0]->getNombre() ?>" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*">
                    <div class="invalid-feedback">
                        Porfavor ingrese un nombre valido!
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div>
                    <label class="mt-3">Apellido: </label><input type="text" name="Apellido" id="Apellido" class="form-control" required value="<?php echo $datosPersona[0]->getApellido() ?>" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*">
                    <div class="invalid-feedback">
                        Porfavor ingrese un apellido valido!
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div>
                    <label class="mt-3">Documento: </label><input type="text" name="NroDni" id="NroDni" class="form-control" value="<?php echo $datosPersona[0]->getNroDni() ?>" disabled>
                    <div class="d-none">
                        <input type="text" name="NroDni" id="NroDni" class="form-control" value="<?php echo $datosPersona[0]->getNroDni() ?>">
                    </div>
                </div>
                <div>
                    <label class="mt-3">Telefono: </label><input type="number" name="Telefono" id="Telefono" class="form-control" required value="<?php echo $datosPersona[0]->getTelefono() ?>" max="9999999999">
                    <div class="invalid-feedback">
                        Porfavor ingrese un numero de telefono valido! maximo 10 digitos.
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div>
                    <label class="mt-3">Direccion: </label><input type="text" name="Domicilio" id="Domicilio" class="form-control" required value="<?php echo $datosPersona[0]->getDomicilio() ?>" pattern="[a-zA-Z]+\s?[0-9]*\s?[a-zA-Z]*\s?[0-9]*\s?[a-zA-Z]*\s?[0-9]*">
                    <div class="invalid-feedback">
                        Porfavor ingrese una direccion valida! calle y numero o calle, numero, dpto, numero, piso y numero.
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div>
                    <script src="js/InputFecha.js"></script>
                    <div class="invalid-feedback">
                        Porfavor ingrese una fecha valida!
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="mt-2">
                    <a href="buscarPersona.php" class="btn btn-dark">Volver</a>
                    <button type="submit" class="btn btn-dark">Modificar</button>
                </div>
            </form>
        <?php
        } else {
            echo ' <p class="lead text-danger">La persona ingresada no existe en la base de datos!</p>';
            echo '<a href="buscarPersona.php" class="btn btn-dark">Volver</a>';
        }
        ?>

    </div>
</div>
<script src="js/validarCamposVacios.js"></script>
<?php
include_once("Menu/Pie.php")
?>