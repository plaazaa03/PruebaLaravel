<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Editar juego</h1>
    <form method="post" action= {{ route('actualizarJuego', $juego->id) }} >
        <!-- token de seguridad -->
        @csrf
        <!-- metodo de envio para actualizar el juego -->
        @method('PUT')
        <!-- se envian los datos del juego actual -->
        <input type="text" name="nombre" placeholder="nombre" value="{{old('nombre', $juego->nombre)}}">
        <input type="text" name="descripcion" placeholder="descripcion" value="{{old('descripcion', $juego->descripcion)}}">
        <input type="submit" value="Crear">
    </form>
</body>
</html>