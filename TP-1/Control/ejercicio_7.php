<?php

if($_POST){
    $num1 = $_POST["input_numero1"];
    $num2 = $_POST["input_numero2"];
    $operacion = $_POST["select_operacion"];
    switch($operacion){
        case 1:
           $resultado = $num1 + $num2;
        break;
        
        case 2:
            $resultado = $num1 - $num2;
        break;

        case 3:
            $resultado = $num1 * $num2;
        break;
    }
    echo "El resultado de la operacion realizada es: $resultado";
}else{
    echo "No anduvo el programa, intentar nuevamente!";
}
echo "<br/><button><a href='../Vista/ejercicio_7.php'>Volver</a></button>"

?>