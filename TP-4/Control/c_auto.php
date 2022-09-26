<?php
class c_auto
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return auto
     */
    private function cargarObjeto($param)
    {
        $objAuto = null;

        if (array_key_exists('Patente', $param) and array_key_exists('Marca', $param) and array_key_exists('Modelo', $param) and array_key_exists('DniDuenio', $param)) {
            $objAuto = new auto();
            if(!$objAuto->cargar($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio'])){
                $objAuto = null;
            }
        }
        return $objAuto;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param)
    {
        $objAuto = null;

        if (isset($param['Patente'])) {
            $objAuto = new auto();
            $objAuto->buscar($param['Patente']);
        }
        return $objAuto;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['Patente'])) {
            $resp = true;
        }
        return $resp;
    }

    /**
     *
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        /*  $param['NroDni'] =null;  Se comenta ya que esta line es para cuando la base de datos tiene su clave principal auto incrementable*/
        $objtAuto = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($objtAuto!=null) {
            if($objtAuto->insertar()){
                $resp = true;
            }
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $objtAuto = $this->cargarObjetoConClave($param);
            if ($objtAuto!=null and $objtAuto->eliminar()) {
                $resp = true;
            }
        }

        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $objtAuto = $this->cargarObjeto($param);
            if ($objtAuto!=null and $objtAuto->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param<>null) {
            if (isset($param['Patente'])) {
                $where.=" and Patente ='".$param['Patente']."'";
            }
        }
        $objAuto= new auto();
        $arregloAutos = $objAuto->listar($where);
        return $arregloAutos;
    }

    /**
     * permite buscar un auto partiendo de un dni
     * @param int $nroDni
     * @return array
     */
    public function buscarDuenio($param)
    {
        $arregloAutos = [];
        $where = " ";
        if (isset($param)) {
            $where = "DniDuenio = ".$param["NroDni"];
            $objAuto= new auto();
            $arregloAutos = $objAuto->listar($where);
        }
        return $arregloAutos;
    }
}
?>