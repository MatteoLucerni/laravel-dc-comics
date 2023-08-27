@extends('layouts.main');

@section('title', 'Comics List')

@section('main-content')
    <main>
        <a href="{{ route('comics.create') }}" class="d-block text-success text-end text-decoration-none ">
            + Aggiungi una squadra
        </a>
        <ul>
            @forelse ($comics as $comic)
                <li>
                    <h4>{{ $comic['title'] }}</h4>
                    <a href="{{ route('comics.show', $comic) }}">Più dettagli</a>
                </li>
            @empty
                <h3 class="text-danger">
                    Nessun fumetto disponibile
                </h3>
            @endforelse
        </ul>
        <a href="{{ route('home') }}">Torna alla home</a>
    </main>
@endsection
