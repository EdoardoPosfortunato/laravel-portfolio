@extends('layouts.app')

@section('content')


    <div class="container my-5 ">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">{{ $portfolio->titolo }}</h5>
                <h6 class="card-subtitle mb-4 text-body-secondary">{{ $portfolio->tecnologie}}</h6>
                <p class="card-text">Volumi: {{ $portfolio->descrizione }}</p>
            </div>
        </div>
        <div class="d-flex justify-content-center my-5 gap-4">
                <a class="btn btn-outline-secondary" href={{ url("/portfolio") }}>Bacheca</a>
            <button class="btn btn-outline-warning">Modifica</button>
            <button class="btn btn-outline-danger">Elimina</button>
        </div>

    </div>

@endsection