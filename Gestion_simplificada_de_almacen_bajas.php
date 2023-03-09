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
        padding: 2px;
        /*background-color: rgb(68, 22, 5);*/
        border: 8px solid rgb(105, 10, 25);
        width: 80%;
    }

    tr,
    td {
        padding: 1px;
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
padding-bottom: 7px;
width: 95%;
margin: auto;

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
      flex-direction: column;
      width:12%;
      font-size: small;
    }
  
 .refe1{
  display: flex;
  align-items: center ;
  background-color: red;
  width: 70%;
display: inline;
border:double black 3px;
margin: 0 auto;
} 
 .refe2{
  display: flex;
  align-items: center ;
  background-color: orange;
  width: 70%;
display: inline;
border:double black 3px;
margin: 0 auto;
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
  
  .button2{
    border: 2px solid rgb(105, 10, 25);
    border-radius: 4px;
    color:navajowhite;
    background-color: black!important; 
    text-align: center;
    
  }
  .button2:hover{
    box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-webkit-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-moz-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
    border: 2px solid rgb(5, 68, 22);
    border-radius: 4px;
    color:navajowhite;
    cursor:pointer;
  }
  .nosecargo{
    margin-top: 5px;
text-decoration: none;
border: 2px solid rgb(105, 10, 25);
background-color: rgba(105, 10, 25, 0.5);

    border-radius: 4px;
    color:navajowhite;
    text-align: center;
    padding: 5px;
    width: 40%;
    margin: 5px  auto ;

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
.bus{

  display: flex;
  margin: 4px 4px auto;
  justify-content: space-evenly;
  padding-bottom: 5px ;
}
.tr{

  font-size:small;

}
.nover {
        background: rgb(197, 112, 8);
    }

    .ver {
        background: transparent;
    }
    .i{
      margin: 3px;
    }
.tab{

  width:700px;
}
.button3{
    border: 2px solid rgb(105, 10, 25);
background-color: rgba(105, 10, 25, 0.5);
    color:navajowhite;
    margin: 3px  auto  ;
}
.aa{
        color: navajowhite;

        text-decoration: none;
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
<!--
<h2 class="titulo">Completar los campos </h2>
<h5>Para cargar STOCK de algun  producto</h5>
<form action="Gestion_simplificada_de_almacen_altas_bajas.php">
  <div class="botones1 bg-dark">

  <div>
    <label for="">Codigo</label> <br>
    <input class="button2" type="number" name="codi" required>
    </div>

    <div>
    <label for="">Articulo</label> <br>
    <input class="button2" type="text" name="articulo" required>
    </div>

    <div>
    <label for="">Marca</label> <br>
    <input class="button2" type="text" name="marca" required>
    </div>

    <div>
    <label for="">Pre. compra</label> <br>
    <input class="button2" type="number" name="precompra" required>
    </div>

    <div>
    <label for="">Pre. venta</label> <br>
    <input class="button2" type="number" name="preventa" required>
    </div>
  </div>
  <br>
<input class="button2"type="submit" name="cargar" value="CARGAR">

  </form>


--> 
<?php

if(!isset($_GET['buscar']) && !isset($_GET['borrar']) ){
?>
<br><h2 class="titulo">Buscar articulo para darle de baja </h2><br>
  <form method="get" action="Gestion_simplificada_de_almacen_bajas.php">
            <div class="verti">
                <div class="bus bg-dark">

                    <div class="bus1 ">
                        <label>Elejir parámetro de busqueda</label><br><br>

                        <select class="button2" name="parametro" required>
                            <option value="">Elije Parametro</option>
                            <option value="codigo">Buscar por Codigo </option>
                            <option value="articulo">Buscar por Articulo </option>
                            <option value="marca">Buscar por Marca </option>

                        </select>
                    </div>

                    <div class="bus1">
                    <label>Ingresar las 1° letras</label><br><br>

                        <input class="button2" type="text" name="nombre" required>
                    </div>


                    
                </div>

                <div class="bus1"><br>
                        <input class="button4" type="submit" name="buscar" value="Buscar">
                    </div>
                <div>

                </div>

                <div>
                <?php

}

 require_once  "dalessandro_javierconectar.php";


    if(isset($_GET['buscar'])){

$nombre=$_GET["nombre"];
$parametro=$_GET["parametro"];

$repetido= "SELECT * FROM almacen WHERE $parametro LIKE '$nombre%'";
$controlar_repe=mysqli_query($conexion,$repetido);
$existe=0;
?>

<br>

<nav class="nav">
    
    <a class="button4" href="Gestion_simplificada_de_almacen_bajas.php"> VOLVER</a>
    

    </nav>
   

                    <div>
                      <br>
                        <h2 class="h23 w">Resultado de la busqueda por <?php echo$parametro ?></h2>

                    </div>
                    <?php  

     $cont=0;               
while($fila=mysqli_fetch_array($controlar_repe)){

  if($parametro=="articulo"){
    $comodin1="ver";
    $comodin2="nover";
    $comodin3="ver";
}else if($parametro=="marca"){
      $comodin2="ver";
    $comodin1="nover";
    $comodin3="ver";
}else{
  $comodin3="nover";
  $comodin1="ver";
  $comodin2="ver";

}
  
 

echo "<table  border=3px;>";  
  echo "<tr class='bg-dark'>";
  echo"<td class='$comodin3'>Cod_producto</td><td class='$comodin2'>Tipo</td><td class='$comodin1'>Marca</td><td>Precio compra</td>  <td>precio venta</td>  <td>Stock</td> <td>Dar de baja (el stock debe estar en 0)</td>";
  echo"</tr><tr>" ; 

   echo "<td class='$comodin3'>" . $fila["codigo"]  . " </td><td class='$comodin2'>  " . $fila["articulo"] . "</td><td class='$comodin1'> " . $fila["marca"]  . "</td><td>  " . $fila["precio_compra"]  . " </td>  <td>  " . $fila["precio_venta"]  . " </td> <td> " . $fila["stock"]  .  "</td> <td> " ?>  <form action="Gestion_simplificada_de_almacen_bajas.php"> 

    <input class="button3"type="submit" name="borrar" value="Borrar este articulo" >
    <input type="hidden" name="codigo" value="<?php echo$fila['codigo']?>">
   </form>    <?php   "</td>"  ;
   echo"</tr>";

echo "</table>";

 
}
}

if(isset($_GET["borrar"])){
$codi=$_GET["codigo"];



$consulta0="SELECT * FROM almacen WHERE codigo = $codi";
$consulta1=" DELETE  FROM almacen WHERE codigo = $codi";
$cargar0=mysqli_query($conexion,$consulta0);
$cargar=mysqli_query($conexion,$consulta1);






echo "<div class='tabla' >";
?>
  
<h2 class="titulo">Producto eliminado  </h2>


<?php              
echo "<table border=3px; class='tab'>";  
  echo "<tr class='tr'>";
  echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>  ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($cargar0)){

    if($fila["stock"] < 5 ){

        $comodin="roja";

    }else if ($fila["stock"] >= 5  && $fila["stock"]<10 ){
        $comodin="naranja";


    }else{
        $comodin="verde";


    }
   echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila["stock"]  . " </td> ";
   echo"</tr>";
echo "</table>";
echo"</div>";

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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>