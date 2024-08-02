<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '41206215', 'saboresnaturalescrud');

    if(!$db) {
        echo 'Error no se pudo conectar';
        exit;
    }

    return $db;
}