@extends('layouts.app')

@section('content')


    <div class="container my-5 ">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $manga->titolo }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $manga->autore}}</h6>
                <p class="card-text">Descrizioncina.</p>
                <p class="card-text">Volumi: {{ $manga->volumi }}</p>

            </div>
        </div>
    </div>

@endsection