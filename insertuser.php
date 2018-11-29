<?php

//variables de nuestro formulario htm
//$nombre = $_POST['nombre'];
//$contrasena = $_POST['contrasena'];


//datos de mysql
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

  //leer informacion del formulario
$user_1 = $_POST['Usuario'];
$pass =$_POST['Contraseña'];
$hash = password_hash($pass, PASSWORD_DEFAULT);
//añadir usuario
$query = "INSERT INTO 'usuarios'('Nombre', 'Contraseña') VALUES ('$user_1','$hash')";
//echo $query;
//jugamos con el result
$result = mysqli_query($conn, $query);
header('Location: '."login.php");