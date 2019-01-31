<?php
include 'conexion.php';
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$usuario=$_POST["user"];
$contra=$_POST["password"];

$query = "SELECT Contrasena FROM usuarios WHERE Nombre = '$usuario'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_NUM);




if($row){
    $registro = 1;
    
     echo $twig->render('registrar.html', ['registro' => $registro] );
}


else {
    
$hash=password_hash($contra, PASSWORD_DEFAULT);

$insert = "INSERT INTO usuarios(Nombre, Contrasena) VALUES ('$usuario','$hash')";
$result = mysqli_query($conn, $insert);



echo header('Location: '.'index.php');
}


?>