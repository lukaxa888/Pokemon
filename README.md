## Contenido de la pagina

-Una base de datos .sql
-Una base de datos .accdb
-Varios PHP para el funcionamiento de la pagina


## Pasos para poder usar la pagina (Front End)

1- Meter el Pokemon.sql en tu base de datos Mysql

2- Entrar a index.php


3- Tienes 2 opciones
    
    1. Inicias sesion
    2. Si no tienes cuenta te registras

4- Al iniciar sesion te mete en la pagina

5- Lo primero que veras al entrar sera un menú con un gif.

6- Tienes tres opciones.
    1. Pokedex (Aparecen los pokemons existentes y puedes marcar los que tienes tu)
    2. Mis pokemons (Son los pokemons que has marcado previamente).
    3. Cerrar sesion (Te cierra sesion y te manda a index.php)



## Como funciona la pagina (Back End)

Todo el back end, empieza en Index.php.
En el Index.php, tenemos el código para iniciar sesión, que una vez iniciada la sesion nos lleva a inicio.php.

El inicio funciona de la siguiente forma:

1- Iniciamos sesion metiendo usuario y contraseña, de hay pasa a verficado.php para ver si el usuario y contraseña estan en la base de      datos de usuarios. Al iniciar sesión si ponemos mal el usuario y/o la contraseña nos salta un mensaje de error echo con twig:

     {% if error == 1 %}
     <p>El usuario o contraseña es erroneo</p>
     {% endif %}
    
2- Si no estamos registrados, vamosa "Registrar", nos llevara a registro.php. Aquí pueden pasar dos cosas:
    1. Al registrarnos nos mandara a logint.html para logearnos.
    2. Si ponemos el nombre de usuario repetido al de otro, no saltara un error. Este error esta echo con twig, este es el codigo:
    
    {% if registro == 1 %}
    <p>Ya existe un usuario con ese nombre</p>
    {% endif %}ç
    
3- Una vez iniciada la sesión con nuestro usuario, estaremos en Inicio.php.
    - Aquí podemos una imagen y un gif de bienvenida. 
    - En el menu de arriba podemos ir cambiando de paginas entre Inicio.php, pokedex.php y mispokemon.php. La ultima es                       cerrarsesion.php, es para cerrar tu sesion.
    - En Pokedex.php, podemos ver la lista de todos los pokemon, sus tipos, nombres... y podemos marcar con un checkbox si tenemos ese         pokemon usando un Jquery.
    - En mispokemon.php se muestran los pokemon marcados por el usuario.
    - Cerrarsesion.php, nos saca de nuestra sesion y nos vuelve a mandar index.php con el siguiente codigo:
    
        <?php
        session_start();
        unset($_SESSION['user']);
        echo header('Location: '.'index.php');
        ?>
