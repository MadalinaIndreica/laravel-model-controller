@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-title">Movies</h1>
        <h2 class="text-white">Top 10 dei film in Italia oggi:</h2>
        <div class="wrapper">
            <div class="row row-cols-auto">
                <div class="col d-flex flex-wrap gap-3">
                    @foreach ($movie as $movie)
                        <div class="card" style="width: 14rem;">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>{{ $movie->title }}</h3>
                                <p class="card-text"> <strong>Titolo originale:</strong>  {{ $movie->original_title }}</p>
                                <p class="card-text"> <strong>Data di uscita:</strong>  {{ $movie->date }}</p>
                                <p class="card-text"> <strong>Voto:</strong>  {{ $movie->vote }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
       </div>
    </div>
@endsection
