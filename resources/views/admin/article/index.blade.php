@extends('master.base')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Articles</h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-info my-5" href="{{ route('admin.article.create') }}"><i class="fas fa-plus"></i> Ajouter un nouvel article</a>
        </div>
        <table class="table table-hover">
            <thead>
              <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Créé le</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th>{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->formattedCreatedAt() }}</td>
                        <td class="d-flex">
                          <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-warning mx-3"><i class="fas fa-edit"></i> Editer</a>
                          <button class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'"><i class="fas fa-trash"></i> Supprimer</button>
                          <form action="{{ route('admin.article.delete', $article->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div id="modal-open-{{ $article->id }}" class="modal">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">La suppression d'un élément est définitive</h5>
                                    <button onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Etes-vous sûr de vouloir supprimer cet élément ?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Oui</button>
                                    <button onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'" type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                  </div>
                                </div>
                              </div>
                          </div>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{ $articles->links('vendor.pagination.custom') }}
        </div>
    </div>
@endsection