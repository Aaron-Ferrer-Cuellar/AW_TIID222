<?php
 echo "Hola Mundo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        h1{
            /* Texto */
            color: blue
        }
        div{
            /* Cambiar fondo del bloque div */
            background-color: pink;
        }

        /* Padding version corta */
        .seccion-corta {
            background-color: lightgreen;
             /* Arriba/Abajo 20px, Izquierda/Derecha 40px */
            padding: 20px 40px;
        }

        /* Padding version larga */
        .seccion-larga {
            background-color: lightpink;
            padding-top: 20px;
            padding-right: 40px;
            padding-bottom: 20px;
            padding-left: 40px;
        }

        /* Margin */
        .seccion-verde {
            background-color: lightgreen;
            padding: 20px 40px;
            margin: 20px;
            border: 10px solid black;
        }

        .seccion-rosa-margin {
            background-color: lightpink;
            padding: 20px 40px;
            margin-top: 20px;
            margin-right: 30px;
            margin-bottom: 40px;
            margin-left: 50px;
        }

        /* Estilos de bordes solicitados en la guía */
        .borde-solid { 
            border: 10px solid black; 
        }

        .borde-dashed { 
            border: 10px dashed black; 
        }
        
        .borde-dotted { 
            border: 10px dotted black; 
        }

        .borde-double { 
            border: 10px double black; 
        }

        .borde-groove { 
            border: 10px groove black; 
        }

        .borde-ridge { 
            border: 10px ridge black; 
        }

        .borde-inset { 
            border: 10px inset black; 
        }

        .borde-outset { 
            border: 10px outset black; 
        }

        .borde-none { 
            border: 10px none black; 
        }

        .borde-hidden { 
            border: 10px hidden black; 
        }


    </style>

</head>
<body>

    <h1>Hola Mundo</h1>
    <h2>Hola Mundo</h2>
    <h3>Hola Mundo</h3>
    <h4>Hola Mundo</h4>
    <h5>Hola Mundo</h5>
    <h6>Hola Mundo</h6>

    <div>
        <h2>Titulo del parrafo</h2>
        <p>Este es un parrafo</p>
    </div>

    <!-- Ejercicio Padding Versión Corta -->
    <div class="seccion-corta">
        <h2>Título del párrafo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>

    <!-- Ejercicio Padding Versión Larga -->
    <div class="seccion-larga">
        <h2>Título del párrafo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>

    <!-- Ejercicios de Margin -->
    <div class="seccion-verde">
        <h2>Título del párrafo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>

    <div class="seccion-rosa-margin">
        <h2>Título del párrafo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>

    <!-- Ejercicios con los diferentes tipos de bordes -->
    <div class="seccion borde-solid">
        <h2>Borde Solid</h2>
        <p>Ejemplo con estilo de borde solid.</p>
    </div>

    <div class="seccion borde-dashed">
        <h2>Borde Dashed</h2>
        <p>Ejemplo con estilo de borde dashed.</p>
    </div>

    <div class="seccion borde-dotted">
        <h2>Borde Dotted</h2>
        <p>Ejemplo con estilo de borde dotted.</p>
    </div>

    <div class="seccion borde-double">
        <h2>Borde Double</h2>
        <p>Ejemplo con estilo de borde double.</p>
    </div>

    <div class="seccion borde-groove">
        <h2>Borde Groove</h2>
        <p>Ejemplo con estilo de borde groove.</p>
    </div>

    <div class="seccion borde-ridge">
        <h2>Borde Ridge</h2>
        <p>Ejemplo con estilo de borde ridge.</p>
    </div>

    <div class="seccion borde-inset">
        <h2>Borde Inset</h2>
        <p>Ejemplo con estilo de borde inset.</p>
    </div>

    <div class="seccion borde-outset">
        <h2>Borde Outset</h2>
        <p>Ejemplo con estilo de borde outset.</p>
    </div>

    <div class="seccion borde-none">
        <h2>Borde None</h2>
        <p>Ejemplo con estilo de borde none.</p>
    </div>

    <div class="seccion borde-hidden">
        <h2>Borde Hidden</h2>
        <p>Ejemplo con estilo de borde hidden.</p>
    </div>

</body>
</html>