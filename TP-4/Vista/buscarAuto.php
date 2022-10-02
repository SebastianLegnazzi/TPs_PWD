<?php
include_once("Menu/Cabecera.php");
?>
<div class="m-2">
    <form action="accionbuscarAuto.php" method="get" class="needs-validation col-md-4" novalidate>
        <div class="form-floating">
            <input type="text" class="form-control rounded-3" pattern="[A-Z]{3}\s[0-9]{3}" name="Patente" id="Patente" placeholder=" " required>
            <label for="Patente">Ingrese la patente</label>
            <div class="invalid-feedback">
                Porfavor ingrese una patente valida! 3 letras en mayuscula, un espacio y 3 numeros
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
    </form>
</div>
<script src="js/validarCamposVacios.js"></script>
<?php
include_once("Menu/Pie.php")
?>