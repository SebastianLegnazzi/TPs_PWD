<?php 
/* Esta funcion devuelve el metodo con el que se mando el formulario sin importar si es GET o POST */
function data_submitted(){
    $tipoMetodo = [];
    /* empty devuelve true si la variable es vacia y false si tiene datos */
    if(!empty($_POST)){
        $tipoMetodo = $_POST;
    }elseif(!empty($_GET)){
        $tipoMetodo = $_GET;
    }
    return $tipoMetodo;
}


function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

spl_autoload_register(function ($class_name){ //Se ejecuta automáticamente cada vez que se llame el script configuracion.php que tiene incluido a este script funciones.php
    //echo "class ".$class_name ;
    $directorys = array( //Guarda las carpetas con clases (su creación) que usaremos
        $_SESSION['ROOT'].'Modelo/',
        $_SESSION['ROOT'].'Modelo/conector/',
        $_SESSION['ROOT'].'Control/',
    );
    //print_object($directorys) ;
    foreach($directorys as $directory){ //Busca la BaseDatos o las clases que esten siendo usadas, para que funcione TODAS LAS CLASES DEBEN TENER EL MISMO NOMBRE QUE SU SCRIPT 
        if(file_exists($directory.$class_name . '.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name . '.php');
            return;
        }
    }
});

?>