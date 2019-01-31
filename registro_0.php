

<?php



require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$registro = 0; // 0


    
echo $twig->render('registrar.html', ['registro' => $registro] );


