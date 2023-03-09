<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion simplificada de almacen articulos bajas modificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
        table {
            color: navajowhite;
            text-align: center;
            margin: 30px auto;
            padding: 5px;
            /*background-color: rgb(68, 22, 5);*/
            border: 8px solid rgb(105, 10, 25);
            width: 80%;
        }

        tr,
        td {
            padding: 6px;
            border: double rgb(105, 10, 25) 6px;
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

        .a {
            background-color: rgb(5, 68, 22);
            color: bisque;
        }

        .b {
            background-color: rgb(68, 22, 5);



        }

        .botones1 {
            margin-top: 40px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            padding-bottom: 7px;
            width: 95%;
            margin: auto;

        }

        .titulo {
            margin-top: 20px;
        }

        .ordenar {
            display: flex;
            justify-content: space-evenly;
        }

        .refe {
            display: flex;
            flex-direction: column;
            width: 12%;
            font-size: small;
        }

        .tabla {
            width: 78%;
        }

        .refe1 {
            display: flex;
            align-items: center;
            background-color: red;
            width: 70%;
            display: inline;
            border: double black 3px;
            margin: 0 auto;
        }

        .refe2 {
            display: flex;
            align-items: center;
            background-color: orange;
            width: 70%;
            display: inline;
            border: double black 3px;
            margin: 0 auto;
            margin: 2px auto;

        }

        .refe3 {
            display: flex;
            align-items: center;
            width: 70%;
            display: inline;
            border: double black 3px;
            margin: 2px auto;
            background-color: green;
        }

        .button2{
    border: 2px solid rgb(105, 10, 25);
    border-radius: 4px;
    color:navajowhite;
    background-color: black; 
    text-align: center;
    
  }
  .button2:hover{
    background-color: rgb(5, 68, 22);
    border: 2px solid rgb(5, 68, 22);
    border-radius: 4px;
    color:navajowhite;
    cursor:pointer;
    box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-webkit-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-moz-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
  }
  .i{
    padding: 2px;
  }

        .nosecargo {
            margin-top: 5px;
            text-decoration: none;
            border: 2px solid rgb(105, 10, 25);
            background-color: rgba(105, 10, 25, 0.5);

            border-radius: 4px;
            color: navajowhite;
            text-align: center;
            padding: 5px;
            width: 40%;
            margin: 5px auto;

        }

        .secargo {
            margin: 5px auto;
            background-color: rgba(5, 68, 22, 0.5);
            border: 2px solid rgb(5, 68, 22);
            width: 40%;

            border-radius: 4px;
            color: navajowhite;
            text-align: center;
            padding: 5px;
        }
        .t1{

            width: 60%;
            margin:auto;
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
    require_once "dalessandro_javierconectar.php";
    $codigo = $_GET["id"];
    $accion = $_GET["accion"];
    if ($accion == "eliminar") {
?>
        <h2 class="titulo">Articulo eliminado </h2>

<?php



        $ver = "SELECT * FROM almacen WHERE codigo=$codigo";
        $consulta = mysqli_query($conexion, $ver);
        $fila2=mysqli_fetch_array($consulta);

        $accion1 = "DELETE FROM almacen WHERE codigo=$codigo";
        $consulta1 = mysqli_query($conexion, $accion1);


echo "<table class='t1' border=3px;>";  
echo "<tr class='tr'>";
echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>  ";
echo"</tr><tr>" ; 

 echo "<td> " . $fila2["codigo"]  . " </td><td>  " . $fila2["articulo"] . "</td> <td> " . $fila2["marca"]  . "</td><td> " . $fila2["precio_compra"]  . "</td><td>  " . $fila2["precio_venta"]  . " </td>  <td > "  . $fila2["stock"]  . " </td> ";
 echo"</tr>";
echo "</table>";
echo"</div>";







       // header("Location:Gestion_simplificada_de_almacen_stock.php?stock=stock");
       // echo "<a href='Gestion_simplificada_de_almacen_stock.php?stock=stock'> volver </a>";
    } else {
        $ver = "SELECT * FROM almacen WHERE codigo=$codigo";
        $consulta = mysqli_query($conexion, $ver);
        $consulta2 = mysqli_query($conexion, $ver);
        $fila = mysqli_fetch_array($consulta);


        $ver_pro = "SELECT Nombre from proveedores where Cod_proveedor=$fila[proveedor]";
        $consulta1 = mysqli_query($conexion, $ver_pro);
        $fila1 = mysqli_fetch_array($consulta1);
        $nombre=$fila1["Nombre"];
        if(!isset($_GET["update"])){
    ?>
        <h2 class="titulo">Modique los campos que desee </h2>
        <h5>Y haga click en aceptar cambios</h5>
        <form action="Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php">
            <input type="hidden" name="id" value="<?php echo $codigo ?>">
            <input type="hidden" name="accion" value="modificar">
            <input type="hidden" name="codi" value="<?php echo $fila['codigo'] ?>">
            <div class="botones1 bg-dark">

                <div>
                    <label for="">Codigo  </label> <br>
                    <input class="button2" type="number" name="codi" value="<?php echo $fila['codigo'] ?>" disabled> <br>
                    (no se puede modificar)
                </div>

                <div>
                    <label for="">Articulo</label> <br>
                    <input class="button2" type="text" name="articulo" value="<?php echo $fila['articulo'] ?>" required>
                </div>

                <div>
                    <label for="">Marca</label> <br>
                    <input class="button2" type="text" name="marca" value="<?php echo $fila['marca'] ?>" required>
                </div>

                <div>
                    <label for="">Pre. compra</label> <br>
                    <input class="button2" type="number" name="precompra" value="<?php echo $fila['precio_compra'] ?>" required>
                </div>

                <div>
                    <label for="">Porc. Ganancias</label> <br>

                    <select class="button2 " name="ganancia" " required>
        <option value=" <?php echo $fila['ganancia'] ?>"><?php echo $fila['ganancia'] . "%"?></option>
                        <option value=20>20%</option>
                        <option value=25>25%</option>
                        <option value=30>30%</option>
                        <option value=35>35%</option>
                        <option value=40>40%</option>
                    </select>
                </div>






                <div>
                    <label for="">Cod. Proveedor</label> <br>
                    <select class="button2" name="provee">
                        <option value="<?php echo $fila['proveedor'] ?>"><?php echo $nombre ?></option>
                    <?php

                    require_once "dalessandro_javierconectar.php";
                    $consulta = "SELECT * FROM proveedores ";
                    $traer = mysqli_query($conexion, $consulta);
                    while ($fila = mysqli_fetch_array($traer)) {
                        echo " <option value=$fila[Cod_proveedor]>  $fila[Nombre] - </option>";
                    }

                    ?>
                    </select>

                    <!--<option value=1> - CODIGO 1 JAVIER - </option>-->

                </div>
            </div>
            <br><br>
            <input class="secargo" type="submit" name="update" value="ACEPTAR  &nbsp; CAMBIOS">

        </form>



        <?php
                }
            }


        if (isset($_GET["update"])) {

            $ganancia=$_GET["ganancia"];

            $preventa=$_GET["precompra"] +($_GET["precompra"]*$ganancia/100 ) ;

            $consulta = "UPDATE  almacen SET precio_compra=$_GET[precompra],articulo='$_GET[articulo]',precio_venta=$preventa,proveedor='$_GET[provee]',marca='$_GET[marca]' where codigo=$_GET[codi]";
            $hacer = mysqli_query($conexion, $consulta);


            ?>
          
            <h2 class="titulo">Tabla con el articulo original antes de la modificacion  </h2>
          
          
          <?php              
            echo "<table class='t1' border=3px;>";  
              echo "<tr class='tr'>";
              echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>  ";
              echo"</tr><tr>" ; 
            while($fila2=mysqli_fetch_array($consulta2)){
            
                if($fila2["stock"] < 5 ){
            
                    $comodin="roja";
            
                }else if ($fila2["stock"] >= 5  && $fila2["stock"]<10 ){
                    $comodin="naranja";
            
            
                }else{
                    $comodin="verde";
            
            
                }
               echo "<td> " . $fila2["codigo"]  . " </td><td>  " . $fila2["articulo"] . "</td> <td> " . $fila2["marca"]  . "</td><td> " . $fila2["precio_compra"]  . "</td><td>  " . $fila2["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila2["stock"]  . " </td> ";
               echo"</tr>";
            }
            echo "</table>";
            echo"</div>";









        $ver= "SELECT * FROM almacen where codigo =$_GET[codi]";
        $consulta=mysqli_query($conexion,$ver);
        
       
        ?>
          
        <h2 class="titulo">Tabla con el articulo actualizado  </h2>
      
      
      <?php              
        echo "<table border=3px;>";  
          echo "<tr class='tr'>";
          echo"<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>   <td>Modificar</td> <td>Eliminar</td>";
          echo"</tr><tr>" ; 
        while($fila=mysqli_fetch_array($consulta)){
        
            if($fila["stock"] < 5 ){
        
                $comodin="roja";
        
            }else if ($fila["stock"] >= 5  && $fila["stock"]<10 ){
                $comodin="naranja";
        
        
            }else{
                $comodin="verde";
        
        
            }
           echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin ."> "  . $fila["stock"]  . " </td> <td class='elimodi'> <a class='button2 i'href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=modificar'> Modificar </a>   </td>   <td> <a class='button2 i' href='Gestion_simplificada_de_almacen_articulos_bajas_modificacion.php?id=$fila[codigo] & accion=eliminar
           
           '> Eliminar </a>   </td>      ";
           echo"</tr>";
        }
        echo "</table>";
        echo"</div>";


    }




        ?>

<br>
                <h5 class="secargo  ">
                    <a class="aa" href="Gestion_simplificada_de_almacen_inicio.php"> &nbsp;&nbsp;Ir a la pagina de inicio&nbsp;&nbsp;</a>
                </h5>
                
<br>
                <h5 class="secargo  ">
                    <a class="aa"href='Gestion_simplificada_de_almacen_stock.php?stock=stock'> &nbsp;&nbsp;Volver&nbsp;&nbsp;</a>
                </h5>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>