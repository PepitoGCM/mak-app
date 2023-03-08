@extends('layout.plantilla')

@section('title', 'Bijouterie')

@section('content')
    <h1>Página principal de Bijouterie</h1>
    <ul>
        <a href="{{ route('bijouterie.create') }}">Crear curso</a>
        @foreach ($bijouteries as $bijouterie)
            <li>
                <a href="{{ route('bijouterie.show', $bijouterie->id) }}">{{ $bijouterie->nombre }}</a>
            </li>
        @endforeach
    </ul>

    {{ $bijouteries->links() }}
@endsection