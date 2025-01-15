<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>Listado de todos los juegos</h1>
    @foreach ($juegos as $juego)
        <li>{{ $juego->nombre }} - {{ $juego->descripcion }} </li>
    @endforeach
</body>

</html>