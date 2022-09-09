<?php

class tp2_Ej4{
  public function detallePelicula($metodo){
    $arrayDetalle = [];
    $i = 0;
    foreach($metodo as $dato){
      $arrayDetalle[$i] = $dato;
      $i++;
    }
    return $arrayDetalle;
  }
}

?>