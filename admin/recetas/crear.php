<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    //Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Consultar para obtener las categorias
    $obtenerCategorias = "SELECT * FROM categorias";
    $resultadoObtenerCategorias = mysqli_query($db, $obtenerCategorias);

    //Arreglo con mensaje de errores
    $errores = [];
   
    $titulo = '';
    $descripcion = '';
    $ingredientes = '';
    $instrucciones = '';
    $categoria_id = '';


    //Ejecutar el codigo despues de que el usuario envia el formulario
    if($_SERVER["REQUEST_METHOD"] === 'POST') {
    //     echo "<pre>";
    //     var_dump($_POST);
    //     echo "</pre>";

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $ingredientes = $_POST['ingredientes'];
        $instrucciones = $_POST['instrucciones'];
        $categoria_id = $_POST['categoria'];
        $fecha_creacion = date('Y/m/d');

        if(!$titulo) {
            $errores[] = 'Debes añadir un titulo';
        } 
        if(!$descripcion) {
            $errores[] = 'Debes añadir una descripcion';
        } 
        if(!$ingredientes) {
            $errores[] = 'Debes añadir los ingredientes';
        }
        if(!$instrucciones) {
            $errores[] = 'Debes añadir instrucciones';
        }
        if(!$categoria_id) {
            $errores[] = 'Debes añadir una categoria';
        }
        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)) {
            //Insertar en la base de datos
            $query = "INSERT INTO recetas (titulo, descripcion, ingredientes, instrucciones, categoria_id, fecha_creacion) VALUES ('$titulo', '$descripcion', '$ingredientes', '$instrucciones', '$categoria_id', '$fecha_creacion')";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                echo 'insertado correctamente';
            }
        }
}
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor crear">
        <h1 style="font-size: 3rem; text-align: center;">Crear</h1>

        <?php foreach($errores as $error){ ?>
            <div class="alerta error">
            <?php echo $error; ?>
            </div>
            
        <?php } ?>
        
        
            <form class="form-crear" action="/admin/recetas/crear.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div>
                        <label  for="titulo">Titulo</label>
                        <input  type="text" 
                                name="titulo" 
                                id="titulo" 
                                placeholder="Titulo de la receta" 
                                value="<?php echo $titulo; ?>">
                    </div>
                    <div>
                        <label  for="descripcion">Descripcion</label>
                        <input  type="text" 
                                name="descripcion" 
                                id="descripcion" 
                                placeholder="Descripción de la receta" 
                                value="<?php echo $descripcion; ?>">
                    </div>
                    <div>
                        <label  for="ingredientes">Ingredientes</label>
                        <input  type="text" 
                                name="ingredientes" 
                                id="ingredientes" 
                                placeholder="Ingredientes de la receta" 
                                value="<?php echo $ingredientes; ?>">
                    </div>
                    <div>
                        <label  for="instrucciones">Instrucciones</label>
                        <input  type="text" 
                                name="instrucciones" 
                                id="instrucciones" 
                                placeholder="Instrucciones de la receta" 
                                value="<?php echo $instrucciones; ?>">
                    </div>
                    <div>
                        <label  for="imagen">Imagen</label>
                        <input  type="file" 
                                id="imagen" 
                                accept="image/jpeg, image/png">
                    </div>
                    <div>
                        <label  for="categoria">Categoria</label>
                        <select name="categoria" 
                                id="categoria"
                                value="<?php echo $categoria; ?>">
                            <option value="" disabled selected>---- Seleccione ----</option>
                            <?php while($row = mysqli_fetch_assoc($resultadoObtenerCategorias)) : ?>
                                <option  <?php echo $categoria_id === $row['id'] ? 'selected' : ''; ?>    value="<?php echo $row['id']; ?>"> <?php echo $row ['nombre']; ?> </option>
                                <?php endwhile; ?> 
                        </select>
                    </div>

                    <input type="submit" value="Crear Receta">
                </fieldset>
            

            </form>

            <a href="index.php" class="btn-volver">Volver</a>
    </main>

    

<?php
    incluirTemplate('footer');
?>