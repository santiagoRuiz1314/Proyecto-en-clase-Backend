<footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <a class="brand" href="/">Deuce</a>
                    <p>Raquetas de tenis seleccionadas una por una. Bogotá, Colombia.</p>
                </div>

                <div>
                    <h4>Tienda</h4>
                    <ul>
                        <li><a href="{{ route('products.index') }}">Todas las raquetas</a></li>
                        <li><a href="{{ route('products.index') }}">Potencia</a></li>
                        <li><a href="{{ route('products.index') }}">Control</a></li>
                        @auth
                            <li><a href="{{ route('products.create') }}">Publicar producto</a></li>
                        @endauth
                    </ul>
                </div>

                <div>
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="{{ route('products.index') }}">Envíos</a></li>
                        <li><a href="{{ route('products.index') }}">Cambios y garantía</a></li>
                        <li><a href="{{ route('products.index') }}">Guía de tallas de grip</a></li>
                        <li><a href="{{ route('products.index') }}">Contacto</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Síguenos</h4>
                    <ul>
                        <li><a href="/">Instagram</a></li>
                        <li><a href="/">YouTube</a></li>
                        <li><a href="/">TikTok</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2026 Deuce Tennis Store</p>
                <p>Términos · Privacidad · Cookies</p>
            </div>
        </div>
    </footer>