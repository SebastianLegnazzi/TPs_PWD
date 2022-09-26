<?php
class persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeFuncion;

    public function setNroDni($nroDni){
        $this->nroDni = $nroDni;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setFechaNac($fechaNac){
        $this->fechaNac = $fechaNac;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setDomicilio($domicilio){
        $this->domicilio = $domicilio;
    }
    public function setMensajeFuncion($mensajeFuncion){
        $this->mensajeFuncion = $mensajeFuncion;
    }

    public function getNroDni(){
        return $this->nroDni;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getFechaNac(){
        return $this->fechaNac;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function getMensajeFuncion(){
        return $this->mensajeFuncion;
    }

    public function __construct(){
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
    }
    
    public function cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
        $this->nroDni = $nroDni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }

    public function insertar(){
		$base= new BaseDatos();
		$resp= false;
		$consulta= "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES (
        ".$this->getNroDni().",
		'".$this->getApellido()."',
        '".$this->getNombre()."',
        '".$this->getFechaNac()."', 
        ".$this->getTelefono().", 
        '".$this->getDomicilio()."')"; 
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
    
    public function modificar(){
	    $resp =false; 
	    $base=new BaseDatos();
		$consulta="UPDATE persona
        SET Apellido= '{$this->getApellido()}',
        Nombre= '{$this->getNombre()}',
        fechaNac= '{$this->getFechaNac()}', 
        Telefono= '{$this->getTelefono()}',
        Domicilio= '{$this->getDomicilio()}'
        WHERE NroDni= {$this->getNroDni()}";
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
	 Función que busca una auto en base a un ID
	*/		
    public function Buscar($dni){
		$base=new BaseDatos();
		$consulta="SELECT * FROM persona WHERE NroDni=" .$dni;
		$resp= false;
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
				if($persona=$base->Registro()){					
				    $this->setNroDni($dni);
					$this->setApellido($persona['Apellido']);
					$this->setNombre($persona['Nombre']);
                    $this->setFechaNac($persona['fechaNac']);
                    $this->setTelefono($persona['Telefono']);
                    $this->setDomicilio($persona['Domicilio']);
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

    public function listar($condicion=""){
        $arregloPersona= null;
		$base=new BaseDatos();
		$consultaPersona="SELECT * FROM persona ";
		if ($condicion != ""){
		    $consultaPersona=$consultaPersona.' WHERE '.$condicion;
		}
		$consultaPersona.=" ORDER BY NroDni ";
		if($base->Iniciar()){
			if($base->Ejecutar($consultaPersona)){				
				$arregloPersona= array();
				while($persona=$base->Registro()){
					$objPersona= new persona();
					$objPersona->Buscar($persona['NroDni']);
					array_push($arregloPersona, $objPersona);
				}
		 	}
            else{
		 		$this->setMensajeFuncion($base->getError());	
			}
		}
        else{
		 	$this->setMensajeFuncion($base->getError());
		}	
		return $arregloPersona;
	}	

    public function eliminar(){
		$base=new BaseDatos();
		$resp=false;
		if($base->Iniciar()){
				$consulta="DELETE FROM persona WHERE NroDni= ".$this->getNroDni();
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

    public function __toString(){
	    return( 
        "el numero de dni de la persona es: " . $this->getNroDni() . 
        "\n El nombre de la persona es: ". $this->getNombre() . 
        "\n El apellido de la persona es: ". $this->getApellido() .
        "\n La fecha de nacimiento de la persona es: ". $this->getFechaNac() .
        "\n El telefono de la persona es: ". $this->getTelefono() .
        "\n El domicilio de la persona es: ". $this->getDomicilio(). "\n" );
	}
}

?>