<?php
include_once "../../cabecera/cabecera-php.php"
?> 
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <form action="ejercicio_6_Respuesta.php" class="needs-validation col-md-4 m-4" novalidate method="post">
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
        <div>
            <strong>Estudios:</strong><br>
            <input type="radio" name="input_estudios" id="input_estudios1" value="No tiene estudios" class="form-check-input" required><label for="input_estudios1" class="form-check-label">No tiene estudios</label>
            <input type="radio" name="input_estudios" id="input_estudios2" value="Estudios Primarios" class="form-check-input" required><label for="input_estudios2" class="form-check-label">Estudios Primarios</label>
            <input type="radio" name="input_estudios" id="input_estudios3" value="Estudios Secundarios" class="form-check-input" required><label for="input_estudios3" class="form-check-label">Estudios Secundarios</label>
            <div class="invalid-feedback">
                Porfavor ingrese alguna opcion!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div>
            <strong>Sexo:</strong><br>
            <input type="radio" name="input_sexo" id="input_sexo1" value="Femenino" class="form-check-input" required><label for="input_sexo1" class="form-check-label">Femenino</label>
            <input type="radio" name="input_sexo" id="input_sexo2" value="Masculino" class="form-check-input" required><label for="input_sexo2" class="form-check-label">Masculino</label>
            <input type="radio" name="input_sexo" id="input_sexo3" value="Otro" class="form-check-input" required><label for="input_sexo3" class="form-check-label">Otro</label>
            <div class="invalid-feedback">
                Porfavor ingrese alguna opcion!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div>
            <strong>Deporte:</strong><br>
            <input type="checkbox" name="input_deporte[]" id="input_deporte1" value="Futbol" class="form-check-input"><label for="input_deporte1" class="form-check-label">Futbol</label>
            <input type="checkbox" name="input_deporte[]" id="input_deporte2" value="Basket" class="form-check-input"><label for="input_deporte2" class="form-check-label">Basket</label>
            <input type="checkbox" name="input_deporte[]" id="input_deporte3" value="Tennis" class="form-check-input"><label for="input_deporte3" class="form-check-label">Tennis</label>
            <input type="checkbox" name="input_deporte[]" id="input_deporte4" value="Voley" class="form-check-input"><label for="input_deporte4" class="form-check-label">Voley</label>
            <div class="invalid-feedback">
                Porfavor ingrese alguna opcion!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <input type="submit" name="boton_enviar" class="btn btn-primary mt-2" id="boton_enviar">
    </form>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            practicaAlgunDeporte()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()

    function practicaAlgunDeporte(){
        let arrayCheckbox = document.getElementsByName("input_deporte[]"), arrayCheboxSeleccionado = [];
        for (let index in arrayCheckbox){
            if(arrayCheckbox[index].checked){
                arrayCheboxSeleccionado[index] = arrayCheckbox[index];
            }
        }
        return arrayCheboxSeleccionado;
    }
  </script>
<?php
    include_once "../../cabecera/footer-php.php"
?>