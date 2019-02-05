<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../index.php");
}
include '../conexion.php';

$IdUsuario = $_SESSION['IdUsuario'];

$IdPokemon = $_POST["IdPokemon"];

//$IdUsuario = "SELECT Id from Usuarios Where Nombre = $usuario;"
// INSERT INTO pokeusuarios (IdUsuario, IdPokemon) VALUES ($IdUsuario, $IdPokemon) 
$query = "INSERT INTO pokeusuarios (IdUsuario, IdPokemon) VALUES ($IdUsuario, $IdPokemon);";

$result = mysqli_query($conn, $query);

echo "$query";