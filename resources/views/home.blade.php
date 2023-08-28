@extends('layouts.main');

@section('title', 'Home')

@section('main-content')
    <div class="welcome-container">
        <a class="welcome-button" href="{{ route('comics.index') }}">SCOPRI TUTTI I NOSTRI FUMETTI</a>
    </div>
@endsection
