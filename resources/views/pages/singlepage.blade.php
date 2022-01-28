@extends('layouts.main-layout')

@section('content')

<h2>Lista nuova dei fumetti:</h2>

    <div class="container-comics">

        <div class="single-comic">
            <p>Titolo completo del fumetto: {{$comic -> title}}</p>
    
            <p>Sottotitolo del fumetto: {{$comic -> author}}</p>
    
            <p>Data di uscita del fumetto: {{$comic -> date_release}}</p>
    
            <p>Numero di pagine: {{$comic -> pages}}</p>
        </div>

    </div>
    
@endsection