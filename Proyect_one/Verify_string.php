<?php

$Values = array(false, true, null, 89, '33', 33, '19.7', '', '', '0',0);
foreach($Values as $Value){
    echo "Es un string(";
    var_export($Value);
    echo ") = ";
    echo var_dump(is_string($Value));
    echo "<br><br>"; 
}

$Message = "Esta es una cadena de carácteres";
if(is_string($Message)){
    echo $Message."<br>";
    var_dump($Message);
}
else{
    echo "el valor de mensaje no es un string es: ". $Message;
}

?>