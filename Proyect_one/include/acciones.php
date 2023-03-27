<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    $nombre= $conexion->real_escape_string($_POST['Nombre']);
    $apellidos= $conexion->real_escape_string($_POST['Apellidos']);
    $direccion= $conexion->real_escape_string($_POST['Direccion']);
    $telefono= $conexion->real_escape_string($_POST['Telefono']);
    $fecha= $conexion->real_escape_string($_POST['Fecha']);
    $email= $conexion->real_escape_string($_POST['Email']);


    if ($nombre=="" || $apellidos=="" || $direccion=="" || $telefono=="" || $fecha=="" || $email=="" ){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica.Usuario(Nombre, Apellidos, Direccion, Telefono, Fecha, Email)
    VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$fecha', '$email')";
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