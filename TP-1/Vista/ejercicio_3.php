<?php
include_once "../../cabecera/cabecera-php.php"
?> 
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="css/ejercicio_3.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <form action="ejercicio_3_Respuesta.php" class="needs-validation" novalidate method="get">
        <div id="input_conteiner">
            <div>
                <label>Nombre: </label><input type="text" name="input_nombre" id="input_nombre" class="form-control" required>  
                <div class="invalid-feedback">
                    Porfavor ingrese un nombre!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Apellido: </label><input type="text" name="input_apellido" id="input_apellido" class="form-control" required>  
                <div class="invalid-feedback">
                    Porfavor ingrese un apellido!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Edad: </label><input type="number" name="input_edad" id="input_edad" class="form-control" required>  
                <div class="invalid-feedback">
                    Porfavor ingrese una edad!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Direccion: </label><input type="text" name="input_direccion" id="input_direccion" class="form-control" required>  
                <div class="invalid-feedback">
                    Porfavor ingrese una direccion!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <input type="submit" name="boton_enviar" id="boton_enviar" class="btn btn-primary mt-2">
        </div>
    </form>
    <script src="js/validarCamposVacios.js"></script>
<?php
    include_once "../../cabecera/footer-php.php"
?>