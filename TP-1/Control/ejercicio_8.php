<?php
class tp1_Ej8{
  public function controlEJ8($metodo){
    $mensaje="";
    
    if (isset($metodo)) {
      $edad = $metodo['edad_form'];
      $estudia = $metodo['estudia'];
  
      if ($edad < 12) {
        $mensaje= "<h3>Precio de la entrada menores de 12 años: 160 Pesos.</h3><br/>";
      } else {
        if ($estudia == "SI") {
          $mensaje= "<h3>Precio para estudiantes de 12 años o Mayores: 180 Pesos.</h3><br/>";
        } else if ($estudia == "NO") {
          $mensaje= "<h3>Precio para NO estudiantes: 300 Pesos.</h3><br/>";
        } else {
          $mensaje= "<h3>No se especifico si estudia o no.</h3><br/>";
        }
      }
    } else {
      $mensaje= "No se recibieron datos <br/>";
    }
    return  $mensaje;
  }
}
?>


