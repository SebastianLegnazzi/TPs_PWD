<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <form action="../Control/ejercicio_1.php" class="row g-3 needs-validation" novalidate method="get">
        <div class="col-md-4 m-4">
            <input type="number" class="form-control" name="input_numero" id="input_numero" required>
            <div class="invalid-feedback">
                Porfavor ingrese un numero!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
            <input type="submit" class="btn btn-primary mt-2" name="boton_enviar" id="boton_enviar"><br>
            <button onclick=" abrir('ejerciciosTP3')">Abrir</button>
        </div>
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
        if (!form.checkValidity() || !contraseñaIgUsuario()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()
  </script>
</body>
</html>