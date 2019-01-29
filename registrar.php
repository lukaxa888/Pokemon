<?php
include 'conexion.php';




$usuario=$_POST["user"];
$contra=$_POST["password"];
$hash=password_hash($contra, PASSWORD_DEFAULT);


$insert = "INSERT INTO usuarios(Nombre, Contrasena) VALUES ('$usuario','$hash')";
//echo $insert;
$query = $conn -> query("$insert");

echo header('Location: '.'index.php');



?>


