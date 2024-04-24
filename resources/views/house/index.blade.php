@extends('base')
@section('content')
<div class="container mt-5 w-50">
  @foreach ($houses as $house)
<div class="card mb-4 mt-5">
    <h3 class="card-header">Home N°{{ $house->id }}</h3>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
      <rect width="100%" height="100%" fill="#868e96"></rect>
      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>
    <div class="card-body">
      <p class="card-text">{{ $house->description }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $house->ville }}</li>
      <li class="list-group-item">{{ $house->prix }} €</li>
      <li class="list-group-item">{{ $house->type }}</li>
    </ul>
    <div class="card-body">
      <a href="{{ route('house.edit', $house->id) }}" class="btn btn-primary me-3">Éditer</a>
      <a href="{{ route('house.delete', $house->id) }}" class="btn btn-warning">Supprimer</a>
    </div>
    <div class="card-footer text-muted">
        {{ $house->created_at }}
    </div>
  </div> 
@endforeach
</div>
@endsection