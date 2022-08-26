<?php

if($_POST){
    $nombre = $_POST["input_nombre"];
    $apellido = $_POST["input_apellido"];
    $edad = $_POST["input_edad"];
    $direccion = $_POST["input_direccion"];
    $estudios = $_POST["input_estudios"];
    $sexo = $_POST["input_sexo"];
    if(($nombre != null) && ($apellido != null) && ($edad  != null) && ($direccion != null)){
        echo "<p>Hola, yo soy $nombre , $apellido tengo $edad años, vivo en $direccion. </p> <p>Tengo $estudios </p> <p>Mi sexo es: $sexo </p>";
        if ($edad >= 18){
            echo "soy mayor de edad";
        }else{
            echo "soy menor de edad";
        }
    }else{
        echo "Faltan rellenar datos!";
    }
}else{
    echo "No anduvo el programa, intentar nuevamente!";
}
echo "<br/><button><a href='../Vista/ejercicio_5.php'>Volver</a></button>"

?>