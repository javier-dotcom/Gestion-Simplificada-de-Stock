<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    table {
color:navajowhite;
        text-align: center;
        margin: 30px auto;
        padding: 5px;
        /*background-color: rgb(68, 22, 5);*/
        border: 8px solid rgb(105, 10, 25);
        width: 80%;
        box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
-webkit-box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
-moz-box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
    }

    tr,
    td {
        padding: 4px;
border:double rgb(105, 10, 25) 6px ;
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

    .roja {
        background-color: red;
        width: 30px;
    }

    .verde {
        background-color: green;
        width: 30px;

    }

    .naranja {
        width: 30px;
        background-color: orange;

    }

    .inline {
        display: flex;
        justify-content: flex-start;
        background-color: white;
        width: 330px;
        margin: auto;
        padding-left: 3px;
        border-radius: 9px;
        border: 1px solid black;
    }

    .refe {
        margin-bottom: 10px;
        display: flex;
        margin: auto;
    }
    .a{
      background-color:rgb(5, 68, 22);
      color: bisque;
    }
    .b{
      background-color:rgb(68, 22, 5);



    }
    .botones1{
      margin-top: 40px;
display: flex;
flex-direction: row;
justify-content: space-evenly;

    }
    .titulo{
      margin-top: 20px;
    }
    .ordenar{
      display :flex;
      justify-content: space-evenly;
    }
    .refe{
      display: flex;
      width:36%;
      font-size: small;
      height: 30px;
    }
    .tabla{
      width: 88%;
    }
 .refe1{
  display: flex;
  align-items: center ;
  background-color: red;
  width: 70%;
display: inline;
border:double black 3px;
margin: 2px auto;
} 
 .refe2{
  display: flex;
  align-items: center ;
  background-color: orange;
  width: 70%;
display: inline;
border:double black 3px;
margin: 2px auto;

 } 
 .refe3{
  display: flex;
  align-items: center ;
  width: 70%;
display: inline;
border:double black 3px;
margin: 2px auto;
  background-color:green;
  }
  .button{
    border: 8px solid rgb(105, 10, 25);
    border-radius: 4px;
    color:navajowhite;


    
  }
  .button:hover{
    border: 8px solid rgb(5, 68, 22);
    border-radius: 4px;
    color:navajowhite;
    background-color: rgb(5, 68, 22)!important; 
    cursor:pointer;
  }

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
     a{
      text-decoration: none;
color: bisque;

     }


     .elimodi:hover{
      background-color: rgb(5, 68, 22);
     }

     .button2{
    border: 2px solid rgb(105, 10, 25);
    border-radius: 4px;
    color:navajowhite;
    background-color: black; 
    text-align: center;
    
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
    padding: 2px;
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
  <title>STOCK</title>
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
  <div class="botones1 bg-dark">
  <div>
      <form action="Gestion_simplificada_de_almacen_stock.php">
        <button class="bg-dark button" type="submit" name="stock">Ver todos los productos, modificar, eliminar o cargar stock</button>
      </form>
    </div>
    

    

  </div>



  <div class="botones1 bg-dark">
 
    <div>
      <form action="Gestion_simplificada_de_almacen_stock.php">
        <button class="bg-dark button"type="submit" name="stockescaso">Ver Prod. con Stock Escaso</button>
      </form>
    </div>
    <div>
    <form action="Gestion_simplificada_de_almacen_stock.php">
        <button class="bg-dark button"type="submit" name="stockmedio">Ver Prod. con Stock Medio</button>
      </form>
    </div>

    <div>
    <form action="Gestion_simplificada_de_almacen_stock.php">
        <button class="bg-dark button"type="submit" name="stockalto">Ver Prod. con Stock Alto</button>
      </form>
    </div>

  </div>
<?php
require_once "dalessandro_javierconectar.php";
if(isset($_GET["stock"]) or !isset($_GET["stock"]) and !isset($_GET["stockescaso"]) and !isset($_GET["stockmedio"]) and !isset($_GET["stockalto"])){


  $ver= "SELECT * FROM almacen";
  $consulta=mysqli_query($conexion,$ver);
  

  
  
  ?>
    
  <h2 class="titulo">Tabla con todos los productos  </h2>



 <p >Referencia: Colores  segùn  la cantidad   de stock</p>
 <div class="refe bg-dark">

 <div class="refe1">
<p>Escaso</p>
</div>

<div class="refe2">
<p>Intermedio</p>
</div>

<div class="refe3">
<p>Abundante</p>
</div>

  </div>










<?php              
  echo "<table border=3px;>";  
    echo "<tr class='tr'>";
    echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>   <td>Modificar</td> <td>Eliminar</td> <td>Cargar Stock</td>";
    echo"</tr><tr>" ; 
  while($fila=mysqli_fetch_array($consulta)){
  
      if($fila["stock"] < 5 ){
  
          $comodin="roja";
  
      }else if ($fila["stock"] >= 5  && $fila["stock"]<=10 ){
          $comodin="naranja";
  
  
      }else{
          $comodin="verde";                             
  
  
      }
     echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila["stock"]  . " </td> <td > <a class='button2 i' href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=modificar'> MODIFICAR </a>   </td>   <td> <a class='button2 i' href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=eliminar
     
     '> ELIMINAR </a>   </td>   <td>"?> <form action="Gestion_simplificada_de_almacen_cargar_stock.php" method="get"> <input type="hidden" name="parametro" value="codigo"> <input type="hidden" name="nombre" value="<?php echo $fila['codigo'];?>"><input class="button2 " type="submit" name="buscar" value="CARGARLE STOCK A ESTE ARTICULO"></form></tr>
 <?php
  }
  echo "</table>";
  echo"</div>";
  ?>
 



<?php

  }
  
  




 
  if(isset($_GET['stockescaso'])){


    ?>
    
    <h2 class="titulo">Tabla de productos con Stock menor a 5 unidades </h2>
    
        <?php
    $ver= "SELECT * FROM almacen WHERE Stock < 5";
    $consulta=mysqli_query($conexion,$ver);
    
    
           
    echo "<table border=3px;>";  
      echo "<tr class='tr'>";
      echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>   <td>Modificar</td> <td>Eliminar</td> <td>Cargar Stock</td>";
      echo"</tr><tr>" ; 
    while($fila=mysqli_fetch_array($consulta)){
    
        if($fila["stock"] < 5 ){
    
            $comodin="roja";
    
        }else if ($fila["stock"] >= 5  && $fila["stock"]<=10 ){
            $comodin="naranja";
    
    
        }else{
            $comodin="verde";                             
    
    
        }
       echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila["stock"]  . " </td> <td > <a class='button2 i href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=modificar'> MODIFICAR </a>   </td>   <td> <a class='button2 i href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=eliminar
       
       '> ELIMINAR </a>   </td>   <td>"?> <form action="Gestion_simplificada_de_almacen_cargar_stock.php" method="get"> <input type="hidden" name="parametro" value="codigo"> <input type="hidden" name="nombre" value="<?php echo $fila['codigo'];?>"><input class="button2 " type="submit" name="buscar" value="CARGARLE STOCK A ESTE ARTICULO"></form></tr>
   <?php
    }
    echo "</table>";
    echo"</div>";
  
}
    
    



if(isset($_GET['stockmedio'])){


?>

<h2 class="titulo">Tabla de productos con Stock entre 5 y 10 unidades </h2>

    <?php
$ver= "SELECT * FROM almacen WHERE Stock > 4 and Stock < 11";
$consulta2=mysqli_query($conexion,$ver);


           
echo "<table border=3px;>";  
echo "<tr class='tr'>";
echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>   <td>Modificar</td> <td>Eliminar</td> <td>Cargar Stock</td>";
echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta2)){

  if($fila["stock"] < 5 ){

      $comodin="roja";

  }else if ($fila["stock"] >= 5  && $fila["stock"]<=10 ){
      $comodin="naranja";


  }else{
      $comodin="verde";                             


  }
 echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila["stock"]  . " </td> <td > <a class='button2 i href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=modificar'> MODIFICAR </a>   </td>   <td> <a class='button2 i href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=eliminar
 
 '> ELIMINAR </a>   </td>   <td>"?> <form action="Gestion_simplificada_de_almacen_cargar_stock.php" method="get"> <input type="hidden" name="parametro" value="codigo"> <input type="hidden" name="nombre" value="<?php echo $fila['codigo'];?>"><input class="button2 " type="submit" name="buscar" value="CARGARLE STOCK A ESTE ARTICULO"></form></tr>
<?php
}
echo "</table>";
echo"</div>";

}







if(isset($_GET['stockalto'])){


  ?>
  
  <h2 class="titulo">Tabla de productos con Stock mayor 10 unidades </h2>
  
      <?php
  $ver= "SELECT * FROM almacen WHERE Stock  > 10";
  $consulta2=mysqli_query($conexion,$ver);
  
  
           
  echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>   <td>Modificar</td> <td>Eliminar</td> <td>Cargar Stock</td>";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta2)){

    if($fila["stock"] < 5 ){

        $comodin="roja";

    }else if ($fila["stock"] >= 5  && $fila["stock"]<=10 ){
        $comodin="naranja";


    }else{
        $comodin="verde";                             


    }
   echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila["stock"]  . " </td> <td > <a class='button2 i href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=modificar'> MODIFICAR </a>   </td>   <td> <a class='button2 i href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=eliminar
   
   '> ELIMINAR </a>   </td>   <td>"?> <form action="Gestion_simplificada_de_almacen_cargar_stock.php" method="get"> <input type="hidden" name="parametro" value="codigo"> <input type="hidden" name="nombre" value="<?php echo $fila['codigo'];?>"><input class="button2 " type="submit" name="buscar" value="CARGARLE STOCK A ESTE ARTICULO"></form></tr>
<?php
}
echo "</table>";
echo"</div>";

}


  if(!isset($_GET['stockescaso']) &&!isset($_GET['stockalto']) &&!isset($_GET['stockmedio']) &&!isset($_GET['stock'])){


    
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>