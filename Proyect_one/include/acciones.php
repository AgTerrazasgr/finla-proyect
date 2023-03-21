<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    $nombre= $conexion->real_escape_string($_POST['Nombre']);
    $apellidos= $conexion->real_escape_string($_POST['Apellidos']);
    $direccion= $conexion->real_escape_string($_POST['Direccion']);
    $telefono= $conexion->real_escape_string($_POST['Telefono']);
    $fecha= $conexion->real_escape_string($_POST['Fecha']);
   


    if ($nombre=="" || $apellidos=="" || $direccion=="" || $telefono=="" || $fecha==""){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica1.usuario (nombre, apellidos, direccion, telefono, f_nac)
    VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$fecha')";
    $registro= $conexion->query($registro);
   
   if($registro > 0){
    echo "Registro exitoso";
   }
   else{
    echo "Error al registrar";
   }
}
}
?>