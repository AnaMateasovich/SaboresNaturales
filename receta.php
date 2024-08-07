<?php
    require 'includes/app.php';
    incluirTemplate('header', $recetas = true);

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('location: index.php');
    }

    $db = conectarDB();

    $query = "SELECT * FROM recetas WHERE ID = ${id}";
    $resultado = mysqli_query($db, $query);

    $receta = mysqli_fetch_assoc($resultado);

    if($resultado->num_rows === 0){
        header('location: index.php');
    }
?>

<div class="seccion-blanco">
    <section class="contenedor"> 
        <div class="recetas">
            <h2><?php echo $receta['titulo'] ?></h2>
            <img src="/imagenesDB/<?php echo $receta['imagen'] ?>" alt="">
            <p><?php echo $receta['ingredientes'] ?></p>
            <p><?php echo $receta['instrucciones'] ?></p>
        </div>
</div>

<?php
    mysqli_close($db);
    incluirTemplate('footer');
?>
