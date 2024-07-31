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
                    <div id="form-largo" style="display: none;">
                        <h2>Completa tu suscripción</h2>
                        <form id="form-suscripcion" method="POST" action="suscribe.php">
                            <input type="hidden" id="hidden-email" name="email">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required>
                            <button type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
                <nav class="footer-der">
                    <ul>
                        <li><a href="#comprar">Comprar</a></li>
                        <li><a href="#ubicacion">Ubicación</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <p class="copyright">Todos los derechos reservados <?php echo date('Y') ?> &copy;</p>
    </footer>
        
</body>
</html>
