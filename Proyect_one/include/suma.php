<?php
error_reporting(0);
if (isset ($_POST['btn'])){
    $numero1=$_POST['caja1'];
    $numero2=$_POST['caja2'];
    $numero1=(int)('$numero1');
    $numero2=(int)('$numero2');
    $resultado = $numero1 + $numero2;
    $valor= $resultado;
}
else{
    echo "no existen datos";
}
?>
<body>
    <div class="col-lg-12">
        <div class="row">
            <h1 class="text-center">Suma</h1>
        </div>
        <div class="row">
            <form action="<?php echo $server[PHP_self];?>" method="POST">
        <input type="text" name="caja1" requerid>
        <input type="text" name="caja2"requerid>
        <input type="text" name="resultado" value=" <?php echo $valor;?>">
        <input type="submit" name="btn"value="calcular">
        <div class="row"><?php echo $valor?></div>
        </form>
        </div>
    </div>
