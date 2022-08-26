<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/ejercicio_4.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="modal modal-signin position-static d-block bg-secondary py-5">
    <div class="modal-content rounded-1 shadow">
      <div class="modal-header border-bottom-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path class="icono_head" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path class="icono_head" fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg><h5 class="modal-title">Cinem@as</h5>
      </div>
      <div class="modal-body py-0">
        <form class="row g-3 needs-validation" method="post" action="../Control/ejercicio_4.php" novalidate>
          <div class="col">
            <div class="col-md-10">
              <label for="validationCustom01" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="validationCustom01" name="input_titulo" required>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
            <div class="col-md-10">
              <label for="validationCustom02" class="form-label">Director</label>
              <input type="text" class="form-control" id="validationCustom02" name="input_director" required>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
            <div class="col-md-10">
              <label for="validationCustomUsername" class="form-label">Produccion</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" name="input_produccion" required>
                <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Nacionalidad</label>
              <input type="text" class="form-control" id="validationCustom02" name="input_nacionalidad" required>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom02" class="form-label">Duracion</label>
              <input type="number" class="form-control" id="validationCustom02" name="input_duracion" max="999" min="1" required>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor que no supere los 999 mins
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
          </div>
          <div class="col">
            <div class="col-md-10">
              <label for="validationCustom03" class="form-label">Actores</label>
              <input type="text" class="form-control" id="validationCustom03" name="input_actores" required>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
            <div class="col-md-10">
              <label for="validationCustom05" class="form-label">Guion</label>
              <input type="text" class="form-control" id="validationCustom05" name="input_guion" required>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom05" class="form-label">Año</label>
              <input type="number" class="form-control" id="validationCustom05" max="9999" min="1" name="input_anio" required>
              <div class="invalid-feedback">
                Porfavor ingrese un valor de 4 digitos
              </div>
              <div class="valid-feedback">
                Correcto!
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Generos</label>
              <select class="form-select" id="validationCustom04" name="input_generos" required>
                <option selected disabled value="">Elige...</option>
                <option>Comedia</option>
                <option>Drama</option>
                <option>Terror</option>
                <option>Romaticas</option>
                <option>Suspenso</option>
                <option>Otras</option>
              </select>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
            <div class="mt-3">
              <p class="form-label">Restricciones de edad</p>
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" value="Todos los Publicos" required>
              <label class="form-check-label me-3" for="validationFormCheck2">Todos los Publicos</label>
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" value="Mayores de 7 años" required>
              <label class="form-check-label me-3" for="validationFormCheck3">Mayores de 7 años</label>
              <input type="radio" class="form-check-input" id="validationFormCheck4" name="radio-stacked" value="Mayores de 18 años" required>
              <label class="form-check-label" for="validationFormCheck4">Mayores de 18 años</label>
              <div class="invalid-feedback">
                  Porfavor ingrese un valor
                </div>
                <div class="valid-feedback">
                  Correcto!
                </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="input_sinopsis" rows="5" name="input_sinopsis" required></textarea>
          </div>
      </div>
      <div class="modal-footer border-top-0">
        <button class="btn btn-primary btn-lg w-30 h-30 mx-0 me-3" type="submit">Enviar</button>
        <button type="reset" class="btn btn-lg btn-light w-30 mx-0">Borrar</button>
      </div>
    </div>
    </form>
  </div>
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