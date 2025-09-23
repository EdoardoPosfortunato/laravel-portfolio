@extends('layouts.app')

@section('content')


    <div class="container my-5 ">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-3">{{ $portfolio->titolo }}</h5>
                <h6 class="card-subtitle mb-4 text-body-secondary">{{ $portfolio->tecnologie}}</h6>
                <p class="card-text">Descrizione: {{ $portfolio->descrizione }}</p>
            </div>
        </div>
        <div class="d-flex justify-content-center my-5 gap-4">
            <a class="btn btn-outline-secondary" href={{ url("/portfolio") }}>Bacheca</a>
            <a class="btn btn-outline-warning" href={{ url("/portfolio/$portfolio->id/edit") }}>Modifica</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sicuro??</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare questo Progetto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">chiudi</button>
                    <form action="{{ route('portfolio.destroy', $portfolio)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger" value="Elimina" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection