<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylsheet" type="type/css" href="css/bootstrap.min.css">
    <title>Registro Plantel</title>
</head>
<body>

<div class="container m=0 content-justify-center py-2">
<div class="row text-center">
    <h1 class="text-success"> Registro </h1>
</div>
<form id="Registro" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="NombreL" class="form-control" placeholder="Nombre Lugar" required>
</div>    
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <textarea class="form-control" Name="Descripcion"> Descripcion </textarea>
</div>    
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="TelefonoL" class="form-control" placeholder="Telefono Lugar" required>
</div>    
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="email" name="EmailL" class="form-control" placeholder="Email Lugar" required>
</div>    
</div>


<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="Facebook" class="form-control" placeholder="Facebook" required>
</div>    
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="Horario" class="form-control" placeholder="Horario" required>
</div>    
</div>



<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="submit" value="Registrar" name="btn" class="btn btn-success">
</div>    
</div>

</div>
    
</form>



<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<?php include 'include/acciones l.php' ?>
<?php include 'include/conexion.php' ?>
</body>
</html>