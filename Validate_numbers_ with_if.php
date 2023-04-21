<?php 
$Calification1 = 100;
$Calification2 = 50;
$Calification3 = 80;
$Calification4 = 70;
$Calification5 = 60; 
$Minimum = 70;
/*
if(is_numeric($Calification1) && is_numeric($Calification2) && is_numeric($Calification3) && is_numeric($Calification4) 
&& is_numeric($Calification5)){
    $Average = ($Calification1+$Calification2+$Calification3+$Calification4+$Calification5)/5;
    if($Average >= $Minimum){
        echo "<br><br> Tú promedio es de: ".$Average." por lo que estás aprobado";
    }
    else {
        echo "<br><br> Tú promedio es de: ".$Average." por lo que no estás aprobado";
    }
}
else{
    $Message = "Alguna de los valores contenidos en las calificaciones no es un valor númerico";
    echo $Message;
}*/

if(is_numeric($Calification1)){
    $Calification1 = $Calification1;
}
else{
    echo "El valor de la calificación1 no es un valor númerico";
}
if(is_numeric($Calification2)){
    $Calification2 = $Calification2;
}
else{
    echo "El valor de la calificación2 no es un valor númerico";
}
if(is_numeric($Calification3)){
    $Calification3 = $Calification3;
}
else{
    echo "El valor de la calificación3 no es un valor númerico";
}
if(is_numeric($Calification4)){
    $Calification4 = $Calification4;
}
else{
    echo "El valor de la calificación4 no es un valor númerico";
}
if(is_numeric($Calification5)){
    $Calification5 = $Calification5;
}
else{
    echo "El valor de la calificación5 no es un valor númerico";
}

$Average = ($Calification1+$Calification2+$Calification3+$Calification4+$Calification5)/5;
if($Average >= $Minimum){
    echo "Pasaste";
}
else{
    echo "Reprobaste";
}

?>