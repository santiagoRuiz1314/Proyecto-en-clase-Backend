@extends('layout.app')

@section('title', $product->name . ' · DEUCE')
@section('description', Str::limit($product->description, 150))

@section('content')

<!-- ============================ DETALLE PRODUCTO ========================== -->
<section class="container">
    <nav class="breadcrumb" style="padding-top: 34px;">
        <a href="/">Inicio</a>
        <span>/</span>
        <a href="{{ route('products.index') }}">Raquetas</a>
        <span>/</span>
        <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
    </nav>

    <div class="detail">

        <!-- Información -->
        <div class="detail__info">
            <p class="detail__cat">{{ $product->category->name }} · Referencia #{{ $product->id }}</p>

            <h1>{{ $product->name }}</h1>

            <div class="detail__price">
                <span>$ {{ number_format($product->price, 2) }}</span>
            </div>

            <p class="detail__desc">{{ $product->description }}</p>

            <div class="detail__actions">
                <a class="btn btn--ghost btn--lg" href="{{ route('products.index') }}">Seguir viendo</a>
                <a class="btn btn--lg" href="{{ route('products.edit', $product) }}">Editar producto</a>
            </div>

            <dl class="specs">
                <div>
                    <dt>Categoría</dt>
                    <dd>{{ $product->category->name }}</dd>
                </div>
                <div>
                    <dt>Publicado</dt>
                    <dd>{{ $product->created_at->format('d/m/Y') }}</dd>
                </div>
                <div>
                    <dt>Última actualización</dt>
                    <dd>{{ $product->updated_at->format('d/m/Y') }}</dd>
                </div>
            </dl>
        </div>

    </div>
</section>

@endsection
