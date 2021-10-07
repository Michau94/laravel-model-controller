@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="row">

            @forelse ($movies as $movie)

                @include('partials.movie.card', ['movies' => $movies])

            @empty
                <h1>Nessun risultato trovato</h1>
            @endforelse

        </div>
    </section>

@endsection
