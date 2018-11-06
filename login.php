<?php

$usuario=$_POST["user"];
$contra=$_POST["password"];

$servername="localhost:3306";
$username="root";
$password="Admin1234";
$dbname="asirweb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select = "SELECT user FROM login WHERE user = '$usuario' AND pass = '$contra'";


$query = $conn -> query("$select");


if ($query->num_rows > 0)
{  
header('Location: usuarios.php');

/*
         $fila['user'].$fila['pass'];

            if($fila['user'] == $usuario && $fila['pass'] == $contra){
                echo"hola";
            }
            */
       
       //esto de arriba innecesario si entra al while es porque funciona

}


?>