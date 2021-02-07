@extends('layout')


@section('titulo','Proyecto nuevo')

@section('content')

    <h1>Crea un proyecto nuevo</h1>

    <form method="post" action="{{route('crearproyecto')}}">
        @csrf
        Titulo:
        <input type="text" name="titulo" value="{{old('titulo')}}">
        <br><br><br>
        Url:
        <input type="text" name="url" value="{{old('url')}}">
        <br><br><br>

        Descripcion
        <textarea name="descripcion">{{old('descripcion')}}</textarea>
        <br><br><br>

        <button type="submit">Añadir</button>
        <br><br>
        {!! session()->get('error') !!}

    </form>

@endsection
