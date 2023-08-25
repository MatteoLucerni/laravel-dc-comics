@extends('layouts.main');

@section('title', 'Comic Info')

@section('main-content')
    <main>
        <h1>{{ $comic['title'] }}</h1>
    </main>
@endsection
