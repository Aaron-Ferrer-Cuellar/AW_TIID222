<?php

include("conexion.php");

$con = conectar();

# Recibimos la matricula enviada por la URl
$matricula = $_GET['id'];

# eliminamos al alumno de la tabla

$sql = "DELETE FROM alumnos WHERE matricula = '$matricula'";

$query = mysqli_query($con, $sql);

# Verificamos si la consulta se ejecuto correctamente
if ($query){
    header("Location: alumnos.php");
    exit();
}else{
    echo "error al eliminar el alumno: " . mysqli_error($con);
}

?>