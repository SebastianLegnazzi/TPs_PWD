<?php

if($_GET){
    $arrayDias = [$_GET["lunes"], 
    $_GET["martes"],
    $_GET["miercoles"],
    $_GET["jueves"],
    $_GET["viernes"]];

    echo "La carga horaria total por semana es: ".array_sum($arrayDias);
}else{
    echo "Se pifio el programa, proba devuelta ;)";
}
echo "<br/><button><a href='../Vista/ejercicio_2.php'>Volver</a></button>"

?>