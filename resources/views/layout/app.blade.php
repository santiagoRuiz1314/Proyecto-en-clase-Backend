<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DEUCE · Raquetas de tenis')</title>
    <meta name="description" content="@yield('description', 'Tienda de raquetas de tenis en Colombia.')">
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <div class="topbar">
        <div class="container">
            <span>Envío gratis desde $ 250.000</span>
            <span>Encordado profesional incluido</span>
            <span>30 días para cambios</span>
        </div>
    </div>

    <header class="site-header">
        <div class="container">
            <a class="brand" href="/">Deuce</a>

            <nav class="nav">
                <a href="/">Inicio</a>
                <a class="is-active" href="/product">Raquetas</a>
                <a href="/product">Categorías</a>
                <a href="/product/create">Publicar</a>
            </nav>

            <div class="header-actions">
                <a class="pill" href="/product">Buscar</a>
                <a class="pill" href="/product">Carrito <span class="count">2</span></a>
            </div>
        </div>
    </header>

    <!-- ============================ CONTENIDO DE CADA VISTA =================== -->
    @yield('content')

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
                        <li><a href="/product">Todas las raquetas</a></li>
                        <li><a href="/product">Potencia</a></li>
                        <li><a href="/product">Control</a></li>
                        <li><a href="/product/create">Publicar producto</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="/product">Envíos</a></li>
                        <li><a href="/product">Cambios y garantía</a></li>
                        <li><a href="/product">Guía de tallas de grip</a></li>
                        <li><a href="/product">Contacto</a></li>
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

</body>
</html>
