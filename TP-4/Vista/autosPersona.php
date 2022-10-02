<?php
include_once("Menu/Cabecera.php");
$objPersona = new c_persona();
$objAuto = new c_auto();
$datos = data_submitted();
$datosAuto = $objAuto->buscarDuenio($datos);
$obj = NULL;
if (isset($datos['NroDni'])) {
    $listaPersonas = $objPersona->buscar($datos);
    if (count($listaPersonas) == 1) {
        $obj = $listaPersonas[0];
?>
        <div class="container-fluid">
            <div class="container col-md-10">
                <h2>Resultado la busqueda:</h2>
                <div class="mb-3">
                    <table class="table table-striped">
                        <tr>
                            <th>DNI</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            <th>Telefono</th>
                            <th>Domicilio</th>
                        </tr>
                        <tr>
                            <td><?php echo $obj->getNroDni(); ?></td>
                            <td><?php echo $obj->getApellido(); ?></td>
                            <td><?php echo $obj->getNombre(); ?></td>
                            <td><?php echo $obj->getFechaNac(); ?></td>
                            <td><?php echo $obj->getTelefono(); ?></td>
                            <td><?php echo $obj->getDomicilio(); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="mb-3">
                    <h2>Autos:</h2>
                    <table class="table table-info table-striped"">
                            <tr>
                                <th>Patente</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                            </tr>
                            <?php
                            if (isset($datosAuto)) { //isset se fija si la variable tiene algo
                                foreach ($datosAuto as $auto) {
                                    echo '<tr>';
                                    echo '<td>' . $auto->getPatente() . '</td>';
                                    echo '<td>' . $auto->getMarca() . '</td>';
                                    echo '<td>' . $auto->getModelo() . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<p> Actualmente no hay autos registrados </p>';
                            }
                            ?>
                        </table>
                    </div>
                    <div>
                        <div class=" mb-3">
                        <a href="listaPersona.php" class="btn btn-dark">Volver</a>
                </div>
            </div>
        </div>
        </div>
<?php
    } else {
        echo ' <p class="lead"> No ingreso un DNI valido </p>';
    }
}
include_once("Menu/Pie.php")
?>