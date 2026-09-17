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

            <div class="product-grid product-grid--3">
                @foreach ($products as $product)
                    <article class="product-card">
                        <a href="{{ route('products.show', $product) }}">
                            <div class="product-card__body">
                                <div>
                                    <p class="product-card__name">{{ $product->name }}</p>
                                    <p class="product-card__cat">{{ $product->category->name }}</p>
                                </div>
                                <p class="product-card__price">$ {{ number_format($product->price, 2) }}</p>
                            </div>
                        </a>

                        <div class="form-actions">
                            <a class="btn btn--ghost" href="{{ route('products.show', $product) }}">Ver</a>
                            <a class="btn btn--ghost" href="{{ route('products.edit', $product) }}">Editar</a>

                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                            </form>
                        </div>
                    </article>
                @endforeach
            </div>

            {{ $products->links() }}

        </div>
    </section>

@endsection
