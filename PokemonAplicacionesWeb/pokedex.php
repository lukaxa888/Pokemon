<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."../index.php");
}
include '../conexion.php';

$IdUsuario = $_SESSION['IdUsuario'];
 
//$query = "SELECT NumPokemon, Foto, NomPokemon, Especie, Tipo, Tipo2 FROM pokedex order by Numpokemon";
 $query = "SELECT Pokedex.NumPokemon, Pokedex.Foto, Pokedex.NomPokemon, Pokedex.Especie, Pokedex.Tipo, Pokedex.Tipo2, PokeUsuarios.IdPokemon 
 FROM Pokedex LEFT JOIN PokeUsuarios ON Pokedex.NumPokemon = PokeUsuarios.IdPokemon Group by pokedex.nompokemon order by Pokedex.Numpokemon;";
$result = mysqli_query($conn, $query);
 



?>
<html lang="es-ES">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
  <body>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
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
    <br><br>
    <div class="cuerpo">
<div id="dialog-window">
  <div id="scrollable-content">
  <table>
  <?php
    
    while($row = mysqli_fetch_array($result)){
   
 
?>

   <tr>

    <td>
        <?php echo $row[0] ?>
    </td>
    <td>
        <img src="pokemons/<?php echo $row[1]?>" width="100px" heigth="100px">
    </td>
    <td>
        <?php echo $row[2] ?>
    </td>
    <td>
        <?php echo $row[3] ?>
    </td>
    <td>
    <img src="tipos/<?php echo $row[4]?>.png" width="80px" heigth="80px">
    </td>
    <td>
    <img src="tipos/<?php echo $row[5]?>.png" width="80px" heigth="80px">
    </td>
    <td>
    <?php
     if($row[0]!=$row[6])
     {
    ?>
    <input type=checkbox id='ckb' value='<?php echo $row[0] ?>'>
    <?php
    }
    else{
    ?>
    <input type=checkbox id='ckb' value='<?php echo $row[0] ?>' checked>
    <?php
    }
    ?>
    </td>
    
    </tr>
    
<?php




}  // while
?>
</table>  
<script>
    $(document).ready(function() {
    //set initial state.
    
    
    $("input[type='checkbox']").click(function() {
        if ($(this).is(':checked')) {
            $.post( "insert.php", {IdPokemon: $(this).val()}, function( data ) {
                console.log(data);
            });
      
            //alert("checked");
        }
        else{
            $.post( "delete.php", {IdPokemon: $(this).val()}, function( data ) {
                console.log(data);
            });
             //alert("Not checked");
            }
    });
});
</script>
  </div>

  <div id="footer">
  </div>

</div>
</div>
    </center>
  </body>
</html>
