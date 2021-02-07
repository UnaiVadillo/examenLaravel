@extends('layout')


@section('titulo','Editar proyecto')

@section('content')

    <h1>Detalles del proyecto</h1>

    <form method="POST" action="{{route('actualizarproyecto')}}" id="edit">
        @csrf
        id =  <input type="text" disabled name="id" value="{{$proyecto->id}}"><br><br>
        titulo =  <input type="text" name="titulo" value="{{$proyecto->titulo}}"><br><br>
        url =  <input type="text" name="url" value="{{$proyecto->url}}"><br><br>
        descripcion =  <textarea name="text">{{$proyecto->descripcion}}</textarea><br><br>
        <input type="hidden" name="id" value="{{$proyecto->id}}">
        <input type="submit" value="Actualizar">
    </form>







@endsection
