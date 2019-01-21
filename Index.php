

<?php
session_start();
if (isset($_SESSION['user'])) {   
    header('Location: PokemonAplicacionesWeb/inicio.php');
}
else {
// carga todas las dependencias (twig, ...)
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$error = 0; // 0
if (isset($_SESSION['error'])) {  
    $error = $_SESSION['error']; // 0
}
// Render our view






    echo $twig->render('login.html', ['error' => $error] );
}
