<?php
include_once("Menu/Cabecera.php");
$metodo = data_submitted();
$objPersona = new c_persona();
$datosPersona = $objPersona->buscar($metodo);
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
    <title>Buscar un Persona</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
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
                        <label class="mt-3">Fecha de nacimiento: </label><input type="date" max="<?php echo $fecha ?>" name="fechaNac" id="input_fechaNac" class="form-control" required value="<?php echo $datosPersona[0]->getFechaNac() ?>">
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
</body>
<link rel="stylesheet" href="Menu/css_header_footer.css">

</html>
<?php
include_once("Menu/Pie.php")
?>