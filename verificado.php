
<?php
session_start();


include 'conexion.php';


$usuario = $_POST['user'];
$contra = $_POST['password'];

$query = "SELECT Contrasena FROM usuarios WHERE Nombre = '$usuario'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_NUM);






$hash=$row[0];


if (password_verify($contra, $hash)){
  
    
  
    $_SESSION['user'] = $usuario;
    $_SESSION['error'] = 0;
    header('Location: PokemonAplicacionesWeb/pokedex.php');
 
  

} 


else{
  $_SESSION['error'] = 1;
 echo header('Location: '.'index.php');

} 


?>
