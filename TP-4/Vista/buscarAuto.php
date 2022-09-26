<?php
    include_once("Menu/Cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar un Auto</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    
</head>
<body>
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
</body>
<link rel="stylesheet" href="Menu/css_header_footer.css">
</html>
<?php
    include_once("Menu/Pie.php")
?>