@extends('layouts.peliculas', ['title' => $titulo])

@section('content')
    @forelse ($peliculas as $pelicula)
        <article class="pelicula">
            @if ($url = $modelo->urlImagen($pelicula['imagen']))
                <img class="poster"
                    src="{{ $url }}"
                    alt="Poster de {{ $pelicula['titulo'] }}"
                >
            @else
                <div class="sin-imagen">Sin imagen</div>
            @endif

            <div>
                <h2>{{ $pelicula['titulo'] }}</h2>
                <p>{{ $pelicula['genero'] }} - {{ (int) $pelicula['anio'] }}</p>
                <a href="{{ route('peliculas.show', $pelicula['id']) }}">Ver detalle</a>
            </div>
        </article>
    @empty
        <p>No hay películas para mostrar.</p>
    @endforelse
@endsection