@extends('layouts.peliculas', ['title' => $pelicula ? $pelicula['titulo'] : 'Pelicula no encontrada'])

@section('content')
    @if ($pelicula)
        @if ($url = $modelo->urlImagen($pelicula['imagen']))
            <img
                class="detalle-poster"
                src="{{ $url }}"
                alt="Poster de {{ $pelicula['titulo'] }}"
            >
        @endif

        <h1>{{ $pelicula['titulo'] }}</h1>
        <p><strong>Genero:</strong> {{ $pelicula['genero'] }}</p>
        <p><strong>Anio:</strong> {{ (int) $pelicula['anio'] }}</p>
        <p>{!! nl2br(e($pelicula['descripcion'])) !!}</p>

        <br>
        <hr>
        <h3>Reseñas de la película</h3>

        <!-- Listado de reseñas existentes -->
        @forelse($resenas as $resena)
            <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 5px;">
                <p><strong>{{ $resena->nombre }}</strong> - ⭐ Puntaje: {{ $resena->puntaje }}/5</p>
                <p>{{ $resena->comentarios }}</p>
                <small style="color: gray;">Escrito el: {{ $resena->created_at->format('d/m/Y') }}</small>
            </div>
        @empty
            <p>Todavía no hay reseñas para esta película. Se el primero en dejar una</p>
        @endforelse

        <hr>
        <form action="{{ route('resenas.store', $pelicula['id']) }}" method="POST">
            @csrf
            <h4>Deja tu reseña</h4>

            <div>
                <label for="nombre">Tu Nombre:</label><br>
                <input type="text" name="nombre" id="nombre" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
            </div>

            <div>
                <label for="comentarios">Comentarios:</label><br>
                <textarea name="comentarios" id="comentarios" rows="4" required style="width: 100%; padding: 8px; margin-bottom: 10px;"></textarea>
            </div>

            <div>
                <label for="puntaje">Puntaje (1 al 5):</label><br>
                <input type="number" name="puntaje" id="puntaje" min="1" max="5" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
            </div>

            <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Enviar Reseña
            </button>
        </form>

    @else
        <h1>Pelicula no encontrada</h1>
    @endif

    <p><a href="{{ route('peliculas.index') }}"><- Volver</a></p>
@endsection