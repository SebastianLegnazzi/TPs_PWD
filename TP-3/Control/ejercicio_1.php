<?php
$dir = $_SERVER["DOCUMENT_ROOT"]."/TP-3/Archivos/";
if($_FILES["input_file"]["error"] <= 0){
    $nombre = $_FILES["input_file"]["name"];
    $tipo = $_FILES["input_file"]["type"];
    $peso = $_FILES["input_file"]["size"];
    if((str_contains($tipo, "pdf") || str_contains($tipo, "doc"))){
        if($peso <= 2099000){
            if (!copy($_FILES['input_file']['tmp_name'], $dir.$_FILES['input_file']['name'])) {
                echo "ERROR: no se pudo cargar el archivo ";
            }else{
                echo "El archivo ".$_FILES["input_file"]["name"]." se ha copiado con Éxito <br />"."<a href='../../Archivos/$nombre'>Descargar Archivo</a>";
            }
        }else{
            echo "El archivo es demasiado pesado! porfavor ingrese un archivo de peso maximo 2 MB";
        }
    }else{
        echo "Solo se pueden subir archivos PDF o Documento! el tipo de tu archivo es $tipo";
    }
}else{
    echo "ERROR: No se pudo cargar el archivo a la base de datos";
}
echo "<br/><button><a href='../Vista/ejercicio_1.php'>Volver</a></button>"


?>