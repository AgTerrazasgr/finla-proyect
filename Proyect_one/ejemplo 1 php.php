<?php
// Recopila info y la muestra complemento consultas ejemplo 1
$row['Nombre'];

$consulta = "SELECT*FROM User WHERE id_user= 1";
$ejecutar = $conexion-> query($consulta);
$row = $ejecutar-> forech();

?>