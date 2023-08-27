@extends('layouts.main');

@section('title', 'Comics List')

@section('main-content')
    <main>
        <a href="{{ route('comics.create') }}" class="d-block text-success text-end text-decoration-none ">
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
        <a href="{{ route('home') }}">Torna alla home</a>
    </main>
@endsection
