@extends('layouts.main');

@section('title', 'Comics List')

@section('main-content')
    <main>
        {{-- main-content --}}
        <section id="content">
            <div class="container">
                <div id="alert-delete">
                    @if (session('delete'))
                        <div class="alert alert-success text-success">
                            {{ session('delete') }}
                        </div>
                    @endif
                </div>
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
                <a href="{{ route('comics.create') }}" class="btn btn-blue redirect">
                    AGGIUNGI UN FUMETTO
                </a>
                <a class="d-block text-center my-5" href="{{ route('home') }}">Torna alla home</a>
            </div>
        </section>
    </main>
@endsection
