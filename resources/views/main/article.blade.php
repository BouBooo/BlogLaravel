@extends('master.base')

@section('content')
    <div class="jumbotron">
        <h2 class="display-3 text-center">{{ $article->title }}</h2>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary" href="{{ route('articles') }}">
                <i class="fas fa-arrow-left"></i>
                Retour aux articles
            </a>
        </div>
        <h5 class="text-center my-3 pt-3">{{ $article->subtitle }}</h5>
    </div>
    <div class="container">
        <p class="text-center">
            {!! $article->content !!}
        </p>
    </div>
@endsection