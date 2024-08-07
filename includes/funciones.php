<?php 

define('TEMPLETES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

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