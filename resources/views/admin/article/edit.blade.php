@extends('master.base')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">Modification</h1>
        <form method="POST" action="{{ route('admin.article.update', $article->id) }}">
            @method('PUT')
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input name="title" value="{{ $article->title }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de votre article">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sous-titre</label>
                    <input name="subtitle" value="{{ $article->subtitle }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sous-titre de votre article">
                    <small id="emailHelp" class="form-text text-muted">Décrivez le contenu de votre article, le thème traité</small>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleSelect1">Catégorie</label>
                    <select name="category_id" class="form-control" id="exampleSelect1">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{$category->id === $article->category->id ? 'selected' : '' }}>{{ $category->name }}</option>    
                        @endforeach
                    </select>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Contenu</label>
                    <textarea name="content" class="form-control w-100 @error('description') is-invalid @enderror" name="description" id="description-editor" cols="30" rows="9"
                    placeholder="Write description">
                        {{ $article->content }}
                    </textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <script>
                    tinymce.init({
                        selector: '#description-editor'
                    });
                </script>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection