<?php
session_start();
require_once "conexion.php";
require_once "funcionesval.php";

$error = "";

$opcionSelec = $_POST['clas'];
//die ($opcionSelec );

 //Funcion de Validacion de Datos VALIDACION DATOS DE LA TABLA 
if (ValidacionDatos()){   
    $clasifi= $_POST['clasificacion'];
    $reino = $_POST['reino'];
    $phylum= $_POST['phylum'];
    $clase = $_POST['clase'];
    $orden = $_POST['orden'];
    $familia = $_POST['familia'];
    $genero = $_POST['genero'];
    $especie = $_POST['especie'];

    $idpieza = $_SESSION['idpieza'];

    switch($opcionSelec ){
        case "zoologia":
            $sql="INSERT INTO zoologia(clasificacion,reino,phylum,clase,orden,familia,genero,especie,pieza_id) VALUES('$clasifi','$reino','$phylum','$clase','$orden','$familia','$genero','$especie',$idpieza)";
        break;

        case "botanica":
            $division = $_POST['division'];
            $sql="INSERT INTO botanica(clasificacion,reino,phylum,division,clase,orden,familia,genero,especie,pieza_id) VALUES('$clasifi','$reino','$phylum','$division','$clase','$orden','$familia','$genero','$especie',$idpieza)";
        break;

        case "paleontologia":
            $eras = $_POST['eras'];
            $periodos = $_POST['periodos'];
            $sql="INSERT INTO paleontologia(eras,periodos,reino,clase,orden,familia,genero,especie,pieza_id) VALUES('$eras','$periodos','$reino','$clase','$orden','$familia','$genero','$especie',$idpieza)";
        break;

        case "arqueologia":
            $integridadHistorica = $_POST['integridadHistorica'];
            $estetica = $_POST['estetica'];
            $material = $_POST['material'];
            $sql="INSERT INTO arqueologia(integridadHistorica,estetica,material,reino,clase,orden,familia,genero,especie,pieza_id) VALUES('$integridadHistorica','$estetica','$material','$reino','$clase','$orden','$familia','$genero','$especie',$idpieza)";
        break;

        case "osteologia":
            $sql="INSERT INTO osteologia(clasificacion,especie,reino,clase,orden,familia,genero,pieza_id) VALUES('$clasifi','$especie','$reino','$clase','$orden','$familia','$genero',$idpieza)";
        break;

        case "geologia":
            $tipo = $_POST['tipo'];
            $sql="INSERT INTO geologia(tipo,reino,clase,orden,familia,genero,especie,pieza_id) VALUES('$tipo','$reino','$clase','$orden','$familia','$genero','$especie',$idpieza)";
        break;

        case "ictiologia":
            $tipo = $_POST['tipo'];
            $sql="INSERT INTO ictiologia(tipo,clasificacion,especie,reino,clase,orden,familia,genero,pieza_id) VALUES('$tipo','$clasifi','$especie','$reino','$clase','$orden','$familia','$genero',$idpieza)";
        break;

        case "oologia";
            $sql="INSERT INTO oologia(clasificacion,tipo,especie,reino,clase,orden,familia,genero,pieza_id) VALUES('$clasifi','$tipo','$especie','$reino','$clase','$orden','$familia','$genero',$idpieza)";
        break;
    }

    $result=mysqli_query($conex,$sql);

		//Inserta los datos 
	if ($result){
        header("Location:form_agregar_clasificacion.php?mensaje=ok");
    }else{ 
		$error.="Error en la Inserción de datos ";
		header("Location:form_agregar_clasificacion.php?mensaje=".$error);
    }
};
    
	