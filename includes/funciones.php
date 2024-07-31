<?php 

require 'app.php';

function incluirTemplate($nombre, $recetas = false) {
    include TEMPLETES_URL . "/$nombre" . ".php";
}
