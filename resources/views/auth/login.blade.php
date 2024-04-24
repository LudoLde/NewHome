@extends('base')
@section('content')
<div class="container mt-5">
<form action="{{ route('auth.login') }}" method="POST">
    @csrf
    <div class="row mt-5">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
          <input type="email"  class="form-control-plaintext" id="email" name="email" placeholder="email@example.com">
        </div>
      </div>
      <div class="row mt-4">
        <label for="password" class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-10">
          <input type="password"  class="form-control-plaintext" id="password" name="password" placeholder="******">
        </div>
      </div>
    <button type="submit" class="btn btn-primary mt-5">Connection</button>
</form> 
</div>       
@endsection