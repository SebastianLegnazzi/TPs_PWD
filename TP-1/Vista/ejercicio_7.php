<?php
include_once "../../cabecera/cabecera-php.php"
?> 
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist\css\bootstrap.min.css" title="style" />

    <script type="text/javascript">
        /**Valido con Javascript */
        function validar() {
            var campo1 = document.getElementById("op1_form");
            var campo2 = document.getElementById("op2_form");

            var esValido = validarNumero(campo1);
            var esValido = validarNumero(campo2);

            if (!esValido) {
                alert("Debe Ingresar un numero.");
            }
            return esValido;
        }

        function validarNumero(objCampo) {
            var exito = false;
            var numero = parseInt(objCampo.value);
            if (isNaN(numero)) {
                objCampo.style.borderColor = "red";
            } else {
                objCampo.style.borderColor = "";
                exito = true;
            }
            return exito;
        }
    </script>
</head>

<body>
   

    <div id="div2" class="cuerpo">
        <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En
            los inputs se ingresarán números y el select debe dar la opción de una operación
            matemática que podrá resolverse usando los números ingresados. En la página que
            procesa la información se debe mostrar por pantalla la operación seleccionada, cada
            uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
            formulario: </p><br />

        <form id="form1" name="form1" method="POST" action="ejercicio_7_respuesta.php" onSubmit="return validar();" class="was-validated">
            <div class="mb-3 mt-3">
                
                <input type="text" class="form-control" placeholder="" id="op1_form" name="op1_form" required>
                <br>
                <input type="text" class="form-control" placeholder="" id="op2_form" name="op2_form" required>
                <br>
                <label for="operacion">Operacion:</label>
                <select id="operacion" name="operacion" class="form-control">
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="Multiplicacion">Multiplicacion</option>
                </select>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Por favor complete estos campos.</div>
            </div>
            <input type="submit" class="btn btn-primary" name="Submit" value="Aceptar">
            <input type="reset" class="btn btn-danger" name="Reset" value="Limpiar" />
        </form>

    </div>

<?php
    include_once "../../cabecera/footer-php.php"
?>