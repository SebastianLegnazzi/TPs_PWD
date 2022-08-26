<html>

<head>
  <title>TP 1 - Ejercicio 8</title>
</head>

<body>
  <h1>Respuesta del Servidor EJ 8</h1>
  <?php
  if (isset($_POST)) {
    $edad = $_POST['edad_form'];
    $estudia = $_POST['estudia'];

    if ($edad < 12) {
      echo "<h3>Precio de la entrada menores de 12 años: 160 Pesos.</h3><br/>";
    } else {
      if ($estudia == "SI") {
        echo "<h3>Precio para estudiantes de 12 años o Mayores: 180 Pesos.</h3><br/>";
      } else if ($estudia == "NO") {
        echo "<h3>Precio para NO estudiantes: 300 Pesos.</h3><br/>";
      } else {
        echo "<h3>No se especifico si estudia o no.</h3><br/>";
      }
    }
  } else {
    echo "No se recibieron datos <br/>";
  }
  ?>
  <p><a href="../Vista/ejercicio_8.php">Atras</a></p>
</body>

</html>