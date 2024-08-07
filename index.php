<?php 
    require 'includes/app.php';
    incluirTemplate('header');
 ?>


    <section class="contenedor">
        <article class="noticias">
            <div>
                <div class="linea-top"></div>
                <p class="novedades">Novedades</p>
                <h3>Idea de brunch saludable</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis similique, odio vel sed in adipisci, quod at illum animi, temporibus saepe reiciendis fuga ipsa distinctio. Possimus accusamus voluptates ipsam quos.</p>
                <a href="#" class="leer-mas">Leer más</a>
            </div>
            <img src="img/brunch.jpg" alt="Brunch saludable">
        </article>
    </section>

    <div class="seccion-blanco">
        <section class="contenedor"> 
            <div class="recetas">
                <h2>Recetas</h2>

                <?php
                    $limite = 4;
                    include 'includes/templates/recetasAnuncios.php';
                ?>

            </div>
        </section>
    </div>

    <section id="comprar" class="contenedor">
        <div class="tienda">
            <h3>Nuestros Productos</h3>
            <div class="contenedor-cards-tienda">
                <div class="card-tienda">
                    <img src="img/Pan integral.png" alt="Pan Integral">
                    <div>
                        <h2>Pan Integral</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis numquam voluptate.</p>
                        <p class="precio-tienda">$2800</p>
                        <button id="añadir-carrito" class="card-button">Añadir al carrito</button>
                    </div>
                </div>
                <div class="card-tienda">
                    <img src="img/Prepizza.png" alt="Prepizza Integral">
                    <div>
                        <h2>Prepizza Integral</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis numquam voluptate.</p>
                        <p class="precio-tienda">$1600</p>
                        <button id="añadir-carrito" class="card-button">Añadir al carrito</button>
                    </div>
                </div>
                <div class="card-tienda">
                    <img src="img/budin-integral-tienda.jpg" alt="Prepizza Integral">
                    <div>
                        <h2>Budin de banana</h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis numquam voluptate.</p>
                        <p class="precio-tienda">$2500</p>
                        <button id="añadir-carrito" class="card-button">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre-nosotros" class="sobre-nosotros-img">
        <div class="contenedor sobre-nosotros">
            <div class="sobre-nosotros-txt">
                <h3>Sobre Nosotros</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda doloremque quo, dolores perspiciatis quas iure officiis impedit praesentium ipsum similique illum magnam dicta repellendus repellat fuga ex hic.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed dolores, quis voluptatem aut assumenda a, obcaecati officiis ullam eum consequuntur vitae praesentium consequatur cum ratione dicta dolorem quae harum esse.</p>
            </div>
            <div id="ubicacion" class="sobre-nosotros-ubi">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.9532233756763!2d-60.63675422344764!3d-32.95224437217303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab1caa93dcf9%3A0x88a5cc1028d5a721!2sCES%2C%20Buenos%20Aires%201174%2C%20S2000%20Rosario%2C%20Santa%20Fe!5e0!3m2!1ses!2sar!4v1713406123156!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>