<?php 
    //Importar la conexion 

    $db = conectarDB();

    //Consultar
    $query = "SELECT * FROM recetas LIMIT ${limite}";

    //Obtener los resultados
    $resultado = mysqli_query($db, $query);

?>


<div class="recetas-grid">
    <?php while($receta = mysqli_fetch_assoc($resultado)): ?>
        <div class="card">
            <a class="card-titulo" href=""> <?php echo $receta['titulo']; ?></a>
            <img loading="lazy" src="/imagenesDB/<?php echo $receta['imagen']; ?>" alt="receta">
            <p> <?php echo $receta['descripcion']; ?></p>
            <p> <?php echo $receta['ingredientes']; ?></p>
            <a class="card-link leer-mas" href="/receta.php?id=<?php echo $receta['id'] ?>">Leer más</a>
        </div>
    <?php endwhile; ?>
</div>


<?php

//Cerrar la conexion
mysqli_close($db);

?>