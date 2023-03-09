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
box-shadow: -1px -1px 9px 7px rgba(82,74,74,0.75);
-webkit-box-shadow: -1px -1px 9px 7px rgba(82,74,74,0.75);
-moz-box-shadow: -1px -1px 9px 7px rgba(82,74,74,0.75);

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
    .tabla{
      width: 78%;
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
    height: 40px;
    
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
span{
  font-size: x-small;
}
.c{
  color: bisque;
}

/*menu*/
.button3{
    border: 2px solid rgb(105, 10, 25);
    background-color: rgb(5, 68, 22, 0.5);
    border-radius: 4px;
    color:navajowhite;
    text-align: center;
    text-decoration: none;
    padding: 6px;
    width: 30%;
    margin-bottom: 3px;
    
  }
  .button3:hover{
    background-color: rgb(105, 10, 25, 0.4);
    border: 2px solid rgb(5, 68, 22);
    border-radius: 4px;
    color:navajowhite;
    cursor:pointer;
    padding: 6px;
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
 
  
<h2 class="titulo">Completar los campos </h2>
<h5>Para cargar nuevo producto</h5>
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
<label for="">Porc. Ganancias - <span>(20% por default)</span></label> <br>

<select class="button2 " name="ganancia"  required>
    <option value=20>Porcentaje ganancia 20%</option>
    <option value=25>25%</option>
    <option value=30>30%</option>
    <option value=35>35%</option>
    <option value=40>40%</option>
    </select> 
</div>






    <div>
    <label for="">Cod. Proveedor</label> <br>
    <select class="button2" name="provee" required>
      <?php
require_once "dalessandro_javierconectar.php";
$consulta="SELECT * FROM proveedores ";
$traer=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($traer)){
 echo" <option value=$fila[Cod_proveedor]>  $fila[Nombre] - </option>";
}

?>
    </select>

<!--<option value=1> - CODIGO 1 JAVIER - </option>-->

  </div>
  </div>
  <br><br>
<input class="button3"type="submit" name="cargar" value="CARGAR">

  </form>

  <?php
require_once "dalessandro_javierconectar.php";
    if(isset($_GET['cargar'])){
//$yaExiste="ESE CODIGO YA EXISTE ";
//$codigoproveedor=$_GET['codigoproveedor'];
$codi=$_GET["codi"];
$articulo=$_GET["articulo"];
$marca=$_GET["marca"];
$precompra=$_GET["precompra"];
$ganancia=$_GET["ganancia"];
$preventa=$precompra + (int)($precompra * $ganancia/100 ) ;
$precio_ventacar=$precompra +($precompra*$ganancia/100 ) ;
$proveedor=$_GET["provee"];
$time = time();
$fecha=date("Y-m-d (H:i:s)", $time) ;
$repetido= "SELECT codigo FROM almacen";
$controlar_repe=mysqli_query($conexion,$repetido);
$existe=0;


//$codi_pro_pro="INSERT INTO productos_proveedores (Cod_producto, Cod_proveedores) VALUES ($codi,$codigoproveedor)";
while($fila=mysqli_fetch_array($controlar_repe)){
if($fila['codigo']==$codi){
$existe+=1;
echo "<br><p class='nosecargo'>NO CARGÓ CON EXITO EL ARTICULO <br> Codigo ya existente <br> INTENTARLO NUEVAMENTE  <p>";
?>
    <form action="Gestion_simplificada_de_almacen_inicio.php">
    <input class="secargo"type="submit" value="INICIO">
    </form>
<?php
exit;

?>
<br>
<br>
<br> <br>

<form action="Gestion_simplificada_de_almacen_inicio.php">
<input class="button4" type="submit" value="INICIO">
</form>

<br>
<?php

}
}


$carga= "INSERT INTO almacen (codigo, articulo,marca, precio_compra,precio_venta,proveedor,ganancia) 
VALUES ($codi,'$articulo',  '$marca',$precompra,$preventa,$proveedor,$ganancia )";
$carga1="INSERT INTO  productos_proveedores   (Cod_producto, Cod_proveedores)  values ($codi,$proveedor)";


if($existe ==0){
mysqli_query($conexion,$carga);
mysqli_query($conexion,$carga1);
//mysqli_query($conexion,$codi_pro_pro);
echo "<br><p class='secargo'>SE DIO DE ALTA EL<br>  ARTICULO : " . $articulo  . " / MARCA : " . $marca  . " / CODIGO : " . $codi .  " </p>";
}
}
 
?>
    
 <br>
 <br>

    <form action="Gestion_simplificada_de_almacen_inicio.php">
    <input class="button4" type="submit" value="INICIO">
    </form>

 <br>
    <div>
  <nav class="nav">
    
    <a class="button4 "href="Gestion_simplificada_de_almacen_ventas.php"> VENTAS</a>
    </nav>

    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>