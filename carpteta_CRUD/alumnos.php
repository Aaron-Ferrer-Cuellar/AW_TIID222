<?php
/* Incluye la informacion del archivo de conexion.php */
include("conexion.php");
/* Mandamos a llamar la funcion de conexion a la base de datos de conexion.php */
$con = conectar();
/* Dame todo lo que tengas de la tabla alumnos */
$sql = "SELECT * FROM alumnos";
/*  */
$query = mysqli_query($con, $sql);
?>

<style>
    
    table{
        border-collapse: collapse;
        width: 100%;
    }

    tr, th, td{
        border: solid black 2px;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table style="border: solid black 2px">
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
    </table>
    
</body>
</html>