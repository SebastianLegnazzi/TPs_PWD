<?php
class tp1_Ej7{
  public function controlEJ7($metodo){
    if (isset($metodo)){
      $op1=$metodo['op1_form'];
      $op2=$metodo['op2_form'];
      $operacion=$metodo['operacion'];
      $resultado=0;
      switch($operacion) {
          case 'Suma':
            // code block
            $resultado=$op1 + $op2 ;
            $mensaje= "<h3>$op1 + $op2 = $resultado</h3><br/>";
            break;
          case 'Resta':
            // code block
            $resultado=$op1 - $op2 ;
            $mensaje= "<h3>$op1 - $op2 = $resultado</h3><br/>";
            break;
          case 'Multiplicacion':
            // code block
            $resultado=$op1 * $op2 ;
            $mensaje= "<h3>$op1 * $op2 = $resultado</h3><br/>";
            break;
          default:
            // code block
            $resultado=0;
            $mensaje= "<h3>No se especifico una operacion.</h3><br/>";
        }
  }else{
    $mensaje= "No se recibieron datos <br/>";
  }

  return $mensaje;
  }
}
