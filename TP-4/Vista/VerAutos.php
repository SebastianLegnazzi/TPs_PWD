<?php
    include_once("Menu/Cabecera.php");
    $objAuto = new c_auto();
    $datosAuto = $objAuto->buscar(NULL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <div  class="container-fluid">
            <div class="container col-md-10">
                <h2>Resultado la busqueda:</h2>
                <div class="mb-3">
                        <table class="table table-striped">
                            <tr>
                                <th>Patente</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>DNI dueño</th>
                                <th>Nombre y apellido dueño</th>
                                <th></th>
                            </tr>
                            <?php
                                $arrayDNI=["NroDni" => ""]; 
                                if(isset($datosAuto)){ //isset se fija si la variable tiene algo
                                    foreach ($datosAuto as $auto){ 
                                        echo '<tr>';
                                        echo '<td>'. $auto->getPatente().'</td>';
                                        echo '<td>'. $auto->getMarca().'</td>';
                                        echo '<td>'. $auto->getModelo().'</td>';
                                        echo '<td>'. $auto->getObjPersona()->getNroDni().'</td>';
                                        echo '<td>' . $auto->getObjPersona()->getNombre() . " " . $auto->getObjPersona()->getApellido() . '</td>';
                                        echo '<td><a href="accionEliminarAuto.php?Patente='.$auto->getPatente().'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></a></td>';
                                        echo '</tr>'; 
                                    }
                                }else{
                                    echo '<p class="lead"> Actualmente no hay autos registrados </p>';
                                }
                            ?>
                        </table>
                </div>
            </div>
    </div>
</body>
<link rel="stylesheet" href="Menu/css_header_footer.css">
</html>
<?php
    include_once("Menu/Pie.php")
?>
