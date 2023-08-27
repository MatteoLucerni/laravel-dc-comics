@extends('layouts.main');

@section('title', 'Comic Info')

@section('main-content')
    <main>
        <img src="{{ $comic->thumb }}" alt="">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->series }}</p>
        <h3>{{ $comic->price }}</h3>
        <p>Tipo: {{ $comic->type }}</p>
        <p>Data: {{ $comic->sale_date }}</p>
        <p>Artisti: {{ $comic->artists }}</p>
        <p class="mb-5">Scrittori: {{ $comic->writers }}</p>
        <a href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
    </main>
@endsection
