<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Crear juego</h1>
    <form method="post" action= {{ route('guardarJuego') }} >
        <!-- token de seguridad -->
        @csrf
        
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="descripcion" placeholder="descripcion">
        <input type="submit" value="Crear">
    </form>
</body>
</html>