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
<h5>Para dar el alta a nuevos proveedores</h5>
<form action="Gestion_simplificada_de_almacen_alta_proveedores.php">
  <div class="botones1 bg-dark">

  <div>
    <label for="">Nombre Proveedor</label> <br>
    <input class="button2" type="text" name="nombre" required>
    </div>

    <div>
    <label for="">Telefono Proveedor</label> <br>
    <input class="button2" type="tel" name="telefono" required>
    </div>

    <div>
    <label for="">Mail Proveedor</label> <br>
    <input class="button2" type="mail" name="mail" required>
    </div>

   

  </div>
  <br>
  <br>
<input class="button4"type="submit" name="cargar" value="CARGAR">

  </form>

  <?php
require_once "dalessandro_javierconectar.php";
    if(isset($_GET['cargar'])){

$nombre=$_GET["nombre"];
$telefono=$_GET["telefono"];
$mail=$_GET["mail"];

$carga= "INSERT INTO proveedores (Nombre,Telefono,Mail) 
VALUES ('$nombre','$telefono',  '$mail' )";
mysqli_query($conexion,$carga);
echo "<br><p class='secargo'>SE DIO DE ALTA EL<br>  PROVEEDOR : " . $nombre  . " / MAIL : " . $mail  . " / TELEFONO : " . $telefono .  " </p>";
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