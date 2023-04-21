<?php
if(isset($_POST['Enviar'])){
    $Name = $_POST['Nombre'];
    $LastName = $_POST['Apellidos'];
    $DateB = $_POST['FechaN'];
    $Email = $_POST['Email'];
    if($Name == " "){
        echo "Falta asignar un Nombre";
    }
    elseif($LastName == " "){
        echo "Falta asignar un Apellidos";
    }
    elseif($DateB == ""){
        echo "Falta asignar una Fecha";
    }
    elseif($Email == ""){
        echo "Falta asignar un Email";
    }
    else{
        echo "Tu Nombre es: ".$Name." Tus Apellidos son: ".$LastName." Tu fecha de Nacimiento es: ".$DateB." Tu email es: ".$Email;
    }
}

else{
    echo "No le diste clic al botón";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width-device-width, initial-scale=1.0">
   <title>Recuperación Datos Form</title>
</head>    

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="Nombre" placeholder="Ingrese un Nombre"/><br>
    <input type="text" name="Apellidos" placeholder="Ingrese un Apellido"/><br>
    <label for="FechaN">Selecciona tu Fecha De Nacimiento</label> <input type="date" name="FechaN"/><br>
    <input type="email" name="Email" placeholder="ejemplo@yo.com"/><br>
    <input type="submit" value="Enviar" name="Enviar"/><br>
</form>
</body>
</html>     




