<?php
include_once "../../cabecera/cabecera-php.php";
include_once "../Utiles/herramienta.php";
include_once "../Control/ejercicio_4.php";

$metodo = data_submited();
$objControlador = new tp2_Ej4;
$arrayDetalle = $objControlador->detallePelicula($metodo);
?>
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
                    <a href='ejercicio_4.php'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></a>
                </div>
                <div class='modal-body py-0'>
                    <span class='texto_titulo'>Titulo: </span><span class='texto_descripcion'><?php echo $arrayDetalle[0] ?></span></br>
                    <span class='texto_titulo'>Actores: </span><span class='texto_descripcion'><?php echo $arrayDetalle[1] ?></span></br>
                    <span class='texto_titulo'>Director: </span><span class='texto_descripcion'><?php echo $arrayDetalle[2] ?></span></br>
                    <span class='texto_titulo'>Guion: </span><span class='texto_descripcion'><?php echo $arrayDetalle[3] ?></span></br>
                    <span class='texto_titulo'>Produccion: </span><span class='texto_descripcion'><?php echo $arrayDetalle[4] ?></span></br>
                    <span class='texto_titulo'>Año: </span><span class='texto_descripcion'><?php echo $arrayDetalle[5] ?></span></br>
                    <span class='texto_titulo'>Nacionalidad: </span><span class='texto_descripcion'><?php echo $arrayDetalle[6] ?></span></br>
                    <span class='texto_titulo'>Genero: </span><span class='texto_descripcion'><?php echo $arrayDetalle[7] ?></span></br>
                    <span class='texto_titulo'>Duracion: </span><span class='texto_descripcion'><?php echo $arrayDetalle[8] ?></span></br>
                    <span class='texto_titulo'>Restricciones de Edad: </span><span class='texto_descripcion'><?php echo $arrayDetalle[9] ?></span></br>
                    <span class='texto_titulo'>Sinopsis: </span><span class='texto_descripcion'><?php echo $arrayDetalle[10] ?></span></br>
                </div>  
            </div>
        </body>
    </html>
<?php
    include_once "../../cabecera/footer-php.php"
?>