@extends('layouts.app')

@section('content')



    <div class="container my-5">

        @foreach ($projects as $project)
            <div class="card my-2">
                <div class="card-header">
                   {{ $project['titolo'] }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $project['titolo'] }}</h5>
                    <p class="card-text">Tecnologie: {{ $project['tecnologie'] }}</p>
                    <p class="card-text">Tipologia: {{ $project->type->name }}</p>
                    <a href="{{ route("portfolio.show", $project->id) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection