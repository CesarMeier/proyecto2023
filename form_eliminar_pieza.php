<?php

// Conexion a la Base de Datos Biblioteca 

require_once "conexion.php";

$id=$_POST["id"];

$sql="SELECT * from pieza where idpieza=".$id;

$result=mysqli_query($conex,$sql);

$fila=mysqli_fetch_array($result);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion Productos Formulario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <?php
    
    include('header.php');

  ?>
      
            
    
  <!-- Index.php contiene un Formulario de Confirmación Eliminacion--> 

  
  
  <section>
  
  
  <div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2 text-danger"><h2>Borrar pieza</h2></div>	
  <div class="text-secondary"><p><small>* Dato Obligatorio</small></p></div>
  
  <form class="row g-3" action="eliminar.php" method="post">
  
  <input type="hidden" class="form-control" name="idpieza" id="idpieza" value="<?php echo $fila['idpieza'];?>">

  <div class="col-sm-6">
    <label for="numinventario" class="form-label">* Nombre</label>
    <input type="text" class="form-control" name="numinventario" id="numinventario" placeholder="Ingresar Nro de inventario" value="<?php echo $fila['numinventario'];?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="categoria" class="form-label">* Categoria</label>
    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Ingresar categoria" value="<?php echo $fila['categoria'];?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="especie" class="form-label">* Especie</label>
    <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresar especie" value="<?php echo $fila['especie'];?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="estadoconservacion" class="form-label">* Estado de conservacion</label>
    <input type="text" class="form-control" name="estadoconservacion" id="estadoconservacion" placeholder="Ingresar estado de conservacion" value="<?php echo $fila['estadoconservacion'];?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="fechaIngreso" class="form-label">* Fecha Ingreso</label>
    <input type="date" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Ingresar fecha de ingreso" value="<?php echo $fila['fechaIngreso'];?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="cantidadpieza" class="form-label">* Cantidad de piezas</label>
    <input type="text" class="form-control" name="cantidadpieza" id="cantidadpieza" placeholder="Ingresar cantidad piezas" value="<?php echo $fila['cantidadpieza'];?>" disabled>
  </div>

  <div class="col-sm-6 mb-3">
    <label for="observacion" class="form-label">* Observacion</label>
    <input type="text" class="form-control" name="observacion" id="observacion" placeholder="Ingresar observacion" value="<?php echo $fila['observacion'];?>" disabled>
  </div>

  
  <div class="col-12 text-secondary text-center mt-4"><h5>¿Confirma la eliminación de esta pieza?</a></h5>
  <div class="text-center mt-0"><button type="submit" class="btn btn-primary btn-sm" name="btnborrar" id="btnborrar">Eliminar</button>
  <a class="btn btn-primary btn-sm" href="listado.php" role="button">Cancelar</a></div>	
  
  </div>
  
  </form>
  
    

  </section>

  <?php
 //   include('footer.php');
  ?>
  
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/barra.js"></script>

</body>

</html>