<?php

if($_POST){
    $usuario = $_POST["input_usuario"];
    $contraseña = $_POST["input_contraseña"];
    $cuentas = [
    "sebastian" => "Sebipierna", "elcam4rografo", 
    "manu" => "ElManu", "Piol1tax",
    "Dari" => "Dariana", "12ea56"];
    $usuarioCorrecto = false;
    $contraseñaCorrecta = false;
    $cuentaExiste = false;
    foreach ($cuentas as $cuenta => $valor){
        if(strtoupper($usuario) == strtoupper($valor)){
            $usuarioCorrecto = true;
        }else if($contraseña == $valor){
            $contraseñaCorrecta = true;
        }
    }
    if($usuarioCorrecto && $contraseñaCorrecta){
        $cuentaExiste = true;
        echo "Bienvenido a Sebilandia!";
    }else{
        echo "La contraseña o el usuario no son correctos!";
    }
}
echo "<br/><button><a href='../Vista/ejercicio_3a,b,c.php'>Volver</a></button>"


?>