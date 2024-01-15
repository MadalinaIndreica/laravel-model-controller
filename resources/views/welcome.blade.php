@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <div class="container">
        <div class="row row-cols-6 d-flex flex-wrap">
            <div class="col h-100">
                @foreach ($movie as $movie)
                    <div class="card" style="width: 18rem;">
                      <img src="{{ $movie->image }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>{{ $movie->title }}</h3>
                            <p class="card-text">{{ $movie->id }}</p>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
