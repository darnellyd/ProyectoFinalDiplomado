<?php

include('config/functions.php');
getFolderProyect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contàctenos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="images/MAKOAGRO.png" alt="" width="180" height="80" class="d-inline-block align-text-top">
    </a>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quienes somos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Equipos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Retroexcavadoras</a></li>
            <li><a class="dropdown-item" href="#">Retrocargador</a></li>
            <li><a class="dropdown-item" href="#">Vibro compactador</a></li>
            <li><a class="dropdown-item" href="#">Motoniveladora</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>/registro/add.php">Contáctenos</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</div>

    
</body>
</html>