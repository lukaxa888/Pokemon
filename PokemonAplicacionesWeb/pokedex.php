<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../login.html");
}
?>
<!doctype html>
<html>
  <head>
    <title>Pokedex</title>
    <style type="text/css">
      table {
              border-collapse: separate;
              border-spacing: 5px;
              background: #000 url("gradient.gif") bottom left repeat-x;
              color: #fff;
            }
      td, th {
              background: #fff;
              color: #000;
            }
    </style>
  </head>
  <body background="fondo.png">
    <br><br><br><br><br><br>
    <br><br><br>
    <center>
      <a href="inicio.php"><img src="inicio.png"></a>
      <br>
    <br><br>
      <table border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
        <tr>
          <td colspan="2">
            <img src="pokemons/330.png" width="180" height="180">
          </td>
          <td colspan="5">
             Su nombre proviene de las palabras en inglés fly (volar) y dragon (dragón). También podría tratarse de<br>un anagrama de la palabra dragonfly (libélula), por su parecido a estos insectos. Este mismo juego de<br>palabras entre libélula y dragón se ve más claramente en sus nombres en alemán (Libelldra) y francés (Libegon).
          </td>
        </tr>
        <tr>
          <td>
            <center>
              <img src="tipos/ground.png" width="80" height="80">
            </center>
          </td>
          <td>
            <center>
              <img src="tipos/dragon.png" width="80" height="80">
            </center>
          </td>
          <td>
            <center>
              <img src="pokemons/328.png" width="90" height="90">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/flecha.png" width="50" height="50">
            </center>
          </td>
          <td>
            <center>
              <img src="pokemons/329.png" width="90" height="90">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/flecha.png" width="50" height="50">
            </center>
          </td>
          <td>
            <center>
              <img src="pokemons/330.png" width="90" height="90">
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <img src="pokemons/331.png" width="180" height="180">
          </td>
          <td colspan="5">
             Su nombre proviene de las palabra inglesa cactus (cactus).<br>Su nombre japonés, Sabonea, procede de 仙人掌 saboten (cactus).
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <img src="tipos/grass.png" width="80" height="80">
            </center>
          </td>
          <td colspan="2">
            <center>
              <img src="pokemons/331.png" width="90" height="90">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/flecha.png" width="50" height="50">
            </center>
          </td>
          <td colspan="2">
            <center>
              <img src="pokemons/332.png" width="90" height="90">
            </center>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>