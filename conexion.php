<?php
//datos de nuestro mysql
$servername = "localhost:3306";
$username = "root";
$password ="Admin1234";
$db ="Pokemon";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
//echo "Conexion creada";
$servername = "localhost:3306";
$username = "root";
$password ="Admin1234";
$db ="Pokemon";
?>