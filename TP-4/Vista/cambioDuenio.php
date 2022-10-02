<?php
include_once("Menu/Cabecera.php");
?>
<div class="container-fluid">
    <div class="container col-md-5">
        <form action="accionCambioDuenio.php" method="post" class="needs-validation row-md-4" novalidate>
            <div>
                <label>Patente del auto: </label><input type="text" pattern="[A-Z]{3}\s[0-9]{3}" name="Patente" id="input_nombre" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una patente valida! 3 Letras Mayusculas, un espacio y 3 numeros.
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Documento del nuevo dueño: </label><input type="number" min="1000000" name="DniDuenio" id="input_apellido" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un DNI valido! solo numeros.
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Cargar">
        </form>
    </div>
</div>
<script src="js/validarCamposVacios.js"></script>
<?php
include_once("Menu/Pie.php")
?>