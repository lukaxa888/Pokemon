
<?php
session_start();
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

$usuario = $_POST['user'];
$contra = $_POST['password'];

$query = "SELECT Contrasena FROM usuarios WHERE Nombre = '$usuario'";
$result = mysqli_query($conn, $query);
 
$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0];
$hash=$row[0];


if (password_verify($contra, $hash)){
  
    
  
    $_SESSION['user'] = $usuario;
    $_SESSION['error'] = 0;
    header('Location: PokemonAplicacionesWeb/inicio.php');
 
  

} 

else{
  $_SESSION['error'] = 1;
 echo header('Location: '.'index.php');

} 


?>
