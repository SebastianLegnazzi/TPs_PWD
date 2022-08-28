<?php
include_once "../../cabecera/cabecera-php.php"
?>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist\css\bootstrap.min.css" title="style" />

    <script type="text/javascript">
        /**Valido con Javascript */
        function validar() {
            var campo1 = document.getElementById("edad_form");

            var esValido = validarNumero(campo1);
           
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
        <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
            función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
            clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
            es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
            de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
            formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
            un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
            Agregar un botón para limpiar el formulario y volver a consultar. </p><br />

        <form id="form1" name="form1" method="POST" action="../Control/ejercicio_8res.php" onSubmit="return validar();" class="was-validated">
            <div class="mb-3 mt-3">

                <label for="edad_form" class="form-label">Edad:</label>
                <input type="text" class="form-control" placeholder="" id="edad_form" name="edad_form" required>
                <label for="estudia">Condicion del estudiante:</label>
                <select id="estudia" name="estudia" class="form-control">
                    <option value="NO">No es estudiante</option>
                    <option value="SI">Es estudiante</option>
                </select>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Por favor complete estos campos.</div>
            </div>
            <input type="submit" class="btn btn-primary" name="Submit" value="Aceptar">
            <input type="reset" class="btn btn-danger" name="Reset" value="Limpiar" />
        </form>

    </div>
<link rel="stylesheet" href="../../cabecera/cabecera-php.php">
    <?php
    include_once "../../cabecera/footer-php.php"
?>