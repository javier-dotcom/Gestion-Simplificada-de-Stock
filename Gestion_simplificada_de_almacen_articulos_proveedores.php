<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Lista Proveedores Bajas Modificacion</title>
    <style>
        
  .secargo{
    margin: 5px  auto ;
    background-color: rgba(5, 68, 22, 0.5);
   border: 2px solid rgb(5, 68, 22);
width: 40%;

    border-radius: 4px;
    color:navajowhite;
    text-align: center;
    padding: 5px;
}
  .aa{
        color: navajowhite;

        text-decoration: none;
     }
         .titulo{
      margin-top: 20px;
    }
    table {
color:navajowhite;
        text-align: center;
        margin: 30px auto;
        padding: 5px;
        width: 90%;
    }

    td
     {
        padding: 9px;
border:double rgb(105, 10, 25) 4px ;
    }

    h1,
    h2 {
        text-align: center;
    }

    body {

      background-color: black;
      color: bisque;
      text-align: center;
    }

    .tr {

        background-color: rgb(5, 68, 22);
        font-size: 24px;

    }
    .button2{
    border: 2px solid rgb(105, 10, 25);
    border-radius: 4px;
    color:navajowhite;
    background-color: black; 
    text-align: center;
    text-decoration: none;
margin-bottom: 0;
    
  }
  .button2:hover{
    box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-webkit-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-moz-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
    background-color: rgb(5, 68, 22);
    border: 2px solid rgb(5, 68, 22);
    border-radius: 4px;
    color:navajowhite;
    cursor:pointer;
  }
  .i{
    padding:4px;
  }
svg:hover{
    stroke:navajowhite;


}
.bus{

display: flex;
margin: 4px 4px auto;
justify-content: space-evenly;
padding-bottom: 5px ;
}
.button4{
    border: 2px solid rgb(105, 10, 25);
    background-color: rgb(5, 68, 22, 0.5);
    border-radius: 4px;
    color:navajowhite;
    text-align: center;
    text-decoration: none;
    padding: 6px;
    width: 40%;
    margin-bottom: 3px;
    
  }
  .button4:hover{
    background-color: rgb(105, 10, 25, 0.4);
    border: 2px solid rgb(5, 68, 22);
    border-radius: 4px;
    color:navajowhite;
    cursor:pointer;
    padding: 6px;
  }
  .nav{
margin: 0 auto;
  display: flex;
  justify-content: space-evenly;
 }
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand c" href="#">Gestion simplificada de almacen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            MENU <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Gestion simplificada de almacen

</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Gestion_simplificada_de_almacen_inicio.php">INICIO</a>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               PROVEEDORES 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_alta_proveedores.php">CARGAR NUEVOS PROVEEDORES</a></li>
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_proveedores_bajas_modificacion.php">LISTADO BAJAS / MODIFICACIONES</a></li>
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_articulos_proveedores.php">LISTADO ARTICULOS / PROVEEDORES</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">LISTADO PROVEEDORES</a></li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               ARTICULOS 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_altas_bajas.php">ALTA DE ARTICULOS</a></li>
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_bajas.php"> BAJA DE ARTICULOS</a></li>
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_cargar_stock.php">CARGAR STOCK</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_stock.php">VER-MODIFICAR STOCK</a></li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               VENTAS
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_ventas.php">REGISTRAR NUEVAS VENTAS</a></li>
                                <li><a class="dropdown-item" href="#"> HISTORIAL DE VENTAS</a></li>
                                <li><a class="dropdown-item" href="Gestion_simplificada_de_almacen_historial_ventas.php">RECUENTO DE CAPITAL</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>



                    </ul>
                    
                </div>
            </div>
        </div>
    </nav>
    <br><br>
<br><h2 class="titulo">Buscar articulo para comunicarse con su proveedor </h2><br>
  <form method="get" action="Gestion_simplificada_de_almacen_articulos_proveedores.php">
            <div class="verti">
                <div class="bus bg-dark">

                    

                    <div class="bus1">
                    <label>Ingresar codigo de articulo para buscar</label><br><br>

                        <input class="button2" type="number" name="arti" required>
                    </div>


                    
                </div>

                <div class="bus1"><br>
                        <input class="button2" type="submit" name="buscar" value="Buscar">
                    </div>
                <div>

                </div>

                <div>
                <?php



 require_once  "dalessandro_javierconectar.php";


    if(isset($_GET['buscar'])){

$arti=$_GET["arti"];

//$//repetido= "SELECT * FROM almacen WHERE $parametro LIKE '$nombre%'";
$ver= "SELECT codigo as codi, articulo as arti, marca as marca, Nombre as nom, Telefono as tele, Mail as mail FROM almacen inner join proveedores   where proveedores.Cod_proveedor = almacen.proveedor";
$consulta=mysqli_query($conexion,$ver);
$existe=0;
?>
                    <div>
                      <br>
                        <h2 class="h23 w">Resultado de la busqueda </h2>

                    </div>



<?php
echo "<table border=3px;>";  
echo "<tr class='tr'>";
echo"<td>Codigo <br>articulo</td><td>Articulo</td><td>Marca</td><td>Nombre <br>proveedor</td> <td>Telefono<br> del proveedor</td> <td>Enviar<br> Whatts App</td><td>Enviar mail <br> al Proveedor</td> <td>Mail</td>";
echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){
$mensaje="Hola necesito reponer mercaderia : $fila[arti] marca $fila[marca]";


if($fila["codi"]== $arti){

    echo "<td> " . $fila["codi"]  . " </td><td>  " . $fila["arti"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["nom"]  . "</td><td> " . $fila["tele"]  . "</td><td> " ?>   
    <a href="https://wa.me/<?php echo $fila["tele"] ; ?>/?text= <?php echo $mensaje; ?>">
        <p class ="button2 i"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="38" height="38" viewBox="0 0 24 24" stroke-width="1.5" stroke="#19690A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
            </svg></p>
            
    </a> <td> <a href="mailto:<?php echo $fila['mail']; ?>">
        <p class ="button2 i"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="38" height="38" viewBox="0 0 24 24" stroke-width="2" stroke="#0A1969" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                                            <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                                            <path d="M16 4l-4 4l-4 -4" />
                                            <path d="M4 6.5l8 7.5l8 -7.5" />
                                        </svg></p> </td> <td> <?php echo $fila["mail"] ?> </td>  </tr>
    <?php
echo "</table>";


break;
}
}



    }


?>

    <br>
    <br>
     
      <nav class="nav">
        
        <a class="button4 "href="Gestion_simplificada_de_almacen_ventas.php"> VENTAS</a>
        
    
        </nav>
        <br>
        <nav class="nav">
        
       
    
        <a class="button4 "href="Gestion_simplificada_de_almacen_inicio.php"> INICIO</a> 
        </nav>

<?php


require_once "dalessandro_javierconectar.php";
    $ver= "SELECT codigo as codi, articulo as arti, marca as marca, Nombre as nom, Telefono as tele, Mail as mail FROM almacen inner join proveedores   where proveedores.Cod_proveedor = almacen.proveedor";
    $consulta=mysqli_query($conexion,$ver);

    echo "<h2 class='titulo'>Tabla con todos los articulo y sus proveedores  </h2>";
                         
    echo "<table border=3px;>";  
    echo "<tr class='tr'>";
    echo"<td>Codigo <br>articulo</td><td>Articulo</td><td>Marca</td><td>Nombre <br>proveedor</td> <td>Telefono<br> del proveedor</td> <td>Enviar<br> Whatts App</td><td>Enviar mail <br> al Proveedor</td> <td>Mail</td>";
    echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){
    $mensaje="Hola necesito reponer mercaderia : $fila[arti] marca $fila[marca]";

        echo "<td> " . $fila["codi"]  . " </td><td>  " . $fila["arti"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["nom"]  . "</td><td> " . $fila["tele"]  . "</td><td> " ?>   
        <a href="https://wa.me/<?php echo $fila["tele"] ; ?>/?text= <?php echo $mensaje; ?>">
            <p class ="button2 i"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="38" height="38" viewBox="0 0 24 24" stroke-width="1.5" stroke="#19690A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                    <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                </svg></p>
                
        </a> <td> <a href="mailto:<?php echo $fila['mail']; ?>">
            <p class ="button2 i"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="38" height="38" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0A1969" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                                                <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                                                <path d="M16 4l-4 4l-4 -4" />
                                                <path d="M4 6.5l8 7.5l8 -7.5" />
                                            </svg></p> </td> <td> <?php echo $fila["mail"] ?> </td>  </tr>
        <?php
}
echo "</table>";
?>

<br>
    <br>
     
      <nav class="nav">
        
        <a class="button4 "href="Gestion_simplificada_de_almacen_ventas.php"> VENTAS</a>
        
    
        </nav>
        <br>
        <nav class="nav">
        
       
    
        <a class="button4 "href="Gestion_simplificada_de_almacen_inicio.php"> INICIO</a> 
        </nav>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>