
<?Php

include "Empleado.php";
include "Fabrica.php";
mb_http_output('UTF-8');
echo "Trabajo Practico 1";
//$nomb, $ape, $dni, $sexo, $lega, $sueldo
$primerEmpleado= new Empleado("Julia", "Perez", 22235145,"f",45154,21222);
$otroEmpleado= new Empleado("Sara", "Bush", 25475145,"f",45774,17222);
echo $primerEmpleado->ToString();
echo $primerEmpleado->Hablar("Espa&ntildeol");
echo $otroEmpleado->ToString();
echo $otroEmpleado->Hablar("Franc&eacutes");
echo "<br>Ahora agrego los empleados a un array y creo tercer empleado...<br>";
$array=array();
echo "Genero la fabrica...<br>";
$unaFabrica= new Fabrica($array,"Mi Fabrica");
echo "Agrego los empleados usando el metodo agregar empleados: <br>";
$unaFabrica->AgregarEmpleado($primerEmpleado);
$unaFabrica->AgregarEmpleado($otroEmpleado);
$unEmpleado=new Empleado("Francisco", "Gomez", 54745457,"M", 3333,10500);
echo "creo el tercer empleado";
/*$unEmpleado->setNombre("Francisco");
$unEmpleado->setApellido("Gomez");
$unEmpleado->setSexo("M");
$unEmpleado->setLegajo(3333);
$unEmpleado->setSueldo(10500);*/
echo "<br>...y volvemos a usar los m&eacutetodos del empleado (que incluyen getters)";
echo $unEmpleado->ToString();
$unEmpleado->Hablar("Ingl&eacutes");

"<br>";
$unaFabrica->AgregarEmpleado($unEmpleado);
"<br>";
echo "Agrego el nuevo empleado: <br> y retorno los datos de la f&aacutebrica con el m$eacutetodo Tostring: <br>";
"<br>";
$unaFabrica->ToString();
?>