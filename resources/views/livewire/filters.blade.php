<div>
    <div class="row">
        <div class="col-10">
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
        </div>
        <div class="col-2 pt-3">
            @foreach ($categories as $category)
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" wire:model="activeFilters.{{ $category->id }}" class="custom-control-input" id="{{ $category->id }}">
                    <label class="custom-control-label" for="{{ $category->id }}"><i class="fas fa-{{ $category->icon }}"></i> {{ $category->name }}</label>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
