<?php
include_once "../../cabecera/cabecera-php.php"
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <form action="ejercicio_1_Respuesta.php" class="row g-3 needs-validation" novalidate method="get">
            <div class="col-md-4 m-4">
                <input type="number" class="form-control" name="input_numero" id="input_numero" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un numero!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <input type="submit" class="btn btn-primary mt-2" name="boton_enviar" id="boton_enviar"><br>
            </div>
        </form>
    </body>
    <script src="js/validarCamposVacios.js"></script>
</html>

<?php
    include_once "../../cabecera/footer-php.php"
?>