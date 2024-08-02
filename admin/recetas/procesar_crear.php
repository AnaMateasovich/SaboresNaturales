<?php

// require '../../includes/config/database.php';
// $db = conectarDB();

// if($_SERVER["REQUEST_METHOD"] == 'POST') {
//     $titulo = $_POST['titulo'];
//     $descripcion = $_POST['descripcion'];
//     $ingredientes = $_POST['ingredientes'];
//     $instrucciones = $_POST['instrucciones'];
//     $imagen = $_FILES['imagen'];
//     $nombre_archivo = '';
//}
//     //Validacion basica
//     if($imagen['error'] == 0) {
//         //Directorio de subida
//         $directorio_subida = '../../uploads';

//         //Nombre del archivo
//         $nombre_archivo = basename($imagen['name']);

//         //Ruta completa de destino
//         $ruta_destino = $directorio_subida . $nombre_archivo;

//         // Movemos el archivo de la carpeta temporal a la carpeta de destino
//         if(move_uploaded_file($imagen['tmp_name'], $ruta_destino)) {
//             echo 'El archivo ' . htmlspecialchars($nombre_archivo) . 'se ha subido correctamente <br>'; 
//         } else {
//             echo 'Hubo un error al subir el archivo';
//         }
//     } else {
//         echo 'No se ha subido ningun archivo o hubo un error en la subida';
//     }

//     //Insertar los datos en la base de datos
//     $query = "INSERT INTO recetas (titulo, descripcion, ingredientes, instrucciones, imagen VALUES (?, ?, ?, ?, ?)";
//     $stmt = $db->prepare($query);
//     $stmt->bind_param('sssss', $titulo, $descripcion, $ingredientes, $instrucciones, $nombre_archivo);

//     if($stmt->execute()) {
//         echo "Datos guardados correctamente";
//     } else {
//         echo "Error al guardar los datos: ". $stmt->error;
//     }

//     //Mostramos los datos del formulario que no son archivos
//     // echo 'Titulo: ' . htmlspecialchars($titulo) . '<br>';
//     // echo 'Descripcion: ' . htmlspecialchars($descripcion) . '<br>';
//     // echo 'Ingredientes: ' . htmlspecialchars($ingredientes) . '<br>';
//     // echo 'Instrucciones: ' . htmlspecialchars($instrucciones) . '<br>';

// }