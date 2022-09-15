<?php

class TP3_EJ03
{
  private $mensaje;

  function __constructor()
  {
    $this->mensaje = "";
  }


  public function setMensaje($mensaje)
  {
    $this->mensaje = $mensaje;
  }
  public function getMensaje()
  {
    return $this->mensaje;
  }

  function controlTP1EJ03()
  {
    $exito = false;

    $dir = "../Archivos/";
    if (isset($_POST)) {
      if ($_FILES["input_imagen"]["error"] <= 0) {
        $tipo = $_FILES["input_imagen"]["type"];
        $nombre = $_FILES['input_imagen']['name'];
        if (str_contains($tipo, "png") || str_contains($tipo, "jpg") || str_contains($tipo, "jpeg")) {
          if (!copy($_FILES['input_imagen']['tmp_name'], $dir . $nombre)) {
            $this->setMensaje("ERROR: no se pudo cargar el archivo ");
          } else {
            $this->setMensaje("");
            $exito = true;
          }
        } else {
          $this->setMensaje("Solo se pueden subir archivos de tipo imagen");
        }
      } else {
        $this->setMensaje("ERROR: No se pudo cargar el archivo a la base de datos");
      }
    } else {
      $this->setMensaje("ERROR: Array _POST No posee datos.");
    }

    return $exito;
  }
}
