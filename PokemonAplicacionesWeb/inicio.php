<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../index.php");
}
?>
<!doctype html>

<html>
  <head>
    <title>Pokemon</title>
  </head>
  <body background="fondo.png">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
    <form action="../cerrarsesion.php" method="get">
      <button >Cerrar Sesion</button>
    </form>
</center>
  </body>
</html>