<?php

/* Creacion de una funcion llamada conectar */
function conectar(){
    /* Informacion del servidor */
    $host="localhost";
    /* Usuario */
    $user="root";
    /* Contrasena */
    $pass="";
    /* Base de datos */
    $db="AW_Crud";

    /* Conexion a la base de datos */
    /* Funcion de PHP que permite conectar a MySQL */
    $con = mysqli_connect($host, $user, $pass);
    /* Indicamos que base de datos vamos a usar */
    mysqli_select_db($con, $db);

    return $con;
}

?>