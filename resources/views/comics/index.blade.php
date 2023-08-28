@extends('layouts.main');

@section('title', 'Comics List')

@section('main-content')
    <main>
        {{-- main-content --}}
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="btn-blue">
                        CURRENT SERIES
                    </div>
                    @foreach ($comics as $comic)
                        <div class="card">
                            <a href="{{ route('comics.show', $comic) }}">
                                <div class="img-container">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                </div>
                                <h5>{{ $comic['series'] }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
                <button href="{{ route('comics.create') }}" class="btn btn-blue">
                    AGGIUNGI UN FUMETTO
                </button>
                <a class="d-block text-center my-5" href="{{ route('home') }}">Torna alla home</a>
            </div>
        </section>
    </main>
@endsection
