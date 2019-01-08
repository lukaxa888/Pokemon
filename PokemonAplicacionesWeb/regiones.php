
<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../login.html");
}
?>
<!doctype html>
<html>
  <head>
    <title>Regiones</title>
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
      <br><br>
      <table>
        <tr>
          <td>
            <img src="region/kanto.jpg" width="220" height="200">
          </td>
          <td>
            <img src="region/johto.png" width="220" height="200">
          </td>
          <td>
            <img src="region/hoenn.png" width="220" height="200">
          </td>
          <td>
            <img src="region/sinnoh.png" width="220" height="200">
          </td>
          <td>
            <img src="region/teselia.png" width="220" height="200">
          </td>
          <td>
            <img src="region/kalos.png" width="220" height="200">
          </td>
          <td>
            <img src="region/alola.png" width="220" height="200">
          </td>
        </tr>
        <tr>
          <td>
            <center>
              <img src="iconos/kanto.png" width="180" height="94">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/johto.png" width="180" height="94">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/hoenn.png" width="180" height="94">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/sinnoh.png" width="180" height="94">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/teselia.png" width="180" height="94">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/kalos.png" width="180" height="94">
            </center>
          </td>
          <td>
            <center>
              <img src="iconos/alola.png" width="180" height="94">
            </center>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>