@extends('master.base')

@section('content')
    <div class="jumbotron">
        <h1 class="display-5 text-center">Articles</h1> 
        @livewire('filters', ['articles' => $articles, 'categories' => $categories])
    </div>
@endsection