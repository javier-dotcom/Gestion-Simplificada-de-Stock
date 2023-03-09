<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Historial de ventas</title>
    <style>
    table {
color:navajowhite;
        text-align: center;
        margin: 30px auto;
        padding: 5px;
        /*background-color: rgb(68, 22, 5);*/
        border: 8px solid rgb(105, 10, 25);
        width: 80%;
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
  .fo {
        display: flex;
        justify-content: space-between;
        width: 80%;
        margin: auto;
        padding: 15px;
    }
    .i{
        padding: 4px;
    }
    h2 span{
        background-color: rgb(5, 68, 22);
        padding: 4px;
        border-radius: 5px;

    }
    .form{

        padding: 4px;
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
    <?php
    $id=$_GET["id"];
    if($id=="historial"){ 
    ?>
    <br><br>

<h2>Consultar historial de ventas </h2>

<div class="form bg-dark">


        <form method="get" action="Gestion_simplificada_de_almacen_historial_ventas.php">
            <div class="fo">
<input type="hidden" name="id" value="historial">
                <div>
                    <h4>Ver los</h4>
                    <select class="button2 i" name=cant required>
                        <option value=1> 1 articulos</option>
                        <option value=2> 2 articulos</option>
                        <option value=3> 3 articulos</option>
                        <option value=4> 4 articulos</option>
                        <option value=5> 5 articulos</option>
                        <option value=6> 6 articulos</option>
                    </select>
                </div>
                <div>
                    <h4>Mas o menos vendidos</h4>
                    <select class="button2 i" name=masomenos required>
                        <option value="DESC">Mas vendidos</option>
                        <option value="ASC">Menos vendidos</option>

                    </select>
                </div>




                <div>

                    <h4>Desde</h4>
                    <input class="button2 i" type="date" name="desde" required>
                </div>

                <div>
                    <h4>Hasta</h4>
                    <input class="button2 i" type="date" name="hasta" required>
                </div>


            </div>

            <div>
                <input class="button2 i" type="submit" name="enviar" value="CONSULTAR">
            </div>
        </form>
    </div>



<br><br>







    <?php


    
    require_once "dalessandro_javierconectar.php";
    if(isset($_GET["enviar"])){

   $desde=$_GET['desde'];
   $hasta=$_GET['hasta'];
   $masomenos=$_GET['masomenos'];
   $cant=$_GET['cant'];
   $masomenos=="ASC"? $opcion="MENOS VENDIDOS" : $opcion="MAS VENDIDOS";


$resul="SELECT SUM(cantidad_vendida)  AS total_ventas ,  cod_producto AS codi_producto FROM 
fecha_venta f   WHERE fecha BETWEEN '$desde' AND '$hasta' 
GROUP BY cod_producto  ORDER BY total_ventas $masomenos
";


$consulta=mysqli_query($conexion,$resul);
$cont=0;

$resul1="SELECT * FROM almacen ";
$consulta1=mysqli_query($conexion,$resul1);

//$f=mysqli_fetch_array($consulta1);



?> <h2>Tabla con los <?php echo $cant . " articulos " . $opcion ?> ENTRE <?php echo " EL <span>" . $desde . "</span> Y EL <span> " . $hasta ."</span> </h2>";
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Codigo producto</td><td>Cantidad Vendida</td> <td>Tipo</td> <td>Marca</td>";
  echo"</tr><tr>" ; 


  while($fi=mysqli_fetch_array($consulta)){
    
    while($f=mysqli_fetch_array($consulta1)){

    if($f["codigo"] == $fi["codi_producto"]){
       $n= $f["marca"];
        $t=$f["articulo"];
   
    }
    
    }

   echo "<td> " . $fi["codi_producto"]  . " </td><td>  " . $fi["total_ventas"] . "</td> <td>  " . $t . "</td> <td>  " . $n . "</td> ";
   echo"</tr>";

 $cont++;
if($cont==$cant){break;}
}
echo "</table>";



$ver= " SELECT * FROM fecha_venta WHERE fecha BETWEEN '$desde' AND '$hasta'";

$ver_sin_compra= " SELECT * FROM almacen";

$consulta=mysqli_query($conexion,$ver);

//mostrando los articulos sin ventas


if($masomenos=="ASC"){
    $consulta1=mysqli_query($conexion,$ver_sin_compra);
    $consulta2=mysqli_query($conexion,$ver);
    $array=array();
    
    while($fila2=mysqli_fetch_array($consulta2)){
    array_push($array,$fila2["cod_producto"]);
    }
    echo " <h2> <span>ATENCION</span> tabla de atículos <span>'SIN NINGUNA VENTA'</span> en este periodo</h2>";

    echo "<table border=3px;>";  
      echo "<tr class='tr'>";
      echo"<td>Codigo producto</td><td>TIPO</td><td>MARCA</td> <td>STOK</td> ";
      echo"</tr><tr>" ; 
      while($fila1=mysqli_fetch_array($consulta1)){
        if (!in_array($fila1["codigo"],$array)){
    
       echo "<td> " . $fila1["codigo"]  . " </td><td>  " . $fila1["articulo"] . "</td><td> " . $fila1["marca"]  .    "</td><td> " . $fila1["stock"]  .    "</td>";
       echo"</tr>";
    
    
    }
    
    
    }
    echo "</table>";
    
    }
    

//FIN de mostrando los articulos sin ventas                                     

?> <h2>REGISTROS DE TODAS LAS VENTAS ENTRE <?php echo " EL <span>" . $desde . "</span> Y EL <span> " . $hasta ."</span> </h2>";
                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Codigo producto</td><td>Cantidad Vendida</td><td>Fecha</td>  ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

   echo "<td> " . $fila["cod_producto"]  . " </td><td>  " . $fila["cantidad_vendida"] . "</td><td> " . $fila["fecha"]  . "</td>";
   echo"</tr>";


}
echo "</table>";

}

    }else{

        require_once "dalessandro_javierconectar.php";

$consultacom="SELECT SUM(stock*precio_compra) AS totalcom
FROM almacen";

$traer=mysqli_query($conexion,$consultacom);

$fila=mysqli_fetch_array($traer);

$recuento_segun_compra= $fila["totalcom"];


echo "<br>";

$consultaven="SELECT SUM(stock*precio_venta) AS totalven
FROM almacen";

$traer=mysqli_query($conexion,$consultaven);

$fila=mysqli_fetch_array($traer);

$recuento_segun_venta= $fila["totalven"];


echo "<br>";

$consultaven="SELECT SUM(stock) AS totalarticulos
FROM almacen";

$traer=mysqli_query($conexion,$consultaven);

$fila=mysqli_fetch_array($traer);

$recuento_total_articulos= $fila["totalarticulos"];








echo "<h2> CAPITAL TOTAL</h2> ";




echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Recuento total de capital según lo invertido</td><td>Recuento de capital potencial en ventas</td> <td>Recuento total de articulos</td> ";
  echo"</tr><tr>" ; 

   echo "<td> " . $recuento_segun_compra . " $ </td><td>  " . $recuento_segun_venta . " $</td><td>  " . $recuento_total_articulos . " articulos</td>";
   echo"</tr>";


echo "</table>";
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