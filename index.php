<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/main.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/spinner.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Sedan:wght@100..900&display=swap">
    <script src="index.js"></script>
    <title>Sabores Naturales</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h2 class="titulo">Sabores Naturales</h2>
            <h1 class="sub-titulo">Comida Integral</h1>
        </div>
        <nav class="nav">
            <ul>
                <li><a class="nav-link" href="#">Inicio</a></li>
                <li><a class="nav-link" href="#recetas">Recetas</a></li>
                <li><a class="nav-link" href="#comprar">Comprar</a></li>
                <li><a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a></li>
            </ul>
        </nav>
    </header>

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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis numquam voluptate.</p>
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

    
    <footer class="seccion-negro">
        <div class="contenedor">
            <div class="footer footer-grid">
                <nav class="footer-izq">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#recetas">Recetas</a></li>
                    </ul>
                </nav>
                <div class="footer-mid">
                    <form class="footer-form" action="">
                        <p class="suscribete-txt">Subscribete</p>
                        <input id="subscribir" type="text" placeholder="Coloca tu Email">
                        <button id="suscribete-btn" class="boton-susc" type="submit">Enviar</button>
                        <div id="spinner" class="loader"></div>
                    </form>
                </div>
                <nav class="footer-der">
                    <ul>
                        <li><a href="#comprar">Comprar</a></li>
                        <li><a href="#ubicacion">Ubicación</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    
</body>
</html>
