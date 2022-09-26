
<?php
/*
CREATE TABLE `auto` (
  `Patente` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Marca` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Modelo` int(11) NOT NULL,
  `DniDuenio` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Patente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/

class auto{
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $mensajeFuncion;


    public function __construct(){
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->objPersona= new persona();
    }

    public function cargar($patente, $marca, $modelo, $documento){
        $objPersona = new persona();
        $resp = false;
        if($objPersona->Buscar($documento)){
            $this->setPatente($patente);
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setObjPersona($objPersona);   
            $resp = true;
        }
        return $resp;
    }

	public function setPatente($patente){
        $this->patente = $patente;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setObjPersona($objPersona){
        $this->objPersona = $objPersona;
    }
    public function setMensajeFuncion($mensajeFuncion){
        $this->mensajeFuncion = $mensajeFuncion;
    }

    public function getPatente(){
        return $this->patente;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getObjPersona(){
        return $this->objPersona;
    }
    public function getMensajeFuncion(){
        return $this->mensajeFuncion;
    }

    public function insertar(){
		$base= new BaseDatos();
		$resp= false;
		$consulta= "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES (
        '".$this->getPatente()."',
		'".$this->getMarca()."',
        '".$this->getModelo()."',
        '".$this->getObjPersona()->getNroDni()."')"; 
		if($base->Iniciar()){
			    if($base->Ejecutar($consulta)){
			        $resp=  true;
			    }	
                else {
				    $this->setMensajeFuncion($base->getError());		
			    }
		    } 
            else {
				$this->setMensajeFuncion($base->getError());
		    }
		return $resp;
	}
    
    /*
    private $Patente;
    private $Marca;
    private $Modelo;
    private $objPersona;
    */

    public function modificar(){
	    $resp =false; 
	    $base=new BaseDatos();
		$consulta="UPDATE auto
        SET Patente= '".$this->getPatente()."',
        Marca= '".$this->getMarca()."',
        Modelo= '".$this->GetModelo()."',
        DniDuenio= '".$this->getObjPersona()->getNroDni()."' 
        WHERE Patente= '". $this->getPatente()."'";
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
			    $resp=  true;
			}else{
				$this->setMensajeFuncion($base->getError());
			}
		}else{
			$this->setMensajeFuncion($base->getError());
			
		}
		return $resp;
	}

    /*
    private $Patente;
    private $Marca;
    private $Modelo;
    private $objPersona;
    
	 Función que busca un AUTO en base a una PATENTE
	*/		
    public function Buscar($Patente){
		$base=new BaseDatos();
		$consulta="SELECT * FROM auto WHERE Patente='" .$Patente."'";
		$resp= false;
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
				if($auto=$base->Registro()){					
				    $this->setPatente($Patente);
					$this->setMarca($auto['Marca']);
					$this->setModelo($auto['Modelo']);
                    $objPersona = new persona();
                    $objPersona->Buscar($auto['DniDuenio']);
                    $this->setObjPersona($objPersona);
					$resp= true;
				}				
		 	}
            else{
		 		$this->setMensajeFuncion($base->getError());
			}
		}	
        else{
		 	$this->setMensajeFuncion($base->getError());
		}		
	return $resp;
	}	

    /*
    private $Patente;
    private $Marca;
    private $Modelo;
    private $objPersona;
    
	Función que lista 
	*/	

    public function listar($condicion=""){
        $arregloAutos= null;
		$base=new BaseDatos();
		$consultaAuto="SELECT * FROM auto ";
		if ($condicion != ""){
		    $consultaAuto=$consultaAuto.' WHERE '.$condicion;
		}
		$consultaAuto.=" ORDER BY Patente ";
		if($base->Iniciar()){
			if($base->Ejecutar($consultaAuto)){				
				$arregloAutos= array();
				while($auto=$base->Registro()){
					$objAuto= new auto();
					$objAuto->Buscar($auto['Patente']);
					array_push($arregloAutos, $objAuto);
				}
		 	}
            else{
		 		$this->setMensajeFuncion($base->getError());	
			}
		}
        else{
		 	$this->setMensajeFuncion($base->getError());
		}	
		return $arregloAutos;
	}	

    public function eliminar(){
		$base=new BaseDatos();
		$resp=false;
		if($base->Iniciar()){
				$consulta="DELETE FROM auto WHERE Patente= '".$this->getPatente()."'";
				if($base->Ejecutar($consulta)){
				    $resp=  true;
				}
                else{
					$this->setMensajeFuncion($base->getError());	
				}
		}
        else{
			$this->setMensajeFuncion($base->getError());	
		}
		return $resp; 
	}

    /*
    private $Patente;
    private $Marca;
    private $Modelo;
    private $objPersona;
	*/

    public function __toString(){
	    return( 
        "Patente del auto: " . $this->getPatente() . 
        "\n Marca: ". $this->getMarca() . 
        "\n Modelo: ". $this->getModelo() .
        "\n Dni del dueño: ". $this->getObjPersona()->getNroDni(). "\n" );
	}
}
