<!DOCTYPE html>
<html>
<head>
    <title>@yield("titulo","Layout")</title>
</head>
<body>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('añadirproyecto')}}">Añadir proyecto</a></li>
        <li><a href="{{route('listaproyecto')}}">Lista proyectos</a></li>
    </ul>
    <hr>
    @yield("content","vacio")
</body>
</html>
