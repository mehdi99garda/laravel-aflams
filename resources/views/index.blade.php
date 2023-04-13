@extends('layouts.main')

@section('content')
    <div class="first-section">
        <p class="h3 text-warning">Popular Movies</p>
        <div class="mt-3 row row-cols-3 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($movies as $movie)
                <div class="col mt-2">
                    <div class="card bg-dark">
                        <a href="{{ Route('movie.show', ['movie' => '' . $movie['id']]) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" class="card-img-top"
                                alt="...">
                        </a>
                        <div class="card-body">
                            <p class="card-title text-center">{{ $movie['title'] }}</p>
                            <div class="row">
                                <div class="p-2 col-6">{{ $movie['vote_average'] }} <x-fas-star class="gold w-15"/></div>
                                <div class="p-2 col-6">{{ $movie['release_date'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
