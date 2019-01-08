<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../login.html");
}
?>

<!doctype html>
<html>
  <head>
    <title>Tipos</title>
  </head>
  <body background="fondo.png">
    <br><br><br><br><br><br>
    <br><br><br>
    <center>
        <table>
     <tr>
      <td>
        <a href="inicio.php"><img src="inicio.png"></a>
      </td>
    </tr>
   </table>
   <br>
   <table>
    <tr>
      <td>
        <a href="water.php"><img src="tipos/water.png" width="150" height="201"></a>
      </td>
      <td>
        <img src="tipos/steel.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/rock.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/psy.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/poison.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/grass.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/ice.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/fairy.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/fly.png" width="150" height="201">
      </td>
      
    </tr>
    <tr>
      <td>
        <img src="tipos/normal.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/ice.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/ground.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/ghost.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/fire.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/fight.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/dragon.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/dark.png" width="150" height="201">
      </td>
      <td>
        <img src="tipos/bug.png" width="150" height="201">
      </td>
    </tr>
   </table>
 </center>
  </body>
</html>