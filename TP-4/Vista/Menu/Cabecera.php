<?php
include "../configuracion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo Practico 4</title>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/css_header_footer.css">
</head>

<body>
  <nav class="navbar navbar-expand-xl navbar-light barra_navegacion" aria-label="Third navbar example" id="header">
    <div class="container-fluid">
      <span class="navbar-brand" style="font-family: 'Chivo', sans-serif;">Trabajo Practico 4</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="VerAutos.php" style="font-family: 'Chivo', sans-serif;">Ver Autos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="buscarAuto.php" style="font-family: 'Chivo', sans-serif;">Buscar Autos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="listaPersona.php" style="font-family: 'Chivo', sans-serif;">Listar Personas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="nuevaPersona.php" style="font-family: 'Chivo', sans-serif;">Nueva Persona</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="nuevoAuto.php" style="font-family: 'Chivo', sans-serif;">Nuevo Auto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cambioDuenio.php" style="font-family: 'Chivo', sans-serif;">Cambio Dueño</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="buscarPersona.php" style="font-family: 'Chivo', sans-serif;">Buscar Persona</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="buscarAuto.php" style="font-family: 'Chivo', sans-serif;">Buscar Auto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>