<?php
class c_persona{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return persona
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param) ){
            $objPersona = new persona();
            $objPersona->cargar($param['NroDni'], $param['Apellido'],$param['Nombre'],$param['fechaNac'],$param['Telefono'],$param['Domicilio']);
        }
        return $objPersona;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Tabla
     */
    private function cargarObjetoConClave($param){
        $objPersona = null;
        
        if( isset($param['NroDni']) ){
            $objPersona = new persona();
            $objPersona->buscar($param['NroDni']);
        }
        return $objPersona;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
       /*  $param['NroDni'] =null;  Se comenta ya que esta line es para cuando la base de datos tiene su clave principal auto incrementable*/
        $objPersona = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($objPersona!=null and $objPersona->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjetoConClave($param);
            if ($objPersona!=null and $objPersona->eliminar()){
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
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjeto($param);
            if($objPersona!=null and $objPersona->modificar()){
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
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni =".$param['NroDni'];
        }
        $objPersona= new persona();
        $arregloPersonas = $objPersona->listar($where);  
        return $arregloPersonas;
    }
}
?>