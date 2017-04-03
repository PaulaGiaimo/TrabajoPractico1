<?php

abstract Class Persona{
//Atributos
private $_apellido;
private $_dni;
private $_nombre;
private $_sexo;


public function __construct($nomb, $ape, $dni, $sexo){

$this->_apellido= $ape;
$this->_nombre=$nomb;
$this->_dni= $dni;
$this->_sexo= $sexo;

}
//public function __construct(){}
//Getters y setters
public function getApellido(){
	return $this->_apellido;
}
public function setApellido($ape){
	$this->_apellido=$ape;
}

public function getNombre(){
	return $this->_nombre;
}
public function setNombre($nombre){
	$this->_nombre=$nombre;
}
public function getDni(){
	return $this->_dni;
}
public function setDni($dni){
	$this->_dni=$dni;
}
public function getSexo(){
	return $this->_sexo;
}
public function setSexo($sex){
	$this->_sexo=$sex;
}


public abstract function Hablar($idioma);

public function ToString(){
$texto="<br>".$this->getNombre()."-".$this->getApellido()."-".$this->getDni()."-".$this->getSexo(); 
return $texto;


}

}





?>