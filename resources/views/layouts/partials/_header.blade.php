<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">Breeze Bootstrap</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" type="button"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}" aria-current="page">Accueil</a>
        </li>
      </ul>
      @guest
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-3">
            <a class="nav-link active" href="{{ route('login') }}">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('register') }}">S'enregister</a>
          </li>
        </ul>
      @endguest
    </div>
  </div>
</nav>
