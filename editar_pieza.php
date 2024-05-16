<?php
session_start();

// Conexion a la BD
require_once "conexion.php";

//Funcion de Validacion de Datos

require_once "funcionesval.php";


$error = "";

 // Recibe el id oculto desde el form_editar

$id=$_POST['idpieza'];

 // Crea una variable de sesión llamada ids para guardar el id del socio recibido 

$_SESSION['idp']=$id;

//echo $_POST['nombre'],$_POST['precio'],$_POST['fecha_alta'],$_POST['idCat'],$_POST['existencia'],$_FILES['archivoimagen']['tmp_name'];
//die();

if(!empty(trim($_POST['numinventario'])) && !empty(trim($_POST['categoria'])) && !empty(trim($_POST['especie'])) && !empty(trim($_POST['estadoConservacion'])) && !empty(trim($_POST['fechaIngreso'])) && !empty(trim($_POST['cantidadpieza'])) && !empty(trim($_POST['observacion']))){

	if (ValidacionDatos()){
        
		$numinventario = $_POST['numinventario'];
		$categoria = $_POST['categoria'];
		$especie = $_POST['especie'];
		$estadoConservacion = $_POST['estadoConservacion'];
		$fechaIngreso = $_POST['fechaIngreso'];
		$cantidadpieza = $_POST['cantidadpieza'];
		$observacion = $_POST['observacion'];
		
        // Se arma la sentencia SQL de Actualización
            
        $sql="UPDATE pieza SET numinventario=$numinventario,categoria='$categoria',especie='$especie',estadoConservacion='$estadoConservacion',fechaIngreso='$fechaIngreso',cantidadpieza=$cantidadpieza,observacion='$observacion' WHERE idpieza=$id";    

		
		
        // Ejecuta la sentencia

        mysqli_query($conex,$sql);

		//echo $nombre,$precio,$fecha_alta,$idCategoria,$existencia,$nombrearchivo;

        //die($sql);
		//echo $sql;

		
        // Evalúa si se realizó la actualización de algun dato

        if (mysqli_affected_rows($conex)==1){
		

            header("Location:form_editar.php?msje=ok");

        }else{
	            $error.="No se realizó Actualización! ";
	            header("Location:form_editar.php?msje=".$error);
            }

	};
	
	}else{
		$error.="Faltan Datos ";
		header("Location:form_editar.php?msje=".$error);
}



?>