<?php

include("conexion.php");
$con = conectar();

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$precio = $_POST['precio'];

$sql = "INSERT INTO carros
    (marca, modelo, anio, precio) 
    VALUES 
    ('$marca', '$modelo', '$anio', '$precio')";

    $query = mysqli_query($con, $sql);

    if($query){
        header("Locaction: Examen.php");
    }else{
        echo"Error al insertar al alumno";
    }
?>