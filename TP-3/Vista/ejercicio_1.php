<?php
include_once "../../cabecera/cabecera-php.php"
?>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/ejercicio_3.css">
</head>
<body>
    <form action="../Control/ejercicio_1.php" method="post" enctype="multipart/form-data">
        <label>Ingrese el archivo de tipo "DOC" o "PDF"</label><br>
        <input name="input_file" class="mt-2" id="input_file" type="file"><br>
        <input type="submit" class="btn btn-primary mt-2" id="input_submit" name="input_submit">
    </form>
<?php
include_once "../../cabecera/footer-php.php"
?>