@extends('layout.app')

@section('title', 'Mi panel · DEUCE')
@section('description', 'Resumen de tu cuenta, tu carrito y el catálogo de Deuce.')

@section('content')

<!-- =========================== CABECERA DE PÁGINA ========================= -->
<section class="page-head">
    <div class="container">
        <nav class="breadcrumb">
            <a href="/">Inicio</a>
            <span>/</span>
            <a href="{{ route('dashboard') }}">Mi panel</a>
        </nav>

        <h1>Hola, {{ Auth::user()->name }}</h1>
        <p>Este es el resumen de tu cuenta y del catálogo de la tienda.</p>

        <div class="form-actions" style="margin-top: 28px;">
            <a class="btn" href="{{ route('products.index') }}">Volver al catálogo</a>
            <a class="btn btn--ghost" href="/">Ir a la página principal</a>
        </div>
    </div>
</section>

<!-- ============================== INDICADORES ============================ -->
<section class="section section--flush">
    <div class="container">

        <div class="stat-grid">
            <div class="stat-card">
                <span class="stat-card__label">Artículos en tu carrito</span>
                <strong class="stat-card__value">{{ $cartCount }}</strong>
                <p class="stat-card__hint">{{ $cartItems->count() }} {{ $cartItems->count() === 1 ? 'producto distinto' : 'productos distintos' }}</p>
            </div>

            <div class="stat-card">
                <span class="stat-card__label">Valor de tu carrito</span>
                <strong class="stat-card__value">$ {{ number_format($cartTotal, 2) }}</strong>
                <p class="stat-card__hint">Suma de cantidad × precio</p>
            </div>

            <div class="stat-card">
                <span class="stat-card__label">Productos en el catálogo</span>
                <strong class="stat-card__value">{{ $totalProducts }}</strong>
                <p class="stat-card__hint">Publicados en la tienda</p>
            </div>

            <div class="stat-card">
                <span class="stat-card__label">Categorías</span>
                <strong class="stat-card__value">{{ $totalCategories }}</strong>
                <p class="stat-card__hint">Disponibles al publicar</p>
            </div>
        </div>

    </div>
</section>

<hr class="rule">

<!-- ========================= CUENTA Y CARRITO ============================= -->
<section class="section">
    <div class="container">
        <div class="create-layout">

            <div class="form-card">
                <h2 class="section-title">Tu carrito</h2>

                @if ($cartItems->isEmpty())
                    <p class="note" style="margin-top: 18px;">
                        Todavía no tienes productos en el carrito.
                    </p>
                    <div class="form-actions">
                        <a class="btn btn--ghost" href="{{ route('products.index') }}">Ver raquetas</a>
                    </div>
                @else
                    <div class="product-list" style="margin-top: 18px;">
                        @foreach ($cartItems as $item)
                            <article class="product-list__row">
                                <div>
                                    <a class="product-list__name" href="{{ route('products.show', $item->product) }}">{{ $item->product->name }}</a>
                                    <p class="product-list__cat">Cantidad: {{ $item->quantity }}</p>
                                </div>
                                <p class="product-list__price">$ {{ number_format($item->quantity * $item->product->price, 2) }}</p>
                                <span></span>
                            </article>
                        @endforeach
                    </div>
                @endif
            </div>

            <aside class="aside-card">
                <h3>Tu cuenta</h3>

                <dl class="specs" style="margin-top: 20px;">
                    <div>
                        <dt>Nombre</dt>
                        <dd>{{ Auth::user()->name }}</dd>
                    </div>
                    <div>
                        <dt>Correo</dt>
                        <dd>{{ Auth::user()->email }}</dd>
                    </div>
                    <div>
                        <dt>Miembro desde</dt>
                        <dd>{{ Auth::user()->created_at->format('d/m/Y') }}</dd>
                    </div>
                </dl>

                <div class="form-actions">
                    <a class="btn btn--ghost" href="{{ route('profile.edit') }}">Editar perfil</a>
                    <a class="btn" href="{{ route('products.create') }}">Publicar raqueta</a>
                </div>
            </aside>

        </div>
    </div>
</section>

<hr class="rule">

<!-- ======================= ÚLTIMOS PRODUCTOS ============================== -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div>
                <p class="eyebrow">Movimiento reciente</p>
                <h2 class="section-title">Últimas raquetas publicadas</h2>
            </div>
            <a class="link-arrow" href="{{ route('products.index') }}">Ver todo el catálogo →</a>
        </div>

        <div class="product-list">
            @foreach ($latestProducts as $product)
                <article class="product-list__row">
                    <div>
                        <a class="product-list__name" href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                        <p class="product-list__cat">{{ $product->category->name }} · {{ $product->created_at->format('d/m/Y') }}</p>
                    </div>
                    <p class="product-list__price">$ {{ number_format($product->price, 2) }}</p>
                    <div class="product-list__actions">
                        <a class="btn btn--ghost" href="{{ route('products.show', $product) }}">Ver</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
