<?php 
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor crear">
        <h1 style="font-size: 3rem; text-align: center;">Crear</h1>

        
            <form class="form-crear" action="">
                <fieldset>
                    <div>
                        <label for="titulo">Titulo</label>
                        <input type="text" id="titulo" placeholder="Titulo de la receta">
                    </div>
                    <div>
                        <label for="descripcion">Descripcion</label>
                        <input type="text" id="descripcion" placeholder="Descripción de la receta">
                    </div>
                    <div>
                        <label for="ingredientes">Ingredientes</label>
                        <input type="text" id="ingredientes" placeholder="Ingredientes de la receta">
                    </div>
                    <div>
                        <label for="instrucciones">Instrucciones</label>
                        <input type="text" id="instrucciones" placeholder="Instrucciones de la receta">
                    </div>
                    <div>
                        <label for="imagen">Imagen</label>
                        <input type="file" id="imagen" accept="image/jpeg, image/png">
                    </div>

                    <input type="submit" value="Crear Receta">
                </fieldset>
            

            </form>

            <a href="index.php" class="btn-volver">Volver</a>
    </main>

    

<?php
    incluirTemplate('footer');
?>