<?php
    @require 'includes/funciones.php';
    incluirTemplate('header', $recetas = true)
?>

<div class="seccion-blanco">
        <section class="contenedor"> 
            <div class="recetas">
                <h2>Recetas</h2>
                <div class="recetas-grid">
                    <div class="card">
                        <a class="card-titulo" href="">Budin Integral de Banana</a>
                        <img src="img/budin integral.jpg" alt="Budin Integral">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus hic aspernatur sint deserunt, delectus enim libero qui! Nulla, quod. Provident nesciunt ipsam a consequuntur mollitia enim ex ullam, similique quas!</p>
                        <a class="card-link leer-mas" href="#">Leer más</a>
                    </div>
                    <div class="card">
                        <a class="card-titulo" href="">Chia Pudding</a>
                        <img src="img/Chia Pudding.jpg" alt="Chia Pudding">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus hic aspernatur sint deserunt, delectus enim libero qui! Nulla, quod. Provident nesciunt ipsam a consequuntur mollitia enim ex ullam, similique quas!</p>
                        <a class="card-link leer-mas" href="#">Leer más</a>
                    </div>
                    <div class="card">
                        <a class="card-titulo" href="">Pancakes de Avena</a>
                        <img src="img/pancakes de avena.jpg" alt="Pancakes de Avena">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus hic aspernatur sint deserunt, delectus enim libero qui! Nulla, quod. Provident nesciunt ipsam a consequuntur mollitia enim ex ullam, similique quas!</p>
                        <a class="card-link leer-mas" href="#">Leer más</a>
                    </div>
                    <div class="card">
                        <a class="card-titulo" href="">Bombones de Avena</a>
                        <img src="img/bombones de avena.jpg" alt="Bombones de Avena">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus hic aspernatur sint deserunt, delectus enim libero qui! Nulla, quod. Provident nesciunt ipsam a consequuntur mollitia enim ex ullam, similique quas!</p>
                        <a class="card-link leer-mas" href="#">Leer más</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>
