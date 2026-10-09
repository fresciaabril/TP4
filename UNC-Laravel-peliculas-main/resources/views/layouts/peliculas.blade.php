<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Películas' }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 40px auto; padding: 0 20px; color: #222; }
        nav { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 25px; }
        a { color: #2457a6; }
        .boton { padding: 9px 14px; border: 1px solid #bbb; border-radius: 6px; text-decoration: none; background: #fff; }
        .boton.activo { border-color: #2457a6; background: #eef4ff; }
        .pelicula { border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin: 15px 0; display: flex; gap: 20px; align-items: center; }
        .poster, .sin-imagen { width: 120px; height: 170px; border-radius: 6px; flex: 0 0 120px; }
        .poster { object-fit: cover; }
        .sin-imagen { background: #eee; display: flex; align-items: center; justify-content: center; color: #777; text-align: center; }
        .detalle-poster { max-width: 250px; max-height: 360px; object-fit: cover; border-radius: 8px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input, textarea { width: 100%; box-sizing: border-box; padding: 8px; margin-top: 5px; }
        textarea { min-height: 100px; }
        .errores { background: #fee; border: 1px solid #d88; padding: 12px 18px; border-radius: 6px; }
        button { margin-top: 20px; padding: 10px 18px; cursor: pointer; }
        small { display: block; margin-top: 6px; color: #555; }
        
        /* Estilos básicos para el Header y Footer */
        header { background: #f8f9fa; padding: 15px; border-bottom: 2px solid #ddd; margin-bottom: 20px; text-align: center; }
        footer { background: #f8f9fa; padding: 15px; border-top: 2px solid #ddd; margin-top: 40px; text-align: center; font-size: 14px; color: #666; }
    </style>
</head>
<body>

    <!-- ENCABEZADO CREADO PARA EL LAYOUT -->
    <header>
        <h1>🎬 Catálogo de Películas</h1>
        <nav style="justify-content: center;">
            <a href="{{ route('peliculas.index') }}" class="boton">Inicio / Listado</a>
            <a href="{{ route('peliculas.create') }}" class="boton">Nueva Película</a>
        </nav>
    </header>

    <!-- CONTENIDO DINÁMICO DE CADA VISTA -->
    <main>
        @yield('content')
    </main>

    <!-- PIE DE PÁGINA CREADO PARA EL LAYOUT -->
    <footer>
        <p>&copy; 2026 </p>
    </footer>

</body>
</html>