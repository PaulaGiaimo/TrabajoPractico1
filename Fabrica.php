<?php
include_once "Empleado.php";
class Fabrica{


private $_empleados;

private $_razonSocial;


public function __construct($empleArray,$razon){

$this->_empleados=$empleArray;
$this->_razonSocial=$razon;
}
public function setRazon($raz){
	$this->_razonSocial=$raz;
}
public function getRazon(){
	return $this->_razonSocial;
}

public function AgregarEmpleado($empleadoNuevo){

array_push($this->_empleados, $empleadoNuevo);
echo "<br>Agregado el empleado".$empleadoNuevo->getNombre()."<br>";
}


public function ToString(){

	echo "el nombre de la fabrica es: ".$this->getRazon();
	echo "<br>";
	echo "la fabrica tiene ".count($this->_empleados);
	for ($i=0;$i<count($this->_empleados);$i++){
		echo "<br>Nombre: ".$this->_empleados[$i]->getNombre()."- Apellido".$this->_empleados[$i]->getApellido();
	}
}

}



?>