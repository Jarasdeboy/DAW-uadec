<?php

include("class_registro_dal.php");
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
