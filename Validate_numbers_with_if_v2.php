<?php
$Calification1 = 100;
$Calification2 = 90;
$Calification3 = 70;
$Calification4 = 80;
$Calification5 = 90; 
$Minimum = 70;


if(!is_numeric($Calification1)){
    echo "El valor de la Calificación 1 es: ".$Calification1." no es valor númerico.";
}
else if(!is_numeric($Calification2)) {
    echo "El valor de la Calificación 2 es: ".$Calification2." no es valor númerico.";
}
else if(!is_numeric($Calification3)) {
    echo "El valor de la Calificación 3 es: ".$Calification3." no es valor númerico.";
}
else if(!is_numeric($Calification4)) {
    echo "El valor de la Calificación 4 es: ".$Calification4." no es valor númerico.";
}
else if(!is_numeric($Calification5)) {
    echo "El valor de la Calificación 5 es: ".$Calification5." no es valor númerico.";
}


$Average = ($Calification1+$Calification2+$Calification3+$Calification4+$Calification5)/5;
if($Average >= $Minimum){
    echo "El promedio obtenido es de: ".$Average." por lo tanto estás Aprobado.";
}
else{
    echo "El promedio obtenido es de: ".$Average." por lo tanto Reprobaste.";
}


?>