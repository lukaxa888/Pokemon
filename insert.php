<?php
include 'conexion.php';


$IdUsuario = $_POST["IdUsuario"];
$IdPokemon = $_POST["IdPokemon"];

//$IdUsuario = "SELECT Id from Usuarios Where Nombre = $usuario;"
// INSERT INTO pokeusuarios (IdUsuario, IdPokemon) VALUES ($IdUsuario, $IdPokemon) 
$query = "INSERT INTO pokeusuarios (IdUsuario, IdPokemon) VALUES ($IdUsuario, $IdPokemon);";

//$result = mysqli_query($conn, $query);

echo "$query";