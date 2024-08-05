<?php
    @require 'includes/funciones.php';
    incluirTemplate('header', $recetas = true)
?>

<div class="seccion-blanco">
    <section class="contenedor"> 
        <div class="recetas">
            <h2>Recetas</h2>
            <?php 
            $limite = 15;
            include 'includes/templates/recetasAnuncios.php';
            ?>
        </div>
</div>

<?php

    incluirTemplate('footer');
?>
