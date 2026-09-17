<header class="site-header">
        <div class="container">
            <a class="brand" href="/">Deuce</a>

            <nav class="nav">
                <a href="/">Inicio</a>
                <a class="is-active" href="{{ route('products.index') }}">Raquetas</a>

                {{-- Visible ÚNICAMENTE para usuarios autenticados --}}
                @auth
                    <a href="{{ route('products.create') }}">Publicar</a>
                @endauth
            </nav>

            <div class="header-actions">
                @auth
                    <span class="pill">Hola, {{ Auth::user()->name }}</span>

                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button class="pill" type="submit">Cerrar Sesión</button>
                    </form>
                @endauth

                {{-- Visible ÚNICAMENTE para visitantes no autenticados --}}
                @guest
                    <a class="pill" href="{{ route('login') }}">Iniciar Sesión</a>
                    <a class="pill" href="{{ route('register') }}">Registrarse</a>
                @endguest
            </div>
        </div>
    </header>
