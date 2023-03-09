<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion simplificada de almacen proveedores bajas modificacion</title>
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
            padding: 4px;
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

        .button2 {
            border: 2px solid rgb(105, 10, 25);
            border-radius: 4px;
            color: navajowhite;
            background-color: black !important;
            text-align: center;
            height: 40px;
            width: 290px;

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
        <h2 class="titulo">Proveedor eliminado </h2>

<?php



        $ver = "SELECT * FROM proveedores WHERE Cod_proveedor=$codigo";
        $consulta = mysqli_query($conexion, $ver);
        $fila2=mysqli_fetch_array($consulta);

        $accion1 = "DELETE FROM proveedores WHERE Cod_proveedor=$codigo";
        $consulta1 = mysqli_query($conexion, $accion1);


echo "<table class='t1' border=3px;>";  
echo "<tr class='tr'>";
echo"<td>Cod.proveedor</td><td>nombre</td><td>Telefono</td><td>Mail</td> ";
echo"</tr><tr>" ; 

 echo "<td> " . $fila2["Cod_proveedor"]  . " </td><td>  " . $fila2["Nombre"] . "</td> <td> " . $fila2["Telefono"]  . "</td><td> " . $fila2["Mail"]  . "</td> ";
 echo"</tr>";
echo "</table>";
echo"</div>";







       // header("Location:Gestion_simplificada_de_almacen_stock.php?stock=stock");
       // echo "<a href='Gestion_simplificada_de_almacen_stock.php?stock=stock'> volver </a>";
    } else {
        $ver = "SELECT * FROM proveedores WHERE Cod_proveedor=$codigo";
        $consulta = mysqli_query($conexion, $ver);
        $consulta2 = mysqli_query($conexion, $ver);
        $fila = mysqli_fetch_array($consulta);


        if(!isset($_GET["update"])){
    ?>
        <h2 class="titulo">Modique los campos que desee </h2>
        <h5>Y haga click en aceptar cambios</h5>
        <form action="Gestion_simplificada_de_almacen_proveedores_modificacion.php">
            <input type="hidden" name="id" value="<?php echo $codigo ?>">
            <input type="hidden" name="accion" value="modificar">
            <input type="hidden" name="codi" value="<?php echo $fila['Cod_proveedor'] ?>">
            <div class="botones1 bg-dark">

                <div>
                    <label for="">Codigo proveedor  </label> <br>
                    <input class="button2" type="number" name="codi" value="<?php echo $fila['Cod_proveedor'] ?>" disabled> <br>
                    (no se puede modificar)
                </div>

                <div>
                    <label for="">Nombre Proveedor</label> <br>
                    <input class="button2" type="text" name="nombre" value="<?php echo $fila['Nombre'] ?>" required>
                </div>

                <div>
                    <label for="">Telefono proveedor</label> <br>
                    <input class="button2" type="text" name="tele" value="<?php echo $fila['Telefono'] ?>" required>
                </div>

                <div>
                    <label for="">Mail proveedor</label> <br>
                    <input class="button2" type="text" name="mail" value="<?php echo $fila['Mail'] ?>" required>
                </div>

               
            </div>
            <br><br>
            <input class="secargo" type="submit" name="update" value="ACEPTAR  &nbsp; CAMBIOS">

        </form>



        <?php
                }
            }


        if (isset($_GET["update"])) {

           

            $consulta = "UPDATE  proveedores SET Nombre='$_GET[nombre]',Telefono='$_GET[tele]',Mail='$_GET[mail]' where Cod_proveedor=$_GET[codi]";
            $hacer = mysqli_query($conexion, $consulta);


            ?>
          
            <h2 class="titulo">Tabla con los datos originales del proveedor  </h2>
          
          
          <?php              
            echo "<table class='t1' border=3px;>";  
              echo "<tr class='tr'>";
              echo"<td>Cod. proveedor</td><td>Nombre</td><td>Mail</td><td>Telefono</td> ";
              echo"</tr><tr>" ; 
              while($fila2=mysqli_fetch_array($consulta2)){
               echo "<td> " . $fila2["Cod_proveedor"]  . " </td><td>  " . $fila2["Nombre"] . "</td> <td> " . $fila2["Mail"]  . "</td><td> " . $fila2["Telefono"]  . "</td> ";
               echo"</tr>";
                }  
            
            echo "</table>";
            echo"</div>";









        $ver= "SELECT * FROM proveedores where Cod_proveedor =$_GET[codi]";
        $consulta=mysqli_query($conexion,$ver);
        
       
        ?>
          
        <h2 class="titulo">Tabla con los datos actualizados del proveedor  </h2>
      
      
      <?php              
       echo "<table class='t1' border=3px;>";  
       echo "<tr class='tr'>";
          echo"<td>Cod. proveedor</td><td>Nombre</td><td>Mail</td><td>Telefono</td> ";
          echo"</tr><tr>" ; 
        while($fila=mysqli_fetch_array($consulta)){
        
           echo "<td> " . $fila["Cod_proveedor"]  . " </td><td>  " . $fila["Nombre"] . "</td> <td> " . $fila["Mail"]  . "</td><td> " . $fila["Telefono"]  . "</td> ";
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
                    <a class="aa"href='Gestion_simplificada_de_almacen_proveedores_bajas_modificacion.php'> &nbsp;&nbsp;Volver&nbsp;&nbsp;</a>
                </h5>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>