@extends('layouts.app')

@section('content')

    <div class="container my-5">

        @foreach ($mangas as $manga)
            <div class="card my-2">
                <div class="card-header">
                    volumi: {{ $manga['volumi'] }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $manga['titolo'] }}</h5>
                    <p class="card-text">Autore: {{ $manga['autore'] }}</p>
                    <a href="{{ route("portfolio.show", $manga->id) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection