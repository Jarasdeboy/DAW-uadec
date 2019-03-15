<?php
include("class_registro_dal.php");

$matricula=$_POST["imatricula"];
$nombre=$_POST["inombre"];
$correo=$_POST["icorreo"];
$telefono=$_POST["itelefono"];
$grado=$_POST["sgrado"];
$plan=$_POST["splan"];
$carrera=$_POST["scarrera"];
$materias=$_POST["smaterias"];
$estatus=$_POST["status"];

echo "Los datos $matricula , $nombre , $correo , $telefono , $grado , $plan , $carrera , $materias , $estatus se registraron!";


//$obj = new class_db();
$obj2=new registro_dal();
$resultado2=$obj2->  get_datos_by_matricula(13214207);
print_r($resultado2);

$obj3=new registro_dal();
$resultado3=$obj3-> get_datos_lista_alumnos();
print_r($resultado3);

$obj=new registro_dal();
$resultado=$obj-> insertar(47162534,'Insertado','insertado@uadec.edu.mx','8442109473','5',1,2,'Activo');
print($resultado);

$obj4=new registro_dal();
$resultado4=$obj4->  borrar(50128535);
print($resultado4);


?>
