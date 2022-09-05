<?php
class tp1_Ej5{
    public function saludo($metodo){
        $saludo = "";
        $nombre = $metodo["input_nombre"];
        $apellido = $metodo["input_apellido"];
        $edad = $metodo["input_edad"];
        $direccion = $metodo["input_direccion"];
        $estudios = $metodo["input_estudios"];
        $sexo = $metodo["input_sexo"];
        if(($nombre != null) && ($apellido != null) && ($edad  != null) && ($direccion != null)){
            $saludo = "<p>Hola, yo soy $nombre , $apellido tengo $edad años, vivo en $direccion. </p> <p>Tengo $estudios </p> <p>Mi sexo es: $sexo </p>";
            if ($edad >= 18){
                $saludo .= "soy mayor de edad";
            }else{
                $saludo .= "soy menor de edad";
            }
        }else{
            $saludo = "Faltan rellenar datos!";
        }
        return $saludo;
    }
}

?>