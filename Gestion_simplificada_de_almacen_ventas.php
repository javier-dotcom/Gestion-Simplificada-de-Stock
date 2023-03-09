<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        table {
            color: navajowhite;
            text-align: center;
            margin: 30px auto;
            padding: 2px;
            box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
-webkit-box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
-moz-box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
            border: 8px solid rgb(105, 10, 25);
            width: 80%;
        }

        tr,
        td {
            padding: 1px;
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

        .button2 {
            border: 2px solid rgb(105, 10, 25);
            border-radius: 4px;
            color: navajowhite;
            background-color: black !important;
            text-align: center;

        }

        .button2:hover {
            box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-webkit-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
-moz-box-shadow: -1px -1px 9px 1px rgba(28,138,28,0.75);
            border: 2px solid rgb(5, 68, 22);
            border-radius: 4px;
            color: navajowhite;
            cursor: pointer;
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
            text-decoration: none;
            border-radius: 4px;
            color: navajowhite;
            text-align: center;
            padding: 5px;
        }

        .bus {

            display: flex;
            margin: 4px 4px auto;
            justify-content: space-evenly;
            padding-bottom: 5px;
        }

        .tr {

            font-size: small;

        }

        .nover {
            background: rgb(197, 112, 8);
        }

        .ver {
            background: transparent;
        }

        .i {
            margin: 3px;
        }

        .tab {

            width: 700px;
        }

        .button3 {
            border: 2px solid rgb(105, 10, 25);
            background-color: rgba(105, 10, 25, 0.5);
            color: navajowhite;
            margin: 3px auto;
            text-align: center;
        }

        .llamar {
            border: 2px solid rgb(105, 10, 25);
            background-color: rgba(105, 10, 25, 0.5);
            padding-top: 20px;
            display: flex;
            justify-content: space-around;
            width: 40%;
            margin: auto;
            height: 80px;

        }

        .llamar svg:hover {

            stroke: #ECEDD0;


        }

        .an {

            width: 250px;
            height: 50px;
        }

        .mas{
            width: 200px;
        }
     .aa{
        color: navajowhite;

        text-decoration: none;
     }
     .c{
        color: bisque;
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
    <title>Ventas</title>
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

    if (!isset($_GET['buscar']) && !isset($_GET['vender'])) {
    ?>
        <br>
        <h2 class="titulo">Buscar articulo para vender </h2><br>
        <form method="get" action="Gestion_simplificada_de_almacen_ventas.php">
            <div class="verti">
                <div class="bus bg-dark">

                    <div class="bus1 ">

                        <label>Elejir parámetro de busqueda</label><br><br>

                        <select class="button2 an" name="parametro" required>
                            <option value="">Elije Parametro</option>
                            <option value="codigo">Buscar por Codigo </option>
                            <option value="articulo" selected>Buscar por Articulo </option>
                            <option value="marca">Buscar por Marca </option>

                        </select>
                    </div>

                    <div class="bus1">
                        <label>Ingresar las 1° letras</label><br><br>

                        <input class="button2 an" type="text" name="nombre" required>
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


            if (isset($_GET['buscar'])) {

                $nombre = $_GET["nombre"];
                $parametro = $_GET["parametro"];

                $repetido = "SELECT * FROM almacen WHERE $parametro LIKE '$nombre%'";
                $controlar_repe = mysqli_query($conexion, $repetido);
                $existe = 0;
                ?>
                <br>
 
  
 <nav class="nav">
 


 <a class="button4 "href="Gestion_simplificada_de_almacen_ventas.php"> BUSCAR OTROS ARTICULOS</a> 
 </nav>
                    <div>
                        <br>
                        <h2 class="h23 w">Resultado de la busqueda por <?php echo $parametro ?></h2>

                    </div>
                    <?php

                    $cont = 0;
                    while ($fila = mysqli_fetch_array($controlar_repe)) {
                        $producto=$fila["articulo"];

                        if ($parametro == "articulo") {
                            $comodin1 = "ver";
                            $comodin2 = "nover";
                            $comodin3 = "ver";
                        } else if ($parametro == "marca") {
                            $comodin2 = "ver";
                            $comodin1 = "nover";
                            $comodin3 = "ver";
                        } else {
                            $comodin3 = "nover";
                            $comodin1 = "ver";
                            $comodin2 = "ver";
                        }



                        echo "<table  border=3px;>";
                        echo "<tr class='bg-dark'>";
                        echo "<td class='$comodin3'>Cod_producto</td><td class='$comodin2'>Tipo</td><td class='$comodin1'>Marca</td><td>Precio compra</td>  <td>precio venta</td>  <td>Stock</td> <td>Ingresar cantidad de articulos vendidos y Registrar la venta</td>";
                        echo "</tr><tr>";

                        echo "<td class='$comodin3'>" . $fila["codigo"]  . " </td><td class='$comodin2'>  " . $fila["articulo"] . "</td><td class='$comodin1'> " . $fila["marca"]  . "</td><td>  " . $fila["precio_compra"]  . " </td>  <td>  " . $fila["precio_venta"]  . " </td> <td> " . $fila["stock"]  .  "</td> <td> " ?> <form action="Gestion_simplificada_de_almacen_ventas.php">
                            <input class="button3" type="number" name="cant" placeholder="Cantidad de articulos">
                            <input class="button3" type="submit" name="vender" value="Registrar venta">
                            <input type="hidden" name="codigo" value="<?php echo $fila['codigo'] ?>">
                            <input type="hidden" name="stock" value="<?php echo $fila['stock'] ?>">
                            <input type="hidden" name="articulo" value="<?php echo $fila['articulo'] ?>">
                        </form> <?php "</td>";
                                echo "</tr>";

                                echo "</table>";
                                echo "<br>";
                            }
                        }

                        if (isset($_GET["vender"])) {
                            $codi = $_GET["codigo"];
                            $stock = $_GET["stock"];
                            $cant = $_GET["cant"];
                            $nuevo_stock = $stock - $cant;
$datos_produc="SELECT * FROM almacen where codigo=$codi";
$conexion6=mysqli_query($conexion,$datos_produc);
$fila6=mysqli_fetch_array($conexion6);
$artic=$fila6["articulo"];
$marca=$fila6["marca"];
$consulTele=" SELECT * FROM proveedores   INNER JOIN  productos_proveedores INNER JOIN almacen ON proveedores.Cod_proveedor = productos_proveedores.Cod_proveedores   AND productos_proveedores.Cod_producto = $codi";
$consulta4=mysqli_query($conexion,$consulTele);
$fila4=mysqli_fetch_array($consulta4);
$tele=$fila4["Telefono"];


//$resul= " SELECT Telefono FROM proveedores   INNER JOIN  productos_proveedores INNER JOIN productos ON proveedores.Cod_proveedor = productos_proveedores.Cod_proveedores   AND productos_proveedores.Cod_producto = $codi";



                            echo "<div class='tabla' >";


                            $consulta0 = "SELECT * FROM almacen WHERE codigo = $codi";
                            $cargar0 = mysqli_query($conexion, $consulta0);

                            while ($fila = mysqli_fetch_array($cargar0)) {

                                if ($fila["stock"] < 5) {

                                    $comodin = "roja";
                                } else if ($fila["stock"] >= 5  && $fila["stock"] < 10) {
                                    $comodin = "naranja";
                                } else {
                                    $comodin = "verde";
                                }

                                if ($fila['codigo'] == $codi) {

                                    if ($fila["stock"] < 1) {
                                        echo " <br><br><h3 class='nosecargo'>Atencion artículo sin STOCK.<br> Elija el medio y haga su pedido </h3>";
                                        $mensaje = "Hola '$fila4[Nombre]' Necesitamos reponer - Productos : $artic - Marca: $marca - Comuniquese con nosotros por favor";
                                        echo "<br><h3 class='nosecargo'>El proveedor de este articulo es<br>  $fila4[Nombre]</h3>";

                                        
                                         ?>
                                <br>
                                <div class='llamar '>


                                    <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#19690A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                                            </svg></p>
                                    </a>
                                    <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#690A19" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="12" cy="11" r="3" />
                                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                            </svg></p>
                                    </a>




                                    <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0A1969" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                                                <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                                                <path d="M16 4l-4 4l-4 -4" />
                                                <path d="M4 6.5l8 7.5l8 -7.5" />
                                            </svg></p>
                                    </a>
                                </div>
                            <?php

                                    } else if ($fila["stock"] < $cant) {
                                        echo " <br><br><h3 class='nosecargo'>Atencion no hay STOCK para esta venta.<br> Elija el medio y haga su pedido </h3>";
                                        $mensaje = "Hola $fila4[Nombre] Necesitamos reponer - Productos : $artic - Marca: $marca - Comuniquese con nosotros por favor";
                                        echo "<br><h3 class='nosecargo'>El proveedor de este articulo es<br>  $fila4[Nombre]</h3>";
                                        ?>
                                        <br>
                                        <div class='llamar '>
        
        
                                            <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                                <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#19690A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                                                    </svg></p>
                                            </a>
                                            <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                                <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#690A19" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <circle cx="12" cy="11" r="3" />
                                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                                    </svg></p>
                                            </a>
        
        
        
        
                                            <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                                <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0A1969" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                                                        <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                                                        <path d="M16 4l-4 4l-4 -4" />
                                                        <path d="M4 6.5l8 7.5l8 -7.5" />
                                                    </svg></p>
                                            </a>
                                        </div>
                                        <?php
                                    } else {

                                        $time = time();
                                        $fechaHoy=date("Y-m-d (H:i:s)", $time) ;
                                        $consulta5="INSERT INTO fecha_venta (cantidad_vendida,cod_producto,fecha) VALUES ('$cant','$codi','$fechaHoy' )";

                                        $consulta1 = " UPDATE  almacen SET stock =$nuevo_stock  WHERE codigo = $codi";
                                        $cargar = mysqli_query($conexion, $consulta1);
                                        $cargar2 = mysqli_query($conexion, $consulta5);



                                        if(mysqli_affected_rows($conexion)==1){
                                            if($nuevo_stock<6){
                                        echo " <br><h3 class='nosecargo'> Atencion se descontó  " . $cant . "  unidades del artìculo codigo " .  $codi  . " <br>" . "El stock ahora es escaso " .  $nuevo_stock   . " <br>Si desea reponer el producto, elija como comunicarse.  </h3> "  ;
                                        
                                    }
                                }
                                $mensaje = "Hola $fila4[Nombre]  Necesitamos reponer - Productos : $artic - Marca: $marca - Comuniquese con nosotros por favor";
                                echo "<br><h3 class='nosecargo'>El proveedor de este articulo es<br>  $fila4[Nombre]</h3>";

                                ?>
                                <br>
                                <div class='llamar '>


                                    <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#19690A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                                            </svg></p>
                                    </a>
                                    <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#690A19" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="12" cy="11" r="3" />
                                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                            </svg></p>
                                    </a>




                                    <a href="https://wa.me/<?php echo $tele; ?>/?text= <?php echo $mensaje; ?>">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0A1969" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                                                <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                                                <path d="M16 4l-4 4l-4 -4" />
                                                <path d="M4 6.5l8 7.5l8 -7.5" />
                                            </svg></p>
                                    </a>
                                </div>
                                <?php




                           /* ?>
                                <br>
                                <h2 class="secargo">Se vendió <?php echo $cant ?> unidades  <br> Stock actual del articulo codigo <?php echo $codi ?></h2>


                    <?php*/
                                        echo "<table border=3px; class='tab'>";
                                        echo "<tr class='tr'>";
                                        echo "<td>Cod. producto</td><td>Articulo</td><td>Marca</td><td>Pre. Compra</td><td>Pre. Venta</td>  <td>Stock</td>  ";
                                        echo "</tr><tr>";

                                        echo "<td> " . $fila["codigo"]  . " </td><td>  " . $fila["articulo"] . "</td> <td> " . $fila["marca"]  . "</td><td> " . $fila["precio_compra"]  . "</td><td>  " . $fila["precio_venta"]  . " </td>  <td class=" . $comodin . "> "  . $nuevo_stock . " </td> ";
                                        echo "</tr>";
                                        echo "</table>";
                                        echo "</div>";
                                    }
                                }
                            }
                    ?>
                    <br>
                    <form action="Gestion_simplificada_de_almacen_ventas.php">
                        <input class="button4"  type="submit" value="VOLVER">
                    </form>


                <?php

                        }

                ?>





<br>
<br>
 
  
    <nav class="nav">
    
   

    <a class="button4 "href="Gestion_simplificada_de_almacen_inicio.php"> INICIO</a> 
    </nav>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>