<?php
include_once "Persona.php";
class Empleado extends Persona{

protected $_legajo;
protected $_sueldo;



public function __construct($nomb, $ape, $dni, $sexo, $lega, $sueldo){

parent:: __construct($nomb,$ape,$dni,$sexo);

$this->_legajo=$lega;
$this->_sueldo=$sueldo;
}

public function setLegajo($leg){
	$this->_legajo=$leg;
}

public function getLegajo(){
	return $this->_legajo;
}

public function setSueldo($sueldo){
	$this->_legajo=$leg;
}

public function getSueldo(){
	return $this->_sueldo;
}


public function ToString(){
	
//$texto="<br>".$this->getNombre()."-".$this->getApellido()."-".$this->getDni()."-".$this->getSexo(); 
return parent::ToString()."-".$this->getLegajo()."-".$this->getSueldo();

}

public function Hablar($lenguaje){
	echo "<br>El empleado habla ".$lenguaje;
}

}
?>