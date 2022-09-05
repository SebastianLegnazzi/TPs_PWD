<?php
class tp1_Ej6{
    public function saludo($metodo){
        $saludo = "";
        $nombre = $metodo["input_nombre"];
        $apellido = $metodo["input_apellido"];
        $edad = $metodo["input_edad"];
        $direccion = $metodo["input_direccion"];
        $estudios = $metodo["input_estudios"];
        $sexo = $metodo["input_sexo"];
        if(isset($metodo["input_deporte"])){
            $arrayDeporte = $metodo["input_deporte"];
        }else{
            $arrayDeporte[0] = "No practica ningun deporte";
        }
        if(($nombre != null) && ($apellido != null) && ($edad  != null) && ($direccion != null)){
            $saludo = "<p>Hola, yo soy $nombre $apellido tengo $edad años, vivo en $direccion. </p> <p>Tengo $estudios </p> <p>Mi sexo es: $sexo </p>";
            if ($edad >= 18){
                $saludo .= "soy mayor de edad </br><br/>";
            }else{
                $saludo .= "soy menor de edad </br><br/>";
            }
        }else{
            echo "Faltan rellenar datos!";
        }
        $saludo .= "Los deportes elegidos son: <br/>";
        foreach($arrayDeporte as $deporte){
            $saludo .= " - $deporte <br/>";
        }
        return $saludo;
        }
}

?>