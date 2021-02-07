@extends('layout')


@section('titulo','Detalles proyecto')

@section('content')

    <h1>Detalles del proyecto</h1>

    id =  <input type="text" disabled value="{{$proyectos[0]->id}}"><br><br>
    titulo =  <input type="text" disabled value="{{$proyectos[0]->titulo}}"><br><br>
    url =  <a href="{{$proyectos[0]->url}}">{{$proyectos[0]->url}}</a><br><br>
    descripcion =  <textarea disabled>{{$proyectos[0]->descripcion}}</textarea><br><br>
    creada =  <input type="text" disabled value="{{$proyectos[0]->created_at}}"><br><br>
    actualizada =  <input type="text" disabled value="{{$proyectos[0]->updated_at}}"><br><br>

    <a href="./eliminar/{{$proyectos[0]->id}}">Borrar</a>
    <a href="./edit/{{$proyectos[0]->id}}">Editar</a>
    <br><br>

    <h2>Añadir estudiante</h2>
    <form method="POST" action="{{route('crearestudiante')}}">
        @csrf
    Nombre: <input type="text" name="nombre" value="{{old("nombre")}}"><br><br>
    DNI: <input type="text" name="dni" value="{{old("dni")}}"><br><br>
        <input type="hidden" name="proyecto_id" value="{{$proyectos[0]->id}}" >
    <input type="submit" value="Añadir Estudiante"><br><br>


    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DNI</th>
            <th>CREADO</th>
            <th>BORRAR</th>
        </tr>
        @if(count($listaestudiantes)>0)
            @foreach($listaestudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->dni}}</td>
                    <td>{{$estudiante->created_at}}</td>
                    <td><a href="/mostrarproyecto/eliminarEstudiante/{{$estudiante->id}}">SI</a> </td>
                </tr>
            @endforeach
        @endif


    </table>
    <br><br>





@endsection

