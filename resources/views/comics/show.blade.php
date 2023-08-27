@extends('layouts.main');

@section('title', 'Comic Info')

@section('main-content')
    <main>
        <img class="mb-5" style="max-height: 500px" src="{{ $comic->thumb }}" alt="">
        <div class="border border-info rounded p-5">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->series }}</p>
            <h3>{{ $comic->price }}</h3>
            <p>Tipo: {{ $comic->type }}</p>
            <p>Data: {{ $comic->sale_date }}</p>
            <p>Artisti: {{ $comic->artists }}</p>
            <p class="mb-5">Scrittori: {{ $comic->writers }}</p>
            <a href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
        </div>
    </main>
@endsection
