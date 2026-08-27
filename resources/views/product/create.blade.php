@extends('layout.app')

@section('title', 'Publicar raqueta · DEUCE')
@section('description', 'Formulario para crear un producto: id, nombre, precio, descripción, categoría y url de la imagen.')

@section('content')

<!-- =========================== CABECERA DE PÁGINA ========================= -->
<section class="page-head">
    <div class="container">
        <nav class="breadcrumb">
            <a href="/">Inicio</a>
            <span>/</span>
            <a href="/product">Raquetas</a>
            <span>/</span>
            <a href="/product/create">Nuevo producto</a>
        </nav>

        <h1>Publicar una raqueta</h1>
        <p>
            Completa la ficha del producto. Los campos marcados con asterisco son los que
            aparecen en el listado y en el detalle de la tienda.
        </p>
    </div>
</section>

<!-- ============================== FORMULARIO ============================= -->
<section class="container">
    <div class="create-layout">

        <form class="form-card" action="#">

            <fieldset class="fieldset">
                <legend>Identificación</legend>

                <div class="form-row">
                    <div class="form-group">
                        <label for="id">ID del producto *</label>
                        <input class="input" type="text" id="id" name="id" placeholder="10" required>
                        <span class="hint">Número único con el que se arma la URL /product/10</span>
                    </div>

                    <div class="form-group">
                        <label for="name">Nombre *</label>
                        <input class="input" type="text" id="name" name="name" placeholder="Vertex 98 Tour" required>
                        <span class="hint">Modelo tal como se muestra en la tarjeta</span>
                    </div>
                </div>
            </fieldset>

            <fieldset class="fieldset">
                <legend>Precio y clasificación</legend>

                <div class="form-row">
                    <div class="form-group">
                        <label for="precio">Precio *</label>
                        <input class="input" type="number" id="precio" name="precio" placeholder="1290000" min="0" step="1000" required>
                        <span class="hint">En pesos colombianos, sin puntos ni símbolos</span>
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoría *</label>
                        <select class="select" id="categoria" name="categoria" required>
                            <option value="">Selecciona una categoría</option>
                            <option value="potencia">Potencia</option>
                            <option value="control">Control</option>
                            <option value="polivalente">Polivalente</option>
                            <option value="junior">Junior</option>
                        </select>
                        <span class="hint">Define en qué filtro del listado aparece</span>
                    </div>
                </div>
            </fieldset>

            <fieldset class="fieldset">
                <legend>Contenido</legend>

                <div class="form-row">
                    <div class="form-group form-group--full">
                        <label for="descripcion">Descripción *</label>
                        <textarea class="textarea" id="descripcion" name="descripcion" placeholder="Peso, patrón de cuerdas, tipo de jugador al que le sirve..." required></textarea>
                        <span class="hint">Entre 200 y 600 caracteres. Es el texto del detalle del producto.</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group form-group--full">
                        <label for="imagen">URL de la imagen *</label>
                        <input class="input" type="url" id="imagen" name="imagen" placeholder="https://images.unsplash.com/photo-..." required>
                        <span class="hint">Imagen vertical (4:5), mínimo 700 px de ancho</span>
                    </div>
                </div>
            </fieldset>

            <div class="form-actions">
                <button class="btn" type="submit">Guardar producto</button>
                <a class="btn btn--ghost" href="/product">Cancelar</a>
                <span class="note">Se publica de inmediato en el listado</span>
            </div>

        </form>

        <!-- Vista previa de referencia -->
        <aside class="aside-card">
            <h3>Así se verá</h3>
            <p>La tarjeta que verá el cliente en el listado de raquetas.</p>

            <div class="preview">
                <img src="https://images.unsplash.com/photo-1530915365347-e35b749a0381?auto=format&fit=crop&w=600&q=80" alt="Vista previa del producto">
            </div>

            <div class="preview-body">
                <strong>Nombre del producto</strong>
                <span>Categoría</span>
                <p class="price">$ 0</p>
            </div>

            <ul class="tips">
                <li>Usa fotos con fondo limpio y la raqueta completa.</li>
                <li>El ID no se puede repetir con otro producto.</li>
                <li>Escribe el peso y el patrón dentro de la descripción.</li>
            </ul>
        </aside>

    </div>
</section>

@endsection
