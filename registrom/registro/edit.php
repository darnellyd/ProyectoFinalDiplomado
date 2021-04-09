<?php 
include('../config/config.php');
include('registro.php');

$p = new registro();
$registro = $p->getOne($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
</head>
<body>
<div class="container">
    <?php 
        if(isset($mensaje)){
            echo $mensaje;
        }
    ?>
    <h2 class="text-center mb-2">Contáctenos</h2>
<form method="post" enctype="multipart/form-data">

    <div class="row mb-2">
        <div class="col">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control"
            value="<?= $registro->nombre?>"/>

    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="email" name="email" id="email" placeholder="Email" class="form-control"
            value="<?= $registro->email?>"/>

    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="number" name="celular" id="celular" placeholder="Celular" class="form-control"
            value="<?= $registro->celular?>"/>
    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="text" name="mensaje" id="mensaje" placeholder="mensaje" class="form-control"
            value="<?= $registro->mensaje?>"/>
    </div>

    </div>
    <button class="btn btn-success">Enviar</button>
</form>
</div>
</body>
</html>