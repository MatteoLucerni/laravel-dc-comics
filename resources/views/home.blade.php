@extends('layouts.main');

@section('title', 'Home')

@section('main-content')
    <div class="d-flex justify-content-center ">
        <a class="d-inline-block m-5 bg-info px-5 py-3 rounded text-dark" href="{{ route('comics.index') }}">Accedi</a>
    </div>
@endsection
