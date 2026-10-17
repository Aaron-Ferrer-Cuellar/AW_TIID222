<?php

include("conexion.php");

$con = conectar();

$ID = $_GET['ID'];

$sql = "DELETE FROM carros WHERE id = '$ID'";

$query = mysqli_query($con, $sql);

if($query){
    header("Location: Examen.php");
    exit();
}else{
    echo "error al eliminar el alumno: " . mysqli_error($con);
}

?>