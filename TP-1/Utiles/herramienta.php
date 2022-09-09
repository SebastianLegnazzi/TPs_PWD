<?php

/* Esta funcion devuelve el metodo con el que se mando el formulario sin importar si es GET o POST */
function data_submited(){
    $tipoMetodo = [];
    /* empty devuelve true si la variable es vacia y false si tiene datos */
    if(!empty($_POST)){
        $tipoMetodo = $_POST;
    }elseif(!empty($_GET)){
        $tipoMetodo = $_GET;
    }
    return $tipoMetodo;
}

?>