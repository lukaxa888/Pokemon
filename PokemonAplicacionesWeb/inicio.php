<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../index.php");
}
?>
<!doctype html>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="inicio.css">
    <title>Pokemon</title>

  </head>
  <body background="fondo.png">

<span><span></span></span>
<div class="wrap">
  <a href="pokedex.php"><div></div></a>
  <a href="regiones.php"><div></div></a>
  <a href="tipos.php"><div></div></a>
  <a href="#"><div></div></a>
  <a href="#"><div></div></a>
</div>

  </body>
</html>