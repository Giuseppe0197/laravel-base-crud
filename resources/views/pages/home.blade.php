@extends('layouts.main-layout')

@section('content')

<h2>Lista dei fumetti:</h2>

    <div class="container">
    @foreach ($comics as $comic)
        <div class="comics">
            <p class="title">Titolo del fumetto: <a href="{{route('show', $comic -> id)}}">{{$comic -> title}}</a></p>

            <p class="date">Data di uscita: {{$comic -> date_release}}</p>
        </div>
    @endforeach
    </div>
    
@endsection