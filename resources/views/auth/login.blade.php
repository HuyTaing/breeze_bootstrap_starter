@extends('layouts.main')

@section('content')
  <div class="d-flex bg-light p-4">
    <div class="col-md-4 m-auto">
      <div class="bg-white shadow-sm">
        <h1 class="border-bottom p-4">Se connecter</h1>

        <div class="px-4 pt-4">

          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="email">Email</label>
              <input class="form-control @error('email') is-invalid @enderror" name="email"
                type="email" value="{{ old('email') }}" />
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="password">Password</label>
              <input class="form-control @error('password') is-invalid @enderror" name="password"
                type="password" />
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mt-4 d-grid">
              <button class="btn btn-block btn-primary" type="submit">Connexion</button>
              <div class="text-center py-4 text-muted">
                Pas encore de compte ?
                <a class="text-muted font-weight-bold text-decoration-none"
                  href="{{ route('register') }}">Créer un compte</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
