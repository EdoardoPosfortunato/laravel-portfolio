@extends('layouts.app')

@section('content')


    <div class="container my-5 d-flex flex-column align-items-center">

        <h1>Modifica il Progetto</h1>
        <div class="my-5 col-9">
            <form action="{{ route('portfolio.update', $portfolio) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="titolo" class="form-label">Titolo del Progetto</label>
                    <input type="text" name="titolo" id="titolo" class="form-control" value="{{ $portfolio->titolo }}">
                </div>
                <div class="mb-3">
                    <label for="descrizione" class="form-label">Descrizione</label>
                    <input type="text-area" name="descrizione" id="descrizione" class="form-control"
                        value="{{ $portfolio->descrizione }}">
                </div>
                <div class="mb-3">
                    <label for="tecnologie" class="form-label">Linguaggi Usati</label>
                    <input type="text" name="tecnologie" id="tecnologie" class="form-control"
                        value="{{ $portfolio->tecnologie }}">
                </div>
                <div class="mb-3">
                    <label for="type_id" class="form-label">Linguaggi Usati</label>
                    <select name="type_id" id="type_id" class="form-select">
                        @foreach ($types as $type)

                            <option value="{{ $type->id }}" {{ $type->id == $portfolio->type_id ? 'selected' : '' }}>
                                {{ $type->name }}</option>

                        @endforeach
                    </select>
                    <div class="my-4 d-flex">
                        @foreach ($tecnologie as $tech)
                            <div class="mx-2">
                                <input type="checkbox" value="{{ $tech->id }}" id="tech-{{ $tech->id }}" name="technology[]" {{ $portfolio->tecnologies->contains($tech->id) ? 'checked' : '' }}>


                                <label for="tech-{{ $tech->id }}">{{ $tech->tecnologia }}</label>
                            </div>

                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link del Progetto</label>
                        <input type="text" name="link" id="link" class="form-control" value="{{ $portfolio->link }}">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="invia" class="btn btn-primary my-4">
                    </div>

            </form>
        </div>
    </div>

@endsection