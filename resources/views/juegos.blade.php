<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>Listado de todos los juegos</h1>
    {{session('success')}}
    <form method="GET" action= {{ route('listaJuegos') }} >
        <input type="text" name="nombre" placeholder="Filtrado por nombre">
        <input type="submit" value="Filtrar">
    </form>
    @foreach ($juegos as $juego)
    <li><a href="{{ route('mostrarJuego', $juego->id) }}">{{ $juego->nombre }} - {{ $juego->descripcion }} </li>
    @endforeach
    <a href="{{ route(name: 'crearJuego') }}">Crear juego</a>

</body>

</html>