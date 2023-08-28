@extends('layouts.main');

@section('title', 'Comics List')

@section('main-content')
    <main>
        <a href="{{ route('comics.create') }}" class="d-block text-success text-end text-decoration-none mb-4">
            + Aggiungi un fumetto
        </a>
        <ul>
            @forelse ($comics as $comic)
                <li class="mb-4 border p-3 rounded ">
                    <h4 class="d-inline-block">{{ $comic['title'] }}</h4>
                    <a class="ms-3" href="{{ route('comics.show', $comic) }}">Più dettagli</a>
                </li>
            @empty
                <h3 class="text-danger">
                    Nessun fumetto disponibile
                </h3>
            @endforelse
        </ul>
        <a class="d-block text-center my-5 text-warning" href="{{ route('home') }}">Torna alla home</a>
    </main>
@endsection
