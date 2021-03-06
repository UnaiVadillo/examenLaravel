@extends('layout')


@section('titulo','Proyectos')

@section('content')

    <h1>Lista proyectos</h1>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Mas detalles</th>
            <th>Creada</th>
            <th>Actualizada</th>
            <th>Borrar</th>
        </tr>
            @forelse($listaproyectos as $proyecto)
                <tr>
                    <td>{{$proyecto->id}}</td>
                    <td>{{$proyecto->titulo}}</td>
                    <td><a href="/mostrarproyecto/{{$proyecto->id}}">Mas información</a></td>
                    <td>{{$proyecto->created_at}}</td>
                    <td>{{$proyecto->updated_at}}</td>
                    <td><a href="/mostrarproyecto/eliminar/{{$proyecto->id}}">Si</a></td>
                </tr>
            @empty
                <h1>No hay proyectos</h1>
            @endforelse
        @endif
    </table>
    <a href="/borrartodos">Borrar todos los proyectos</a>
@endsection

