<?php

if($_GET){
    $nombre = $_GET["input_nombre"];
    $apellido = $_GET["input_apellido"];
    $edad = $_GET["input_edad"];
    $direccion = $_GET["input_direccion"];
    if($nombre != null && $apellido != null && $edad  != null && $direccion != null){
        echo "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";
    }else{
        echo "Faltan rellenar todos los datos!";
    }
}else{
    echo "No anduvo el programa, intentar nuevamente!";
}
echo "<br/><button><a href='../Vista/ejercicio_3.php'>Volver</a></button>"

?>