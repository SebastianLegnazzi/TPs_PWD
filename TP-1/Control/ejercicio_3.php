<?php

class tp1_Ej3{
    public function saludo($metodo){
        $saludo = "";
        $nombre = $metodo["input_nombre"];
        $apellido = $metodo["input_apellido"];
        $edad = $metodo["input_edad"];
        $direccion = $metodo["input_direccion"];
        if($nombre != null && $apellido != null && $edad  != null && $direccion != null){
            $saludo = "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";
        }else{
            $saludo = "Faltan rellenar todos los datos!";
        }
        return $saludo;
    }

}

?>