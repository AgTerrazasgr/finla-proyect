<?php
if(isset($_POST['btnSumar'])){
    $Number1 = $_POST['Número1'];
    $Number2 = $_POST['Número2'];
    if(!is_numeric($Number1)){
        echo "El valor asignado a la caja 1 no es un valor númerico";
    }
    elseif(!is_numeric($Number2)){
        echo "El valor asignado a la caja 2 no es un valor númerico";
    }

    else{
        $Answer = $Number1 + $Number2;
        echo "El resultado de la suma es: ".$Answer;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width-device-width, initial-scale=1.0">
   <title>Operaciones PHP</title>
</head>    

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="Número1" placeholder="Digita un Número" required> +
    <input type="text" name="Número2" placeholder="Digita un Número" required>
    <input type="submit" value="Sumar" name="btnSumar">
</form>
</body>
</html>     