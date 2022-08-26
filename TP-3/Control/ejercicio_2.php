<?php
$dir = $_SERVER["DOCUMENT_ROOT"]."/TP-3/Archivos/";
if($_FILES["input_file"]["error"] <= 0){
    $tipo = $_FILES["input_file"]["type"];
    if((str_contains($tipo, "text/plain"))){
        if (!copy($_FILES['input_file']['tmp_name'], $dir.$_FILES['input_file']['name'])) {
            echo "ERROR: no se pudo cargar el archivo ";
        }else{
            echo "El archivo ' ".$_FILES["input_file"]["name"]." ' se ha copiado con Éxito <br />";
            $textoArchivo =  file_get_contents ($dir."/".$_FILES["input_file"]["name"]);
            echo '<textarea name="textarea_datosingresados" id="textarea_datosingresados" disabled cols="50" rows="10">'.$textoArchivo.'</textarea>';
        }
    }else{
        echo "Solo se pueden subir archivos de tipo TXT plano! el tipo de tu archivo es $tipo";
    }
}else{
    echo "ERROR: No se pudo cargar el archivo a la base de datos";
}
echo "<br/><button><a href='../Vista/ejercicio_2.php'>Volver</a></button>"


?>