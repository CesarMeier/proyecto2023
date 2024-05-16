<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Iniciar Sesion</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php

    include('header.php');

?>

<!-- Index.php contiene un Formulario para Agregar Socios--> 

<section>


<div class="container mt-2 mb-5">
    <div class="text-center mt-5 mb-2 text-primary"><h2>Inicio de sesion</h2></div>	

    <form class="row g-3" action="login.php" method="post">
    
    <div class="mb-3">
    <label for="dni" class="form-label">* DNI Usuario</label>
    <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI">
    </div>

    <div class="mb-3">
    <label for="clave" class="form-label">* Clave</label>
    <input type="password" name="clave" id="clave" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Ingresa Contraseña">
    <div id="passwordHelpBlock" class="form-text"></div>
    </div>

    <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary btn-sm" name="btn_ingresar">Ingresar</button>
</div>


</form>

		

<?php


    
    // Uso de GET para mostrar Mensaje resultante 

    if (isset($_GET["mensaje"])){

        if($_GET["mensaje"]!="ok"){

        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 

        }else{

        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong> Acceso permitido!</strong><a href='listado.php' class='text-primary ms-3'>Volver al inicio</a></div></div>";  
    
        }  
    } 

?> 




</section>



<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/barra.js"></script>

</body>

</html>