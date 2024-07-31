<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/main.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/spinner.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Sedan:wght@100..900&display=swap">
    <script src="index.js"></script>
    <title>Sabores Naturales</title>
</head>
<body>
    <header class="header <?php echo $recetas ? 'recetas-header' : '' ?>">
        <div class="logo">
            <h2 class="titulo">Sabores Naturales</h2>
            <h1 class="sub-titulo">Comida Integral</h1>
        </div>
        <nav class="nav">
            <ul>
                <li><a class="nav-link" href="index.php">Inicio</a></li>
                <li><a class="nav-link" href="recetas.php">Recetas</a></li>
                <li><a class="nav-link" href="#comprar">Comprar</a></li>
                <li><a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a></li>
            </ul>
        </nav>
        <!-- <?php
        // echo $recetas ? '<ul class="recetas-nav">
        //     <li><a class="" href="#">Salado</a></li>
        //     <li><a class="" href="#">Dulce</a></li>
        //     <li><a class="" href="#">Chocolate</a></li>
        //     <li><a class="" href="#">Manzana</a></li>
        // </ul>' : '';
        ?> -->

    </header>