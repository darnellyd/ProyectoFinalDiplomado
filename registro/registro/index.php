<?php
    include_once('../config/config.php');
    include('registro.php');

    $p= new registro();
    $data = $p->getAll();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center mb-2">Lista de clientes</h2>
    <div class="row">
    <?php 
        while($registro = mysqli_fetch_object($data)){
            echo"<div>"
                

            echo"</div>"
        }
    
    
    ?>
    
    
    </div>
</div>
    
</body>
</html>