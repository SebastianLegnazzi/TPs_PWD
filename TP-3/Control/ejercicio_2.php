<?php
class TP3_EJ02
{

    function controlTP1EJ02()
    {
        $mensaje = "";
        $dir = $_SERVER["DOCUMENT_ROOT"] . "/TP-3/Archivos/";
        if ($_FILES["input_file"]["error"] <= 0) {
            $tipo = $_FILES["input_file"]["type"];
            if ((str_contains($tipo, "text/plain"))) {
                if (!copy($_FILES['input_file']['tmp_name'], $dir . $_FILES['input_file']['name'])) {
                    $mensaje = "ERROR: no se pudo cargar el archivo ";
                } else {
                    $mensaje =  "El archivo ' " . $_FILES["input_file"]["name"] . " ' se ha copiado con Éxito <br />";
                    $textoArchivo =  file_get_contents($dir . "/" . $_FILES["input_file"]["name"]);
                    $mensaje .= '<textarea name="textarea_datosingresados" id="textarea_datosingresados" disabled cols="50" rows="10">' . $textoArchivo . '</textarea>';
                }
            } else {
                $mensaje = "Solo se pueden subir archivos de tipo TXT plano! el tipo de tu archivo es $tipo";
            }
        } else {
            $mensaje = "ERROR: No se pudo cargar el archivo a la base de datos";
        }
        return $mensaje;
    }
}
