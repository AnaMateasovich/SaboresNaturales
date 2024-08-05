<?php 

// Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y un password
$nombre = 'Pepito';
$email = "correo@correo.com";
$password = "123456";

//Query para crear el usuario 
$query = "INSERT INTO usuarios (nombre, correo, password) VALUES ('${nombre}','${email}', '${password}')";

echo $query;

//Agregarlo a la base de datos
mysqli_query($db, $query);


?>