<?php

class tp2_Ej3{
    public function verificarContraseñaExistente($metodo){
        $usuario = $metodo["input_usuario"];
        $contraseña = $metodo["input_contraseña"];
        $cuentas = [
        "sebastian" => "Sebipierna", "elcam4rografo", 
        "manu" => "ElManu", "Piol1tax",
        "Dari" => "Dariana", "12ea56"];
        $usuarioCorrecto = false;
        $contraseñaCorrecta = false;
        $cuentaExiste = false;
        while(!$usuarioCorrecto && !$contraseñaCorrecta && $i < count($cuentas)){
            if(strtoupper($usuario) == strtoupper($valor)){
                $usuarioCorrecto = true;
            }else if($contraseña == $valor){
                $contraseñaCorrecta = true;
            }
        }
        if($usuarioCorrecto && $contraseñaCorrecta){
            $cuentaExiste = true;
        }
        return $cuentaExiste;
    }

}
?>