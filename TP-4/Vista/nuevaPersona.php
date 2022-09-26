<?php
include "../configuracion.php";
include_once("Menu/Cabecera.php");
$anio = getdate()['year'];
if(9 >= getdate()['mon']){
    $mes = "0".getdate()['mon'];
}else{
    $mes = getdate()['mon'];
}
if(9 >= getdate()['mday']){
    $dia = "0".getdate()['mday'];
}else{
    $dia = getdate()['mday']; 
}
$fecha = $anio."-".$mes."-".$dia;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
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
                    <label class="mt-3">Fecha de nacimiento: </label><input type="date" max="<?php echo $fecha ?>" name="fechaNac" id="input_fechaNac" class="form-control" required>
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
</body>
<link rel="stylesheet" href="Menu/css_header_footer.css">
</html>
<?php
include_once("Menu/Pie.php")
?>