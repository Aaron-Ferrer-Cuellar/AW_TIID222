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
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
            </tr>
        </thead>
        
        <tbody>

            <?php
                while ($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['Matricula'] ?></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['apellido_p'] ?></td>
                <td><?php echo $row['apellido_m'] ?></td>
                <td><?php echo $row['edad'] ?></td>
            </tr>
            <?php
            }
            ?>

        </tbody>

    </table>

    <h1>Formulario</h1>
    <form action="Insertar.php" method="post">

        <div style="display: flex; gap:10px;">
            <input type="text" class="form-control" name="Matricula" placeholder="Matricula">
            <input type="text" class="form-control" name="nombre" placeholder="nombre">
            <input type="text" class="form-control" name="apellido_p" placeholder="Apellido paterno">
            <input type="text" class="form-control" name="apellido_m" placeholder="Apellido Materno">
            <input type="text" class="form-control" name="edad" placeholder="Edad">

            <input type="submit">
        </div>

    </form>
    
</body>
</html>