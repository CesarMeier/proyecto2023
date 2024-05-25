<?php

session_start();

require_once "conexion.php";

if (!isset($_GET['msje'])){

    $id=$_POST['id'];

}else{

      $id=$_SESSION['idp'];
}     

$sql="SELECT pieza.* FROM pieza WHERE pieza.idpieza=".$id;


$result=mysqli_query($conex,$sql); 

$fila=mysqli_fetch_array($result);

//die($sql);
//echo $sql;

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Edición Datos</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <?php

    include('header.php');

  ?>


  <section>

  <div class="container mt-2 mb-5">
  <div class="text-center my-5 text-success"><h2>Editar Datos Pieza</h2></div>	

  <form class="row g-3" action="editar.php" method="post">

  <input type="hidden" class="form-control" name="idpieza" id="idpieza" value="<?php echo $fila['idpieza'];?>">

  <div class="col-sm-6 mb-3">
  <label for="numinventario" class="form-label">* Numero de Inventario</label>
    <input type="text" class="form-control" name="numinventario" id="numinventario" placeholder="Ingresar Nro de Inventario" value="<?php echo $fila['numinventario'];?>">
  </div>
  <div class="col-sm-6">
    <label for="categoria" class="form-label">* Categoria</label>
    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Editar categoria" value="<?php echo $fila['categoria'];?>">
  </div>
  <div class="col-sm-6">
    <label for="especie" class="form-label">* Especie</label>
    <input type="text" class="form-control" name="especie" id="especie" placeholder="Editar especie" value="<?php echo $fila['especie'];?>">
  </div>
  <div class="col-sm-6">
    <label for="estadoConservacion" class="form-label">* Estado de conservacion</label>
    <input type="text" class="form-control" name="estadoConservacion" id="estadoConservacion" placeholder="Editar estado de conservacion" value="<?php echo $fila['estadoConservacion'];?>">
  </div>
  <div class="col-sm-6 mb-3">
    <label for="fechaIngreso" class="form-label">* Fecha de ingreso</label>
    <input type="date" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Ingresar fecha de ingreso" value="<?php echo $fila['fechaIngreso'];?>">
  </div>
  <div class="col-sm-6">
    <label for="cantidadpieza" class="form-label">* Cantidad de piezas</label>
    <input type="text" class="form-control" name="cantidadpieza" id="cantidadpieza" placeholder="Editar cantidad de piezas" value="<?php echo $fila['cantidadpieza'];?>">
  </div>
  <div class="col-sm-6">
    <label for="observacion" class="form-label">* Observacion</label>
    <input type="text" class="form-control" name="observacion" id="observacion" placeholder="Editar observacion" value="<?php echo $fila['observacion'];?>">
  </div>



  <div class="col-12 text-center">
  <button type="submit" class="btn btn-primary btn-sm" name="btn_editar" id="editar">Actualizar</button>
  <a class="btn btn-primary btn-sm ms-2" href="listado.php" role="button">Cancelar</a>
  </div>

  </form>

  

  <?php


    if (isset($_GET["msje"])){

      if($_GET["msje"]!="ok"){

        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["msje"]."</strong><a href='listado.php' class='text-primary ms-3'>Volver al Listado</a></div></div>"; 

        }else{

        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>"."Actualización Exitosa!"."</strong><a href='listado.php' class='text-primary ms-3'>Volver al Listado</a></div></div>";  

      }  
  } 
  ?> 

</section>

  <?php

  //  include('footer.php');

  ?>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/barra.js"></script>

</body>

</html>