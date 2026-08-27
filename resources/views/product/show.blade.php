@extends('layout.app')

@section('title', 'Vertex 98 Tour · DEUCE')
@section('description', 'Vertex 98 Tour: raqueta de control de 305 g, patrón 18x20, encordado incluido.')

@section('content')

<!-- ============================ DETALLE PRODUCTO ========================== -->
<section class="container">
    <nav class="breadcrumb" style="padding-top: 34px;">
        <a href="/">Inicio</a>
        <span>/</span>
        <a href="/product">Raquetas</a>
        <span>/</span>
        <a href="/product/1">Vertex 98 Tour</a>
    </nav>

    <div class="detail">

        <!-- Galería -->
        <div class="gallery">
            <div class="gallery__main">
                <img src="https://images.unsplash.com/photo-1530915365347-e35b749a0381?auto=format&fit=crop&w=1100&q=80" alt="Raqueta Vertex 98 Tour">
            </div>
            <div class="gallery__thumbs">
                <img src="https://images.unsplash.com/photo-1519611103964-90f61a50d3e6?auto=format&fit=crop&w=400&q=70" alt="Detalle del marco">
                <img src="https://images.unsplash.com/photo-1622163642998-1ea32b0bbc67?auto=format&fit=crop&w=400&q=70" alt="Detalle del encordado">
                <img src="https://images.unsplash.com/photo-1542144582-1ba00456b5e3?auto=format&fit=crop&w=400&q=70" alt="Raqueta en la cancha">
            </div>
        </div>

        <!-- Información -->
        <div class="detail__info">
            <p class="detail__cat">Control · Referencia #1</p>

            <h1>Vertex 98 Tour</h1>

            <div class="detail__price">
                <span>$ 1.290.000</span>
                <s>$ 1.490.000</s>
            </div>

            <p class="detail__desc">
                Un marco de 305 gramos pensado para quien ya sabe dónde quiere poner la bola.
                El patrón 18x20 mantiene la trayectoria bajo control en golpes planos y el
                balance en cabeza baja hace que la raqueta se sienta rápida en la red.
                Se entrega encordada con la tensión que elijas.
            </p>

            <span class="field-label">Talla de grip</span>
            <div class="grips">
                <span class="grip">L1</span>
                <span class="grip is-active">L2</span>
                <span class="grip">L3</span>
                <span class="grip">L4</span>
            </div>

            <span class="field-label">Tensión del encordado</span>
            <div class="grips">
                <span class="grip">23 kg</span>
                <span class="grip is-active">25 kg</span>
                <span class="grip">27 kg</span>
            </div>

            <div class="detail__actions">
                <button class="btn btn--lg" type="button">Añadir al carrito</button>
                <a class="btn btn--ghost btn--lg" href="/product">Seguir viendo</a>
            </div>

            <dl class="specs">
                <div>
                    <dt>Peso (sin encordar)</dt>
                    <dd>305 g</dd>
                </div>
                <div>
                    <dt>Tamaño de cabeza</dt>
                    <dd>98 in²</dd>
                </div>
                <div>
                    <dt>Patrón de cuerdas</dt>
                    <dd>18 x 20</dd>
                </div>
                <div>
                    <dt>Balance</dt>
                    <dd>32 cm</dd>
                </div>
                <div>
                    <dt>Material</dt>
                    <dd>Grafito + basalto</dd>
                </div>
                <div>
                    <dt>Nivel recomendado</dt>
                    <dd>Intermedio / avanzado</dd>
                </div>
            </dl>

            <ul class="notes">
                <li>Encordado profesional incluido, listo en 24 horas.</li>
                <li>Envío gratis a toda Colombia en compras desde $ 250.000.</li>
                <li>30 días para cambiarla si no se acomoda a tu juego.</li>
            </ul>
        </div>

    </div>
</section>

<hr class="rule">

<!-- =========================== PRODUCTOS RELACIONADOS ===================== -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div>
                <p class="eyebrow">También te puede servir</p>
                <h2 class="section-title">Raquetas parecidas</h2>
            </div>
            <a class="link-arrow" href="/product">Ver todo el catálogo →</a>
        </div>

        <div class="product-grid">
            <a class="product-card" href="/product/6">
                <div class="product-card__media">
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

            <a class="product-card" href="/product/3">
                <div class="product-card__media">
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
        </div>
    </div>
</section>

@endsection
