<?php

require_once "conexion.php";

$opcionSelec = $_POST['clas'];
$id=$_POST["idpieza"];



/* En la Base de Datos en Vista de Relaciones de la Tabla ficha, aplicar 
el atributo ON Cascade Delete para la relacion entre ficha y socios */

$sql="Delete from productos where idpieza=$id";

//die($sql);

mysqli_query($conex,$sql);

header("Location:listado.php");

?>