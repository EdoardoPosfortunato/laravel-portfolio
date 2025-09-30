@extends('layouts.app')

@section('content')



    <div class="container my-5">

        @foreach ($projects as $project)
            <div class="card my-2">
                <div class="card-header">
                   {{ $project['titolo'] }} (numero {{ $project->id }})
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $project['titolo'] }}</h5>
                    <div class="card-text d-flex my-3">Tecnologie: 
                        @forelse ($project->tecnologies as $techs)
                        <span class="badge text-bg-dark mx-1">{{ $techs->tecnologia }}</span>
                        @empty
                        <span class="badge text-bg-danger mx-1">Nessuno</span>
                        @endforelse
                    </div>
                    <p class="card-text">Tipologia: {{ $project->type->name }}</p>
                    <a href="{{ route("portfolio.show", $project->id) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection