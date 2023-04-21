<?php 
$Value1 = 45;
$Value2 = 86;
$Value3 = 100;
$Person = "Mujer";
$Letter = 'c';
/*
if($Value1 >= $Value2){
    echo "Verdadero";
}
else{
    echo "Falso";
}*/
/*
if($Person == 'Mujer'){
    echo "Como el género de la variable persona es Mujer se llamara Sonia <br>";
}
else{
    echo "Como no se cumple la condición el género no es Mujer por lo tanto no le puede dar ese nombre";
}*/

/*if($Value1 >= $Value2 && $Value1 >= $Value3){
    echo "El valor de: ".$Value1." es mayor a : ".$Value3." y mayor a: ".$Value3;
}
else if($Value2 >= $Value1 && $Value2 >= $Value3){
    echo "El valor de: ".$Value2." es mayor a : ".$Value1." y mayor a: ".$Value3;
}
else if($Value3 >= $Value1 && $Value3 >= $Value2){
    echo "El valor de: ".$Value3." es mayor a : ".$Value1." y mayor a: ".$Value2;
}
else{
    echo "No se cumple ninguna de las condiciones";
}*/


if($Letter == 'a' || $Letter == 'e' || $Letter == 'i' || $Letter == 'o' || $Letter == 'u'){
    echo "El valor de la variable letra es: ".$Letter." una vocal";
}
else{
    echo "El valor de la variable letra es una consonante";
}
?>