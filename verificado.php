<?php
//datos de nuestro mysql
$servername = "localhost:3306";
$username = "root";
$password ="";
$db ="pokemon";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
//echo "Conexion creada";

$name = $_POST['Usuario'];
$pass = $_POST['Contraseña'];

$query = "SELECT Contraseña FROM usuarios WHERE Nombre = '$name'";
$result = mysqli_query($conn, $query);
 
$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0];
$hash=$row[0];


if (password_verify($pass, $hash)){
  echo header('Location: '.'arduino_2.php');
}
else{
  echo header('Location: '.'login.php');
}

