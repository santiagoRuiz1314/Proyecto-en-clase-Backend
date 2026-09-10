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
                <a href="/product">Raquetas</a>
            </nav>

            <h1>Todas las raquetas</h1>
            <p>
                48 modelos disponibles, todos con encordado incluido y prueba de 30 días.
                Filtra por el tipo de juego que quieras desarrollar.
            </p>
        </div>
    </section>

    <!-- ========================= FILTROS + LISTADO ============================ -->
    <section class="section section--flush">
        <div class="container">

            <div class="toolbar">
                <div class="chips">
                    <a class="chip is-active" href="/product">Todas</a>
                    <a class="chip" href="/product">Potencia</a>
                    <a class="chip" href="/product">Control</a>
                    <a class="chip" href="/product">Polivalente</a>
                    <a class="chip" href="/product">Junior</a>
                    <a class="chip" href="/product">Menos de $ 800.000</a>
                </div>
                <p class="toolbar-meta">Mostrando 9 de 48 · Ordenar por: relevancia</p>
            </div>
            @foreach ($listaDeProductos as $producto)
            <div class="product-grid product-grid--3">

                <a class="product-card" href="/product/1">
                    <div class="product-card__media">
                        <span class="badge">Nuevo</span>
                        <img src="https://images.unsplash.com/photo-1530915365347-e35b749a0381?auto=format&fit=crop&w=700&q=80" alt="Vertex 98 Tour">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Vertex 98 Tour</p>
                            <p class="product-card__cat">Control</p>
                        </div>
                        <p class="product-card__price">$ 1.290.000</p>
                    </div>
                </a>

              
            </div>
            @endforeach
            <nav class="pagination">
                <a href="/product">Anterior</a>
                <a class="is-active" href="/product">1</a>
                <a href="/product">2</a>
                <a href="/product">3</a>
                <a href="/product">Siguiente</a>
            </nav>

        </div>
    </section>

@endsection 