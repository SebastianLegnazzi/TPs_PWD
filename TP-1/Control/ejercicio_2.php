<?php

class tp1_Ej2{
    public function sumaHorasSemanales($metodo){
        $arrayDias = [$_GET["lunes"], 
        $_GET["martes"],
        $_GET["miercoles"],
        $_GET["jueves"],
        $_GET["viernes"]];
        $verificacion = false;
        if(isset($arrayDias) && is_array($arrayDias)){
            $verificacion = array_sum($arrayDias);
        }
        return $verificacion;
    }
}

?>