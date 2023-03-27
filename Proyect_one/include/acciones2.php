<?php 
//Recuperar e insertar datos 
include "conexion.php";

if (isset ($_POST['btn'])){

    
    $cplantel= $conexion->real_escape_string($_POST['Cplantel']);
    $direccion= $conexion->real_escape_string($_POST['Direccion']);
    $telefono= $conexion->real_escape_string($_POST['Telefono']);
    $responsable= $conexion->real_escape_string($_POST['Responsable']);
   


    if ( $cplantel=="" || $direccion=="" || $telefono=="" || $responsable==""){
        $Alerta ="Alguno de tus datos esta vacio";
    }
   else{
    $registro = "INSERT INTO practica1.plantel (c_plantel,direccion, Telefono, responsable)
    VALUES ('$cplantel', '$direccion', '$telefono', '$responsable')";
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