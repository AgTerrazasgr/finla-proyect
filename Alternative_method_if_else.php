<?php
define('Tope', 2023);
define('Meses', 12);
define('Días', 365);
define('Horas', 24);
$Born = "2002";
$Most = 18; 
$Age = Tope - $Born; 
$Months = $Age + Meses;
$Days = $Age * Días;
$Hours = Días * Horas * $Age;
if(is_numeric($Born) && is_numeric($Most) && is_numeric($Age) 
&& is_numeric($Months) && is_numeric($Days) && is_numeric($Hours)):
    if($Age >= $Most):
        echo "Eres mayor de edad por que ";
        echo "Tienes: ".$Age."Años de vida</br>";
        echo "Son: ".$Months."Meses de vida</br>";
        echo "Son: ".$Days."Días de vida</br>";
        echo "Son: ".$Hours."Horas de vida</br>";
    else:
        echo "Eres menor de edad por que ";
        echo "Tienes: ".$Age."Años de vida</br>";
        echo "Son: ".$Months."Meses de vida</br>";
        echo "Son: ".$Days."Días de vida</br>";
        echo "Son: ".$Hours."Horas de vida</br>";
    endif;
else:
    echo "¿Alguna de los valores asignados en las variables son valores númericos?";
endif;
?>