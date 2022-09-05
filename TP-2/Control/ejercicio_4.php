<?php

class tp2_Ej4{
  public function detallePelicula($metodo){
    $arrayDetalle = [];
    $arrayDetalle[0] = $metodo['input_titulo'];
    $arrayDetalle[1] = $metodo['input_actores'];
    $arrayDetalle[2] = $metodo['input_director'];
    $arrayDetalle[3] = $metodo['input_guion'];
    $arrayDetalle[4] = $metodo['input_produccion'];
    $arrayDetalle[5] = $metodo['input_anio'];
    $arrayDetalle[6] = $metodo['input_nacionalidad'];
    $arrayDetalle[7] = $metodo['input_generos'];
    $arrayDetalle[8] = $metodo['input_duracion'];
    $arrayDetalle[9] = $metodo['radio-stacked'];
    $arrayDetalle[10] = $metodo['input_sinopsis'];
    return $arrayDetalle;
  }
}

?>