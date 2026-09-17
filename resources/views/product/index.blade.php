@extends('layout.app')

@section('title', 'Raquetas · DEUCE')
@section('description', 'Listado completo de raquetas de tenis: potencia, control, polivalentes y junior.')

@section('content')

    <!-- =========================== CABECERA DE PÁGINA ========================= -->
    <section class="page-head">
        <div class="container">
            <nav class="breadcrumb">
                <a href="/">Inicio</a>
                <span>/</span>
                <a href="{{ route('products.index') }}">Raquetas</a>
            </nav>

            <h1>Todas las raquetas</h1>
            <p>
                {{ $products->total() }} modelos disponibles, todos con encordado incluido y prueba de 30 días.
            </p>
        </div>
    </section>

    <!-- ========================= LISTADO DE PRODUCTOS ========================= -->
    <section class="section section--flush">
        <div class="container">

            <div class="toolbar">
                <p class="toolbar-meta">
                    Mostrando {{ $products->count() }} de {{ $products->total() }} · Ordenar por: más recientes
                </p>
            </div>

            <div class="product-list">
                @foreach ($products as $product)
                    <article class="product-list__row">
                        <div>
                            <a class="product-list__name" href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                            <p class="product-list__cat">{{ $product->category->name }}</p>
                        </div>

                        <p class="product-list__price">$ {{ number_format($product->price, 2) }}</p>

                        <div class="product-list__actions">
                            <a class="btn btn--ghost" href="{{ route('products.show', $product) }}">Ver</a>

                            {{-- Opciones administrativas ocultas para visitantes --}}
                            @auth
                                <a class="btn btn--ghost" href="{{ route('products.edit', $product) }}">Editar</a>

                                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                                </form>
                            @endauth
                        </div>
                    </article>
                @endforeach
            </div>

            {{ $products->links('vendor.pagination.deuce') }}

        </div>
    </section>

@endsection
