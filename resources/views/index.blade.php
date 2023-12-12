@extends('layouts.app')

@section('title', "Movie's Page")

@section('content')
<section class="py-5">
<div class="container ">
    <h1 class="title py-5">Movies</h1>

    <div class="movies d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card col-2 p-3 m-3 gap-3">
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