<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="descripción del sitio web">
  <link rel="stylesheet" href="estilos.css">
  <title>Inicio</title>
</head>
<body>
  <?php
    include("header.php");
  ?>

  <?php
    include("menu.php");
  ?>

  <div class="contenedor_fondoimg">
    <h2 class="times">Relaxation</h2>
    <h3 class="times">Come to us right now</h3>

    <a href="">Book Now</a>
  </div>

  <div class="contenedor_contenido">
    <h2 class="textote">Plunge into the world of <br> relaxation with us</h2>
    <br>
    <p>We invite you to visit the spa paradise and feel the power of relaxation.</p>
    <p>The unique experts will do their best for you.</p>
    <br><br><br><br>

    <div class="delimitar_contenido">
      <div class="columna">
        <img src="imagenes/foto1.jpg" alt="spa 1">
        <br><br><br>
        <h3>High-quality services</h3>
        <br>
        <p>The best receptionists will put you through the world of potiteness, professiinalism, deep calmness and high-quality services.</p>
      </div>
      <div class="columna">
        <img src="imagenes/foto2.jpg" alt="spa 2">
        <br><br><br>
        <h3>Paradise atmosphere</h3>
        <br>
        <p>Feel the wonderfull atmosphere of beauty, pleasant colors, tasty aromas and feel free to have a relax</p>
      </div>
      <div class="columna">
        <img src="imagenes/foto3.jpg" alt="spa 3">
        <br><br><br>
        <h3>Message to any taste</h3>
        <br>
        <p>Get the qualified treatment in a most preferable way. Trust our experts and experience the best message.</p>
      </div>
    </div>
  </div>

  <?php
    include("abajo.php");
  ?>
</body>
</html>