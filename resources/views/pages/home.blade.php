@extends('layouts.main-layout')

@section('content')

<h2>Lista dei fumetti:</h2>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <p>Titolo del fumetto: <a href="{{route('show', $comic -> id)}}">{{$comic -> title}}</a></p>

                <p>Data di uscita: {{$comic -> date_release}}</p>
            </li>
        @endforeach
    </ul>
    
@endsection