<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Gestion simplificada de almacen</title>
  <style>

    body {
      background-color: black;
      color: bisque;
      text-align: center;
    }

    .div4{
      width: 80%;
      background-color: rgb(25, 105, 10);
      border: transparent 7px solid;
      margin: auto;
      height: 80px;
      padding-top: 13px;

    }
    .div4:hover{
      background-color: black;
      border: rgb(25, 105, 10)7px solid;
      cursor: pointer;

    }


    .div0{

      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      margin-top: 30px;
      height: 120px;
    }
    .div1{
background-color: rgb(165, 176, 17,0.3);
border: transparent 3px double;

width: 20%;

    }
    .div1:hover{
      width: 20%;
      background-color: black;
      border: rgb(165, 176, 17) 3px double;
      cursor: pointer;
 }

 .div1 h4:hover{
    color: rgb(165, 176, 17,0.5);

    }
    .div2{
      width: 20%;
      background-color: rgb(17, 165, 176, 0.3);
      border: transparent 3px solid;

    }
    .div2:hover{
      width: 20%;
      background-color: black;
      border: rgb(17, 165, 176) 3px solid;
      cursor: pointer;

    }
    .div2 h4:hover{

      color: rgb(17, 165, 176, 0.5);

    }
    .div3{
      width: 20%;

      background-color: rgb(176, 17, 165,0.3);
    }
    .div3:hover{
      width: 20%;
      background-color: black;
      border: rgb(176, 17, 165) 3px solid;
      cursor: pointer;

    }
    .div3 h4:hover{
    color: rgb(176, 17, 165,0.5);

    }

    h3{
      margin:21px 0 auto;
    }

    .h52{
           color: transparent;

    } .h53{
      color: transparent;
    } 
   

    .h51{
      color: transparent;

    }
    a{
      text-decoration: none;
      color: wheat;
    }
    .footer{
margin-top: 16px;
      display:flex;
      justify-content:space-evenly;

    }
    .abajo{
width:530px;
height: 70px;
margin-top: 10px;
padding-top: 19px;
margin-bottom: 10px;
border:solid transparent 3px;


    }
    .abajo:hover{
      color:bisque;
      background-color: antiquewhite;
width:530px;
height: 70px;
margin-top: 10px;
padding-top:19px;
margin-bottom: 10px;
border:solid bisque 3px;
border-radius: 10px;
    }
.h1{

  padding: 3px;
}
  </style>
</head>

<body>

  <!-- <p>  p Crea una versión web del programa GESTISIMAL (Gestión simplifcada de Almacén) para 
llevar el control de los artículos de un almacén. De cada artículo se debe saber el código, la 
descripción, el precio de compra, el precio de venta y el stock (número de unidades). La 
entrada y salida de mercancía supone respectivamente el incremento y decremento de 
stock de un determinado artículo. Hay que controlar que no se pueda sacar más mercancía 
de la que hay en el almacén. Aprovecha las opciones que puede ofrecer una interfaz web, 
por ejemplo para eliminar un artículo ya no será necesario pedir el código sino que se 
puede mostrar un listado de todos los artículos de tal forma que se puedan borrar un 
artículo directamente pulsando un botón. 
</p>-->
<br>
<h1 class="bg-dark h1">Gestion simplificada de stock </h1>




<a href="Gestion_simplificada_de_almacen_ventas.php">
<div class="div4"><h3 class="h3"> Aqui comience a registrar ventas <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-click" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#19690A" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5" />
  <path d="M11 11.5v-2a1.5 1.5 0 0 1 3 0v2.5" />
  <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5" />
  <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7l-.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
  <path d="M5 3l-1 -1" />
  <path d="M4 7h-1" />
  <path d="M14 3l1 -1" />
  <path d="M15 6h1" />
</svg></h3></div></a>

  <div class="div0">
  <a  class="div1"href="Gestion_simplificada_de_almacen_altas_bajas.php" > <div >
<h3>Altas  de  Productos </h3>
<h4 class="h51">Click para registrar<br> nuevos productos</h4>
    </div> </a>



    <a  class="div2"href="Gestion_simplificada_de_almacen_cargar_stock.php" >
      <div>
<h3>Cargar Stock</h3>
<h4 class=h52>Click para<br> cargar stock</h4>
    </div></a>


    <a  class="div3"href="Gestion_simplificada_de_almacen_historial_ventas.php?id=historial" >
    <div >
<h3>Historial de Ventas</h3>
<h4 class=h53>Art. mas y menos<br> vendidos</h4>

    </div></a>

  </div>


  <div class="div0">

  <a  class="div1"href="Gestion_simplificada_de_almacen_bajas.php" ><div>
  <h3>Bajas  de  Productos </h3>
<h4 class="h51">Click para eliminar productos</h4>
    </div></a>

    <a  class="div2"href="Gestion_simplificada_de_almacen_stock.php" ><div>
<h3>Ver / Modificar Stock</h3>
<h4 class=h52>Click para ver<br> modificar / cargar</h4>
    </div></a>

    <a  class="div3"href="Gestion_simplificada_de_almacen_historial_ventas.php?id=recuento" >
    <div >
<h3>Recuento de Capital</h3>
<h4 class=h53>Segun inversion o segun ventas</h4>

    </div></a>
  </div>
<!--Abajo de todo -->

  <div class="footer">

  <div>

  <a  href="Gestion_simplificada_de_almacen_articulos_proveedores.php">
  <div class="abajo bg-dark">

    <h4>Lista = Articulo /  Proveedores</h4>
  </div>
  </a>


  <a  href="#">
  <div class="abajo bg-dark">

    <h4>Listado Proveedores</h4>
  </div>
  </a>

  </div>



  <div>

  <a  href="Gestion_simplificada_de_almacen_alta_proveedores.php">
  <div class="abajo bg-dark">

    <h4>Cargar Nuevos  Proveedores</h4>
  </div>
  </a>


  <a  href="Gestion_simplificada_de_almacen_proveedores_bajas_modificacion.php">
  <div class="abajo bg-dark">
    <h4>Lista Proveedores - Bajas / Modificación</h4>
  </div>
  </a>

  </div>


      </div>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>