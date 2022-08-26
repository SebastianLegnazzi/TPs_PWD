<?php

if($_POST){
    $edad = $_POST["input_edad"];
    $EsEstudiante = $_POST["input_Estudiante"];
    if(($EsEstudiante == 1) && ($edad >= 12)){
        $precio = 180;
    }else if(($EsEstudiante == 1) || ($edad < 12)){
        $precio = 160;
    }else{
        $precio = 300;
    }
    echo "El precio de la entrada es: $precio";
}else{
    echo "No anduvo el programa, intentar nuevamente!";
}
echo "<br/><button><a href='../Vista/ejercicio_8.php'>Volver</a></button>"

?>