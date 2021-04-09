<?php 
    include_once('../config/config.php');
    include('registro.php');

    if(isset($_POST) && ! empty($_POST)){
        $p = new registro();

    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success">registrado </div>';
    }else{
        $mensaje = '<div class="alert alert-danger"> Error de registro! </div>';
    }
    }

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
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control"/>

    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="email" name="email" id="email" placeholder="Email" class="form-control"/>

    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="number" name="celular" id="celular" placeholder="Celular" class="form-control"/>
    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="text" name="mensaje" id="mensaje" placeholder="mensaje" class="form-control"/>
    </div>

    </div>
    <button class="btn btn-success">Enviar</button>
</form>
</div>
</body>
</html>