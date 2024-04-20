@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('content')
    <a href="{{route('cursos.index')}}">Volver a cursos</a>

    <h1>bienvenido al curso {{$curso->name}}</h1>
    <p><strong>Categoria: </strong>{{$curso->descripcion}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection
