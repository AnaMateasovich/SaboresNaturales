<?php 
require '../../includes/app.php';
$auth = estaAutenticado();

if(!$auth) {
    header('location: /');
}
    incluirTemplate('header');
?>

    <main>
        <h1 style="font-size: 3rem; text-align: center;">Borrar</h1>
    </main>

<?php
    incluirTemplate('footer');
?>