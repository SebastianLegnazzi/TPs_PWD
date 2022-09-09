<?php

class tp1_Ej1{
    public function verNumero($numero){
        $verificacion = false;
        if(isset($numero) && is_numeric($numero)){
            $verificacion = $numero;
        }
        return $verificacion;
    }
}

?>