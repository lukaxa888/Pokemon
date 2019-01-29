<<<<<<< HEAD
<?php

include 'conexion.php';
$user_1 = $_POST['Usuario'];
$pass =$_POST['Contraseña'];
$hash = password_hash($pass, PASSWORD_DEFAULT);
//añadir usuario
$query = "INSERT INTO 'usuarios'('Nombre', 'Contraseña') VALUES ('$user_1','$hash')";
//echo $query;
//jugamos con el result
$result = mysqli_query($conn, $query);
=======
<?php

//variables de nuestro formulario htm
//$nombre = $_POST['nombre'];
//$contrasena = $_POST['contrasena'];



$user_1 = $_POST['Usuario'];
$pass =$_POST['Contraseña'];
$hash = password_hash($pass, PASSWORD_DEFAULT);
//añadir usuario
$query = "INSERT INTO 'usuarios'('Nombre', 'Contraseña') VALUES ('$user_1','$hash')";
//echo $query;
//jugamos con el result
$result = mysqli_query($conn, $query);

header('Location: '."login.php");