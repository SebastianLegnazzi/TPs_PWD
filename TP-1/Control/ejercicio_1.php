<?php

if($_GET){
    $numero = $_GET["input_numero"];
    if($numero != null){
        if($numero > 0){
            echo "El numero es Positivo <br/>";
        }elseif ($numero == 0){
            echo "El numero es Cero <br/>";
        }else{
            echo "El numero es Negativo <br/>";
        }
    }else{
    echo "No se ha ingresado un numero! <br/>";
    }
}
echo "<button><a href='../Vista/ejercicio_1.php'>Volver</a></button>"

?>