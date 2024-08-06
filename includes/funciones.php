<?php 

require 'app.php';

function incluirTemplate($nombre, $recetas = false) {
    include TEMPLETES_URL . "/$nombre" . ".php";
}

function estaAutenticado() {
    session_start();

    $auth = $_SESSION['login'];
    
    if($auth) {
        return true;
    }
    return false;
    
    
}