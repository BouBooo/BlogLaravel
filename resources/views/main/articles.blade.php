@extends('master.base')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3 text-center">Articles</h1> 
            <div class="articles row justify-content-between">
            @foreach ($articles as $article)
                <div class="col-md-6">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5> 
                            <span class="badge badge-info">{{ $article->category->name }}</span>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <a href="{{ route('article', $article->slug) }}" class="btn btn-primary">
                                <i class="fas fa-arrow-right"></i>
                                Lire la suite
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $articles->links('vendor.pagination.custom') }}
        </div>
    </div>
@endsection