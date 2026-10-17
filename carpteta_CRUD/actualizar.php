<?php
include("conexion.php");
$con = conectar();

$matricula = $_POST['Matricula'];
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$edad = $_POST['edad'];

$sql = "UPDATE alumnos SET nombre='$nombre', apellido_p='$apellido_p', apellido_m='$apellido_m', edad='$edad' WHERE Matricula='$matricula'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: alumnos.php");
}
?>