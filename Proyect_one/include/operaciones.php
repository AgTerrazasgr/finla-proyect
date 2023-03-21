<?php
error_reporting (0);
if (isset ($_POST['btn'])){

$numero1= $_POST['Caja1'];
$numero2= $_POST['Caja2'];
$numero1=(int)$numero1;
$numero2=(int)$numero2;
$resultado = $numero1 + $numero2;
$valor = $resultado;
echo $valor;
}

else{
    echo "no existe datos";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Practica 1 | include con php</title>
</head>
<body>
<div class="col-lg-12">
    <div class="row">
        <h1 class="text-center">Suma</h1>
    </div>
    <center><div class="row">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="Caja1" required>+
    <input type="text" name="Caja2" required>=
    <input type="text" name="Result" value="<?php echo $valor;?>">
    <input type="submit" name="btn" value="Calcular">
    </form>
    </div></center>
    <center><div class="row text-center"> 
        <?php
        echo $valor;
        ?>
    </div></center>
</div>

<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
</body>
</html>