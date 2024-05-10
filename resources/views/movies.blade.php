@extends('layout.main')

@section('content')
    <h1>Movies</h1>
    <div class="container">
        <div class="row">

            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    {{-- <img class="card-img-top" src="{{ $movie->cover }}" alt="{{ $movie->title }}"> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->nationality }}</p>
                        <p>{{ $movie->original_title }}</p>
                        <p>{{ $movie->date }}</p>
                        <p>{{ $movie->vote }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .card {
        margin: 10px;
    }

    .card-title {
        font-size: 20px;
    }

    .card-text {
        font-size: 16px;
    }

    .card p {
        font-size: 14px;
    }
</style>
