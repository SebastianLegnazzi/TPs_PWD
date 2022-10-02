<?php
include_once("Menu/Cabecera.php");
?>
<div class="container-fluid">
    <div class="container col-md-5">
        <form action="accionNuevaPersona.php" method="post" class="needs-validation row-md-4" novalidate>
            <div>
                <label>Nombre: </label><input type="text" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*" name="Nombre" minlength="3" id="input_nombre" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un nombre valido! No se aceptan numeros y tiene que ser mayor a 3 letras.
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Apellido: </label><input type="text" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*" name="Apellido" minlength="3" id="input_apellido" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un apellido valido! No se aceptan numeros y tiene que ser mayor a 3 letras.
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Documento: </label><input type="number" name="NroDni" min="1000000" id="input_documento" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una Documento!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Telefono: </label><input type="number" name="Telefono" max="9999999999" id="input_telefono" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un telefono!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Direccion: </label><input type="text" pattern="[a-zA-Z]+\s?[0-9]*" name="Domicilio" id="input_direccion" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una direccion valida! No se aceptan solamente numeros
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <script src="js/InputFecha.js"></script>
                <div class="invalid-feedback">
                    Porfavor ingrese fecha valida!
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