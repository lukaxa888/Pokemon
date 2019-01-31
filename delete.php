<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="pokedex";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 


$IdUsuario = $_POST["IdUsuario"];
$IdPokemon = $_POST["IdPokemon"];

//$IdUsuario = "SELECT Id from Usuarios Where Nombre = $usuario;"
// INSERT INTO pokeusuarios (IdUsuario, IdPokemon) VALUES ($IdUsuario, $IdPokemon) 
$query = "DELETE FROM pokeusuarios (IdUsuario, IdPokemon) WHERE IdUsuario = $IdUsuario AND IdPokemon = $IdPokemon);";

//$result = mysqli_query($conn, $query);

echo "$query";