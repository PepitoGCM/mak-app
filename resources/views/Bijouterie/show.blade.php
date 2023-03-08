@extends('layout.plantilla')

@section('title', 'Bijouterie ' . $bijouterie->nombre)

@section('content')
    <h1>Mostrar bijouterie {{ $bijouterie->nombre }}</h1>
    <p><strong>Tipo acero: </strong> {{ $bijouterie->acero }} </p>
    <p>{{ $bijouterie->descripcion }}</p>
    <a href="{{ Route('bijouterie.index') }}">Volver a bijouteries</a>
@endsection