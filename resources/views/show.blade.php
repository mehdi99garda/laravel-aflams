@extends('layouts.main')

@section('content')
    <div class="details">
        <div class="m-2 row">
            <div class="col-12 col-md-5">
                <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" alt="" class="w-75 rounded">
            </div>
            <div class="col-12 m-2 col-md-6">
                <p class="h2">{{ $movie['title'] }}</p>
                <div class="mx-2">
                    <span class="me-3">{{ $movie['vote_average'] }}
                        <x-fas-star class="gold w-15" />
                    </span>
                    <span class="me-3">{{ $movie['vote_count'] }}
                        <x-fas-user class="w-15" />
                    </span>
                    <span>{{ $movie['release_date'] }}
                        <x-fas-calendar class="w-15" />
                    </span>
                </div>
                <div class="m-2">
                    @foreach ($movie['genres'] as $genre)
                        <span class="me-3">
                            {{ $genre['name'] }}
                        </span>
                    @endforeach
                </div>
                <div class="mt-5">
                    <p>{{ $movie['overview'] }}</p>
                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-5">
                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" target="newTab"
                            class="btn btn-warning btn-lg">Play Trailer
                            <x-fas-play-circle class="w-15" />
                        </a>
                    </div>
                @endif

                <div class="mt-5">
                    <p class="h4">Production Companies</p>
                    <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-3">
                        @foreach ($movie['production_companies'] as $company)
                            <div class="col p-2">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500' . $company['logo_path'] }}" alt=""
                                    class="w-75">
                                <span class="text-secondary text-small">{{ $company['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-5">
        <div class="mt-3">
            <p class="h3">Cast ({{ count($casts) }} people) </p>
            <div class="mt-3 row row-cols-3 row-cols-lg-5 g-2 g-lg-3">
                @foreach ($casts as $cast)
                    <div class="col">
                        @if ($cast['profile_path'])
                            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $cast['profile_path'] }}" alt=""
                                class="h-75 w-100 rounded">
                        @else
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                alt="" class="h-75 w-100 rounded">
                        @endif

                        <p class="text-center h5 mt-3">{{ $cast['name'] }}</p>
                        <p class="text-center text-secondary">{{ $cast['character'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
