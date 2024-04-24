@extends('base')
@section('content')
<div class="container mt-4 d-flex justify-content-center flex-column ">
    <h3 class="mt-5 text-center">Créer votre compte 👇🏻 !</h3>
    <form action="{{ route('user.store') }}" method="POST" class="d-flex justify-content-center flex-column">
      @csrf
      <div class="row mt-5">
        <label for="name" class="col-sm-2 col-form-label">Nom/Prénom:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="name" placeholder="Michel Bouchard" name="name">
        </div>
        @error('name')
            {{$message}}
        @enderror
      </div>
      <div class="row mt-5">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control-plaintext" id="email" placeholder="example@test.fr" name="email">
        </div>
        @error('email')
            {{$message}}
        @enderror
      </div>
      <div class="row mt-5">
        <label for="password" class="col-sm-2 col-form-label">Mot de passe:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control-plaintext" id="password" placeholder="********" name="password">
        </div>
        @error('password')
            {{$message}}
        @enderror
      </div>
      <div class="row mt-5">
        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmation du mot de passe:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control-plaintext" id="password_confirmation" placeholder="********" name="password_confirmation">
        </div>
        @error('password_confirmation')
            {{$message}}
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mt-5">Envoyer !</button>
    </div>
  </form>
</div>
@endsection