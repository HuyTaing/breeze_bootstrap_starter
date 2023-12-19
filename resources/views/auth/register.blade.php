@extends('layouts.main')

@section('content')
  <div class="d-flex bg-light p-5">
    <div class="col-md-4 m-auto">
      <div class="bg-white shadow-sm">
        <h1 class="border-bottom p-4">S'enregistrer</h1>

        <div class="px-4 pt-4">

          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="name">Nom</label>
              <input class="form-control @error('name') is-invalid @enderror" name="name"
                type="text" value="{{ old('name') }}" />
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="email">Email</label>
              <input class="form-control @error('email') is-invalid @enderror" name="email"
                type="email" value="{{ old('email') }}" />
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="password">Mot de passe</label>
              <input class="form-control @error('password') is-invalid @enderror" name="password"
                type="password" />
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="password">Confirmer mot de passe</label>
              <input class="form-control" name="password_confirmation" type="password" />
            </div>
            <div class="mt-4 d-grid">
              <button class="btn btn-block btn-primary" type="submit">S'enregister</button>
              <div class="text-center py-4 text-muted">
                Vous avez déjà un compte ?
                <a class="text-muted font-weight-bold text-decoration-none"
                  href="{{ route('login') }}">Connexion</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
