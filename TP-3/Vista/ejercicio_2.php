<?php
include_once "../../cabecera/cabecera-php.php"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/ejercicio_3.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="../Control/ejercicio_2.php" method="post" enctype="multipart/form-data">
        <label>Ingrese el archivo de tipo "txt plano"</label><br>
        <input name="input_file" class="mt-2" id="input_file" type="file"><br>
        <input type="submit" class="btn btn-primary mt-2" id="input_submit" name="input_submit">
    </form>

    <?php
    include_once "../../cabecera/footer-php.php"
?>