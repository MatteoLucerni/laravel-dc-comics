@extends('layouts.main');

@section('title', 'Add Comic')

@section('main-content')
    <main>
        <div class="card-header">
            <h1>Aggiungi il tuo fumetto</h1>
            <a href="{{ route('comics.index') }}">Indietro</a>
        </div>
        <div class="card-body">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input name="title" required type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Immagine (link)</label>
                            <input name="thumb" type="url" class="form-control" id="thumb">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo (in $)</label>
                            <input name="price" required type="number" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie</label>
                            <input name="series" required type="text" class="form-control" id="series">
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data</label>
                            <input name="sale_date" type="date" class="form-control" id="sale_date">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo</label>
                            <input name="type" required type="text" class="form-control" id="type">
                        </div>
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artisti</label>
                            <input name="artists" type="text" class="form-control" id="artists">
                        </div>
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scrittori</label>
                            <input name="writers" type="text" class="form-control" id="writers">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="my-3 mx-5">
                            <div class="form-floating">
                                <textarea name="description" class="form-control" placeholder="Descrizione..." id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descrizione</label>
                            </div>
                        </div>
                    </div>
                    <div class="inputs text-center my-5">
                        <input class="btn green-button" type="submit" value="CREA">
                        <input class="btn gray-button" type="reset" value="CANELLA">
                    </div>
            </form>
        </div>
    </main>
@endsection
