<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../index.php");
}
?>
<!doctype html>

<html>
  <head>
    <title>Pokemon</title>
    <style>
   
   table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}  
    
    body {
    background-image: url(fondo.png);
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: fixed;
    }
    .cuerpo{
    width: 50%;
    height: 10%;
    }
.menu{
  width: 50%;
}

#dialog-window {
  height: 590px;
}

#scrollable-content {
  height: 590px;
  overflow: auto;
}

#footer {
  height: 20px;
}

nav {
  max-width: 960px;
  mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
  margin: 0 auto;
}

nav ul {
  text-align: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  padding: 18px;
  font-family: "Open Sans";
  text-transform:uppercase;
  color: rgba(0, 35, 122, 0.5);
  font-size: 18px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}

</style>
  </head>
  <body background="fondo.png">
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
    <div class="menu">
      <nav>
  <ul>
    <li>
      <a href="inicio.php">Inicio</a>
    </li>
    <li>
      <a href="pokedex.php">Pokedex</a>
    </li>
    <li>
      <a href="mispokemon.php">Mis Pokemon</a>
    </li>
    <li>
    <a href="../cerrarsesion.php">Cerrar Sesion</a>
    </li>
  </ul>
</nav>
    </div>

    <br><br><br><br>
    <img src="pikachu.gif" width="250" height="400">
    </center>
    <div id="footer">
  </div>

</div>
</div>
  </body>
</html>