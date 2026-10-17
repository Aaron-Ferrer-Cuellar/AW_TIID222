<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE Matricula='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
</head>
<body>
    <h1>Editar Registro</h1>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="Matricula" value="<?php echo $row['Matricula'] ?>">
        <input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" placeholder="Nombre">
        <input type="text" name="apellido_p" value="<?php echo $row['apellido_p'] ?>" placeholder="Apellido Paterno">
        <input type="text" name="apellido_m" value="<?php echo $row['apellido_m'] ?>" placeholder="Apellido Materno">
        <input type="text" name="edad" value="<?php echo $row['edad'] ?>" placeholder="Edad">
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>