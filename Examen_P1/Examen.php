<?php
include("conexion.php");
$con = conectar();
$sql = "SELECT * FROM carros";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Primer Parcial</title>

    <style>

        header, .Contenido_Tablas1, .Contenido_Tablas2{
            border: 2px black solid;
        }
        footer{
            border: 2px black solid;
            padding-left: 12%;
            padding-right: 12%;
        }
        .footer{
            display: flex;
            flex-direction: row;
        }
        .Tablas{
            display: flex;
            flex-direction: row;
        }

        .Contenido_Tablas1{
            width: 40%;
            height: 400px;
            margin-right: 1%;
            margin-top: 1%;
            margin-bottom: 1%;

            padding-left: 4.5%;
            padding-right: 4.5%;
        }
        .Contenido_Tablas2{
            width: 40%;
            height: 400px;
            margin-left: 1%;
            margin-top: 1%;
            margin-bottom: 1%;

            padding-left: 4.5%;
            padding-right: 4.5%;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        tr, th, td{
        border: solid black 2px;
        }
        ul{
            width: 80%;
        }
        .ingresar{
            width: 100%;
        }
        .Mclovin, .UPQ{
            border-radius: 100%;

            width: 120px;
            height: 120px;
        }

    </style>

</head>
<body>

    <header>
        <h1 style="text-align: center;">EXAMEN 1ER PARCIAL - APLICACIONES WEB</h1>
    </header>
    
    <div class="Tablas">
        <div class="Contenido_Tablas1">
        <h1 style="text-align: center;">Insertar Carro</h1>
            <form action="insertar.php" method="post">
                <div style="display: flex; gap:10px;">
                    <ul>
                        <li>Marca del carro</li>
                        <input type="text" class="ingresar" name="marca" placeholder="Marcan del carro">
                        <br><br>

                        <li>Modelo del carro</li>
                        <input type="text" class="ingresar" name="modelo" placeholder="Modelo del carro">
                        <br><br>

                        <li>Año del acrro</li>
                        <input type="number" class="ingresar" name="anio" placeholder="Año del carro">
                        <br><br>

                        <li>Precio del carro</li>
                        <input type="number" class="ingresar" name="precio" placeholder="Precio del carro">
                        <br><br>

                        <input type="submit">
                    </ul>
                </div>
            </form>
        </div>
        <div class="Contenido_Tablas2">
            <h1 style="text-align: center;">TABLA DE CARROS</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>AÑO</th>
                    <th>PRECIO</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
                <tr>

                <?php
                    while ($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['marca'] ?></td>
                    <td><?php echo $row['modelo'] ?></td>
                    <td><?php echo $row['anio'] ?></td>
                    <td><?php echo $row['precio'] ?></td>

                    <td>
                        <a href="editar.php?ID=<?php echo $row['id']; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="eliminar.php?ID=<?php echo $row['id']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>

                </tr>
            </table>
            
        </div>
    </div>

    <footer>
        <div class="footer" style="text-align: center;">
            
            <div>
                <img src="Mclovin.jpg" class="Mclovin">
            </div>
            <div style="text-align: center;">
                <h3>---------- AARON FERRER CUELLAR ----------</h3>
                <p>No tengo mucho que decir sobre este cuatrimestre, solo puedo decir que me ha llegado a agradar aun cuando nos llegaron a separar de nuestros antiguos compañeros.</p>
            </div>
            <div>
                <img src="UPQ.png" class="UPQ">
            </div>
        </div>
    </footer>
    
</body>
</html>