<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion simplificada de almacen</title>
    <link rel="stylesheet" href="Gestion_simplificada_de_almacen.css">
    <style>
        
.contenedor{

background-color: rgba(105, 10, 25, 0.2);
width: 50%;
margin: 33px auto;
padding: 25px;
border-radius: 15px;
box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
-webkit-box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
-moz-box-shadow: -1px 0px 13px 7px rgba(122,32,32,0.78);
}
</style>

</head>
<body>

<?php

$usu=$_GET["usu"];
$con=$_GET["con"];
$usuOk="javier";
$conOk="proyecto";
if( $usu==$usuOk & $con==$conOk){



    header("Location:Gestion_simplificada_de_almacen_inicio.php");
}

?>

<div class="contenedor">
<h1 class="titulo">Gestion simplificada de almacen</h1>

</div>









<div class="contenedor">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 9v2m0 4v.01" />
  <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
</svg>
<h2 class="titulo">Atencion - No se pudo ingresar</h2>
    
    <h2 class="titulo">Usuario o contraseña incorrecta</h2>
    <h3 class="titulo">Vuelva a intentarlo</h3>
<form action="Gestion_simplificada_de_almacen_login.php"  method="get" >
<h3>Ingresar usuario</h3>
<input class="button2 i"type="text" name="usu" required>
<h3>Ingresar contraseña</h3>
<input class="button2 i"type="text" name="con" required> <br> <br>
<input class="button2 i"type="submit" name="entrar" value="ENTRAR">



</form>

</div>











</form>

</div>
</body>
</html>