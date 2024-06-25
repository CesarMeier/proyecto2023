<?php
session_start();

require_once "conexion.php";

if (!isset($_GET['msje'])){
 
     $id=$_POST['id'];
 
 }else{
 
    $id=$_SESSION['idp'];
}     

$sql ="SELECT * FROM pieza,zoologia where (pieza.id=zoologia.pieza_id) and pieza.id=".$id;
die($sql);

$result=mysqli_query($conex,$sql);

$fila=mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
<input type="hidden" class="form-control" name="idpieza" id="idpieza" value="<?php echo $fila['id'];?>">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/barra.js"></script>

</body>
</html>