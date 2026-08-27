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

    
    @include('layout.header')
    <!-- ============================ CONTENIDO DE CADA VISTA =================== -->
    @yield('content')
    @include('layout.footer')
    

</body>
</html>
