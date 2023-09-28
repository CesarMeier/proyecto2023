<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto 2023 museo</title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

        <link href="css/styles.css" rel="stylesheet" /> 
    </head>
<body id="page-top">

<?php
    
    include('nav.php');

  ?>

<header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenidos al museo de</div>
            <div class="masthead-heading text-uppercase">Ciencias Naturales</div>
        <!--    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
        </div>
</header>

<?php
    include('descripcion.php');
    include('bodycat.php');
    include('team.php');
    include('formcontacto.php');
    include('footer.php');
?>
  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>