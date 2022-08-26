<?php

if($_POST){
    $titulo = $_POST['input_titulo'];
    $actores = $_POST['input_actores'];
    $director = $_POST['input_director'];
    $guion = $_POST['input_guion'];
    $produccion = $_POST['input_produccion'];
    $año = $_POST['input_anio'];
    $nacionalidad = $_POST['input_nacionalidad'];
    $genero = $_POST['input_generos'];
    $duracion = $_POST['input_duracion'];
    $restricciones = $_POST['radio-stacked'];
    $sinopsis = $_POST['input_sinopsis'];
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ejercicio 4</title>
    <link rel='stylesheet' href='../Vista/bootstrap-5.1.3-dist/css/bootstrap.min.css'>
    <style>
      .modal-content{
        width: 80%;
        left: 10%;
        margin-top: 50px;
      }

      .texto_titulo{
        color: rgba(0, 80, 30, 0.7);
        font-weight: bolder;
      }

      .texto_descripcion{
        color: rgba(0, 80, 30, 0.7);
        font-weight: unset;
      }

      h1{
        color: rgb(20, 120, 150);
      }

      .modal-signin{
        height: 100vh;
        background-color: white;
      }
      .modal-body, .modal-header{
        background-color: rgba(50, 180, 30, 0.3);
      }
    </style>
    </head>
        <body>
            <div class='modal-content rounded-1 shadow'>
                <div class='modal-header border-bottom-0'>
                    <h1>La pelicula introducida es</h1>
                    <a href='../Vista/ejercicio_4.php'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></a>
                </div>
                <div class='modal-body py-0'>
                    <span class='texto_titulo'>Titulo: </span><span class='texto_descripcion'>$titulo</span></br>
                    <span class='texto_titulo'>Actores: </span><span class='texto_descripcion'>$actores</span></br>
                    <span class='texto_titulo'>Director: </span><span class='texto_descripcion'>$director</span></br>
                    <span class='texto_titulo'>Guion: </span><span class='texto_descripcion'>$guion</span></br>
                    <span class='texto_titulo'>Produccion: </span><span class='texto_descripcion'>$produccion</span></br>
                    <span class='texto_titulo'>Año: </span><span class='texto_descripcion'>$año</span></br>
                    <span class='texto_titulo'>Nacionalidad: </span><span class='texto_descripcion'>$nacionalidad</span></br>
                    <span class='texto_titulo'>Genero: </span><span class='texto_descripcion'>$genero</span></br>
                    <span class='texto_titulo'>Duracion: </span><span class='texto_descripcion'>$duracion</span></br>
                    <span class='texto_titulo'>Restricciones de Edad: </span><span class='texto_descripcion'>$restricciones</span></br>
                    <span class='texto_titulo'>Sinopsis: </span><span class='texto_descripcion'>$sinopsis</span></br>
                </div>  
            </div>
        </body>
    </html>";
}


?>