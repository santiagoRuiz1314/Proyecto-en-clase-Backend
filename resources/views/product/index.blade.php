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

                <a class="product-card" href="/product/2">
                    <div class="product-card__media">
                        <img src="https://images.unsplash.com/photo-1519611103964-90f61a50d3e6?auto=format&fit=crop&w=700&q=80" alt="Aero 100 Pro">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Aero 100 Pro</p>
                            <p class="product-card__cat">Potencia</p>
                        </div>
                        <p class="product-card__price">$ 1.150.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/3">
                    <div class="product-card__media">
                        <span class="badge badge--dark">-15%</span>
                        <img src="https://images.unsplash.com/photo-1646343253545-9171464ce425?auto=format&fit=crop&w=700&q=80" alt="Meridian 305">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Meridian 305</p>
                            <p class="product-card__cat">Polivalente</p>
                        </div>
                        <p class="product-card__price">$ 989.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/4">
                    <div class="product-card__media">
                        <img src="https://images.unsplash.com/photo-1684443726782-1d5bb1aecbd5?auto=format&fit=crop&w=700&q=80" alt="Slice One 100">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Slice One 100</p>
                            <p class="product-card__cat">Polivalente</p>
                        </div>
                        <p class="product-card__price">$ 745.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/5">
                    <div class="product-card__media">
                        <img src="https://images.unsplash.com/photo-1723980839948-95ccbffd3cb4?auto=format&fit=crop&w=700&q=80" alt="Zenith Lite 105">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Zenith Lite 105</p>
                            <p class="product-card__cat">Potencia</p>
                        </div>
                        <p class="product-card__price">$ 690.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/6">
                    <div class="product-card__media">
                        <span class="badge">Últimas 3</span>
                        <img src="https://images.unsplash.com/photo-1617883861744-13b534e3b928?auto=format&fit=crop&w=700&q=80" alt="Blackline 315">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Blackline 315</p>
                            <p class="product-card__cat">Control</p>
                        </div>
                        <p class="product-card__price">$ 1.420.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/7">
                    <div class="product-card__media">
                        <img src="https://images.unsplash.com/photo-1635873021329-c0af04695c9d?auto=format&fit=crop&w=700&q=80" alt="Rally 98 Graphite">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Rally 98 Graphite</p>
                            <p class="product-card__cat">Control</p>
                        </div>
                        <p class="product-card__price">$ 1.080.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/8">
                    <div class="product-card__media">
                        <img src="https://images.unsplash.com/photo-1560012057-4372e14c5085?auto=format&fit=crop&w=700&q=80" alt="Topspin 102">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Topspin 102</p>
                            <p class="product-card__cat">Potencia</p>
                        </div>
                        <p class="product-card__price">$ 820.000</p>
                    </div>
                </a>

                <a class="product-card" href="/product/9">
                    <div class="product-card__media">
                        <img src="https://images.unsplash.com/photo-1587683437362-da7775ffc532?auto=format&fit=crop&w=700&q=80" alt="Junior 25 Start">
                    </div>
                    <div class="product-card__body">
                        <div>
                            <p class="product-card__name">Junior 25 Start</p>
                            <p class="product-card__cat">Junior</p>
                        </div>
                        <p class="product-card__price">$ 320.000</p>
                    </div>
                </a>

            </div>

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