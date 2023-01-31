<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/movies" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a style="font-size:20px" class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
            <a style="font-size:20px" class="nav-item nav-link" href="<?php echo $url;?>/admin/inicio.php">Home</a>
            <a style="font-size:20px" class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/productos.php">Movies</a>
            <a style="font-size:20px" class="nav-item nav-link" href="<?php echo $url;?>">Site Web</a>
            <a style="font-size:20px" class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/cerrar.php">Log Out</a>
        </div>
    </nav>

    <div class="container">
      <br>
        <div class="row">