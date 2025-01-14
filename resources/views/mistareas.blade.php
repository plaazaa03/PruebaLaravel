<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>{{ $aviso }}</h1>
    @foreach ($mensajes as $mensaje)
        <li>{{ $mensaje }}</li>
    @endforeach
</body>
</html>