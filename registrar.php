<?php

$usuario=$_POST["user"];
$contra=$_POST["password"];

$servername="localhost:3306";
$username="root";
$password="Admin1234";
$dbname="Pokemon";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$insert = "INSERT Nombre FROM usuarios WHERE Nombre = '$usuario' AND Contraseña = '$contra'";


$query = $conn -> query("$insert");


if ($query->num_rows > 0)
{  
header('Location: funcionaprueba.html');


}


?>