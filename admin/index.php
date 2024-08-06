<?php 

require '../includes/funciones.php';
$auth = estaAutenticado();

if(!$auth) {
    header('location: /');
}
    //Importar la conexion
    require '../includes/config/database.php';
    $db = conectarDB();

    //Escribir el query
    $query = "SELECT * FROM recetas";

    //Consultar la base de datos
    $resultadoRecetas = mysqli_query($db, $query);

    //Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {

            //Eliminar la imagen
            $query = "SELECT imagen FROM recetas WHERE id = ${id} ";
            $resultado = mysqli_query($db, $query);
            $receta = mysqli_fetch_assoc($resultado);

            unlink('../imagenesDB/' . $receta['imagen']);

            //Elimina la receta
            $query = "DELETE FROM recetas WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('Location: /admin?resultado=3');
            }
        }
    }

    //Incluye un template

    incluirTemplate('header');


?>

    <main class="contenedor admin-section">
        <?php if( intval($resultado) === 1 ): ?>
            <p class="alerta exito"> Receta creada correctamente </p>
        <?php elseif( intval($resultado) === 2 ): ?>
            <p class="alerta exito"> Receta actualizada correctamente </p>
        <?php elseif( intval($resultado) === 3 ): ?>
            <p class="alerta exito"> Receta eliminada correctamente </p>
        <?php endif; ?>
        <h1 style="font-size: 3rem; text-align: center;">Aministrador de recetas</h1>
        
        <a href="/admin/recetas/crear.php" class="nueva-receta">Nueva Receta</a>

        <table class="recetas">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Ingredientes</th>
                    <th>Instrucciones</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                <?php while($receta = mysqli_fetch_assoc($resultadoRecetas)): ?>
                <tr class="tr-max-height">
                    <td> <?php echo $receta['id'];  ?> </td>
                    <td> <?php echo $receta['titulo'];  ?> </td>
                    <td> <?php echo $receta['descripcion'];  ?> </td>
                    <td> <?php echo $receta['ingredientes'];  ?> </td>
                    <td> <?php echo $receta['instrucciones'];  ?> </td>
                    <td> <img src="/imagenesDB/<?php echo $receta['imagen']; ?>" alt=""> </td>
                    <td> <?php echo $receta['categoria'];  ?> </td>
                    <td>
                        <form method="POST" class="w-100" action="">

                            <input type="hidden" name="id" value="<?php echo $receta['id'] ?>">

                            <input class="boton-rojo-block" type="submit" value="Eliminar">
                        </form>
                        <a class="boton-verde-block" href="/admin/recetas/actualizar.php?id=<?php echo $receta['id']; ?>">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

    //Cerrar la conexion 
    mysqli_close($db);

    incluirTemplate('footer');
?>