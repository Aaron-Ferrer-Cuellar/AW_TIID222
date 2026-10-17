<?php

    # Coneccion a la base de datos
    include("conexion.php");
    $con = conectar();

    # Recibir informacion del formulario
    $matricula = $_POST['Matricula'];
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $edad = $_POST['edad'];

    # Construimos la consulta para insertar la informacion
    $sql = "INSERT INTO alumnos
    (Matricula, nombre, apellido_p, apellido_m, edad) 
    VALUES 
    ('$matricula', '$nombre', '$apellido_p', '$apellido_m', '$edad')";

    /* Ejecutamos la consulta */
    $query = mysqli_query($con, $sql);

    if($query){
        header("Locaction: alumnos.php");
    }else{
        echo"Error al insertar al alumno";
    }

?>