<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles') }}">Articles</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      @if (Auth::user())
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn">Déconnexion</button>
          </form>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Inscription</a>
        </li>
      @endif
    </ul>
  </div>
</nav>