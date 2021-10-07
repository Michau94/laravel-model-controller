@extends('layouts.main')

@section('content')
    <section class="container text-center">
        <div class="row justify-content-center">

            @include('partials.movie.card', ['movie' => $movie])

        </div>


    </section>
@endsection
