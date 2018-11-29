<?php

$usuario=$_POST["user"];
$contra=$_POST["password"];
$hash=password_hash($contra, PASSWORD_DEFAULT);

$servername="localhost:3306";
$username="root";
$password="Admin1234";
$dbname="Pokemon";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$insert = "INSERT INTO usuarios(Nombre, Contraseña) VALUES ('$usuario','$hash')";
//echo $insert;
$query = $conn -> query("$insert");



  
header('Location: funcionaprueba.html');





?>