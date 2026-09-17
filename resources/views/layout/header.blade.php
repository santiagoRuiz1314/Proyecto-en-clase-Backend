<header class="site-header">
        <div class="container">
            <a class="brand" href="/">Deuce</a>

            <nav class="nav">
                <a href="/">Inicio</a>
                <a class="is-active" href="{{ route('products.index') }}">Raquetas</a>
                <a href="{{ route('products.index') }}">Categorías</a>
                <a href="{{ route('products.create') }}">Publicar</a>
            </nav>

            <div class="header-actions">
                <a class="pill" href="{{ route('products.index') }}">Buscar</a>
                <a class="pill" href="{{ route('products.index') }}">Carrito <span class="count">2</span></a>
            </div>
        </div>
    </header>