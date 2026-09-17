@extends('layout.app')

@section('title', 'Editar ' . $product->name . ' · DEUCE')
@section('description', 'Formulario para editar un producto existente.')

@section('content')

<!-- =========================== CABECERA DE PÁGINA ========================= -->
<section class="page-head">
    <div class="container">
        <nav class="breadcrumb">
            <a href="/">Inicio</a>
            <span>/</span>
            <a href="{{ route('products.index') }}">Raquetas</a>
            <span>/</span>
            <a href="{{ route('products.edit', $product) }}">Editar</a>
        </nav>

        <h1>Editar {{ $product->name }}</h1>
        <p>Modifica la ficha del producto y guarda los cambios.</p>
    </div>
</section>

<!-- ============================== FORMULARIO ============================= -->
<section class="container">
    <div class="create-layout">

        <form class="form-card" action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <fieldset class="fieldset">
                <legend>Identificación</legend>

                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nombre *</label>
                        <input class="input" type="text" id="name" name="name" value="{{ old('name', $product->name) }}">
                        @error('name') <span class="hint" style="color:red;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoría *</label>
                        <select class="select" id="category_id" name="category_id">
                            <option value="">-- Seleccione --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="hint" style="color:red;">{{ $message }}</span> @enderror
                    </div>
                </div>
            </fieldset>

            <fieldset class="fieldset">
                <legend>Precio y contenido</legend>

                <div class="form-row">
                    <div class="form-group">
                        <label for="price">Precio *</label>
                        <input class="input" type="number" step="0.01" id="price" name="price" value="{{ old('price', $product->price) }}">
                        @error('price') <span class="hint" style="color:red;">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group form-group--full">
                        <label for="description">Descripción *</label>
                        <textarea class="textarea" id="description" name="description">{{ old('description', $product->description) }}</textarea>
                        @error('description') <span class="hint" style="color:red;">{{ $message }}</span> @enderror
                    </div>
                </div>
            </fieldset>

            <div class="form-actions">
                <button class="btn" type="submit">Actualizar producto</button>
                <a class="btn btn--ghost" href="{{ route('products.index') }}">Cancelar</a>
            </div>

        </form>

    </div>
</section>

@endsection
