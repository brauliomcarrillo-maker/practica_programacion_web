<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="descripción del sitio web">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <link rel="stylesheet" href="estilos.css">
  <title>Contacto</title>
</head>
<body>
  <?php
    include("header.php");
  ?>

  <?php
    include("menu.php");
  ?>

  <div class="abajo">
    <h1 class="titulo">We bring the best <br> massages to You</h1>
  </div>

  <div class="contenido_pagina">
    <h2>Beautifully designed, print-ready message gift certificate</h2>
    <br>
    <p>Leave your personal data, phone, select the desirable service <br> and situable time. Leave a request and check the email.</p>
  </div>
  <br><br>

  <div class="contenedor_formulario">
    <form action="" method="get" id="formulario">
      <input type="email" name="email" id="email" placeholder="Enter your email:" class="espacio">
      <input type="number" name="tel" id="tel" placeholder="Enter yor phone:">
      <br><br><br>
      <input type="text" name="service" id="service" placeholder="Select service:" class="espacio">
      <input type="text" name="time" id="time" placeholder="Select time:">
      <br><br><br>
      <button type="button" id="btn" class="btn" >Leave a Request</button>
      <br><br><br>  
    </form>
  </div>
  <br>

<?php
  include("abajo.php");
?>

<script>
  $("#btn").click(function(){
    if(!validarEmail($("#email").val())){
          alert("Favor de ingresa un correo electronico")
          $("#email").focus();
          return false;
        }

        function validarEmail(email) {
          const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return regex.test(email);
      }

       document.getElementById("formulario").submit(); 
  }
  )
</script>
</body>
</html>