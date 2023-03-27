<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    $nombrep= $conexion->real_escape_string($_POST['NombreP']);
    $clave= $conexion->real_escape_string($_POST['Clave']);
    $direccionp= $conexion->real_escape_string($_POST['DireccionP']);
    $telefonop= $conexion->real_escape_string($_POST['TelefonoP']);
    $responsable= $conexion->real_escape_string($_POST['Responsable']);
    


    if ($nombrep=="" || $clave=="" || $direccionp=="" || $telefonop=="" || $telefonop=="" || $responsable=="" ){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica.Plantel(NombreP, Clave, DireccionP, TelefonoP, Responsable)
    VALUES ('$nombrep', '$clave', '$direccionp', '$telefonop', '$responsable')";
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