@extends('layouts.app')

@section('content')
<section class="py-5">
<div class="container">
    <h1>HOMEPAGE</h1>

    <div class="movies d-flex">
        @foreach ($movies as $movie)
            <div class="card col-6 align-items-start">
                <div class="movie">Titolo: {{ $movie->title }}</div>
                <div class="movie">Titolo Originale: {{ $movie->original_title }}</div>
                <div class="movie">Nazione: {{ $movie->nationality }}</div>
                <div class="movie">Data: {{ $movie->date }}</div>
                <div class="movie">Vote: {{ $movie->vote }}</div>

            </div>
        @endforeach
    </div>
</div>
</section>
@endsection