@extends('layouts.main');

@section('title', 'Comic Info')

@section('main-content')
    <main>
        {{-- <div class="d-flex border border-info rounded p-5">
            <img style="max-height: 500px" src="{{ $comic->thumb }}" alt="">
            <div class="ms-5">
                <h1>{{ $comic->title }}</h1>
                <p>{{ $comic->series }}</p>
                <h3>{{ $comic->price }}</h3>
                <p>Tipo: {{ $comic->type }}</p>
                <p>Data: {{ $comic->sale_date }}</p>
                <p>Artisti: {{ $comic->artists }}</p>
                <p class="mb-5">Scrittori: {{ $comic->writers }}</p>
                
            </div>
        </div> --}}

        <div class="blue-line"></div>
        <section id="action">
            <div class="options">
                <a class="left-link" href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
                <a class="right-link" href="{{ route('comics.edit', $comic) }}">Modifica il fumetto</a>
                <form id="delete-form" action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina il fumetto</button>
                </form>
            </div>
            <div class="container">
                <div class="split-section">
                    <div class="long-side">
                        <div class="thumb-cont">
                            <p class="info-ticket top-ticket">COMIC BOOK</p>
                            <img class="thumb-image" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <p class="info-ticket bot-ticket">VIEW GALLERY</p>
                        </div>
                        <h1>{{ strtoupper($comic->title) }}</h1>
                        <h4 class="price-tag">U.S. price: <strong>{{ $comic->price }}</strong></h4>
                        <p>
                            {{ $comic->description }}
                        </p>
                    </div>
                    <div class="short-side">
                        <h3 class="adv">Advertisment</h3>
                        <img src="{{ asset('images/actionComic.jpg') }}" alt="action comic">
                    </div>
                </div>
            </div>
        </section>
        <section id="comic-info">
            <div class="container">
                <div class="split-section">
                    <div class="long-side">
                        <h3>Talent</h3>
                        <hr>
                        <div class="split-section">
                            <div class="short-side">
                                <p>Art by:</p>
                            </div>
                            <div class="long-side">
                                @foreach (explode(' ', $comic->artists) as $artist)
                                    <a href="#">
                                        {{ $artist }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="split-section">
                            <div class="short-side">
                                <p>Written by:</p>
                            </div>
                            <div class="long-side">
                                @foreach (explode(' ', $comic->writers) as $writer)
                                    <a href="#">
                                        {{ $writer }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="short-side">
                        <h3>Specs</h3>
                        <hr>
                        <div class="split-section">
                            <div class="short-side">
                                <p>Series:</p>
                            </div>
                            <div class="long-side">
                                <a href="#">
                                    {{ strtoupper($comic->series) }}
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="split-section">
                            <div class="short-side">
                                <p>U.S. Price: </p>
                            </div>
                            <div class="long-side">
                                {{ $comic->price }}
                            </div>
                        </div>
                        <hr>
                        <div class="split-section">
                            <div class="short-side">
                                <p>On sale date:</p>
                            </div>
                            <div class="long-side">
                                {{ $comic->sale_date }}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const deleteForm = document.getElementById('delete-form');
        deleteForm.addEventListener('submit', e => {
            e.preventDefault();
            const hasConfirmed = confirm('Sei sicuro di voler eliminare questo fumetto?');
            if (hasConfirmed) deleteForm.submit()
        })
    </script>
@endsection
