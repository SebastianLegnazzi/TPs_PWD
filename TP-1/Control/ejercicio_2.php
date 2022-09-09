<?php

class tp1_Ej2{
    public function sumaHorasSemanales($metodo){
        $arrayDias = [$metodo["lunes"], 
        $metodo["martes"],
        $metodo["miercoles"],
        $metodo["jueves"],
        $metodo["viernes"]];
        $verificacion = false;
        if(isset($arrayDias) && is_array($arrayDias)){
            $verificacion = array_sum($arrayDias);
        }
        return $verificacion;
    }
}

?>