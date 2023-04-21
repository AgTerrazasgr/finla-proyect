<?php 
$Var = 65;
$Message = "El valor de variable es:";
$Number1 = 9; $Number2 = 5; $Number3 = 75;
$Addition = $Number1 + $Number2 + $Number3;
$Subtraction = $Number1 - $Number2 - $Number3;
$Multiplication = $Number1 * $Number2 * $Number3;
$Division = $Number1 / $Number2 / $Number3;
$Radius = 2;
define ('Pi', '3.1416');
$Decrement;
$Increment;
echo "La suma de :".$Number1."+".$Number2."+".$Number3. "es: ".$Addition."<br>"; 
echo "La resta de :".$Number1."-".$Number2."-".$Number3. "es: ".$Subtraction."<br>"; 
echo "La multiplicación de :".$Number1."*".$Number2."*".$Number3. "es: ".$Multiplication."<br>";
echo "La división de :".$Number1."/".$Number2."/".$Number3. "es: ".$Division."<br>";

$Example = Pi * $Radius * $Radius;
$Message2 = "El área del círculo con el radio es: ".$Radius." por el valor de Pi que es: ".Pi." el resultado es: ".$Example;
echo $Message2."<br>";
echo var_dump (constant('Pi'));

?>