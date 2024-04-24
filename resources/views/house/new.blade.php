@extends('base')
@section('content')
<div class="container mt-5">
  <h3>Ajouter votre nouvelle Home ici 👇🏻 !</h3>
    <form action="{{ route('house.store') }}" method="POST">
      @csrf
      <div class="row mt-5">
        <label for="ville" class="col-sm-2 col-form-label">Ville:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="ville" placeholder="Paris" name="ville">
        </div>
        @error('ville')
            {{$message}}
        @enderror
      </div>
      <div class="d-flex align-items-baseline">
        <label for="type" class="form-label mt-4 me-5">Type:</label>
        <select class="form-select w-25 ms-5" id="type" name="type">
          <option value="Maison">Maison</option>
          <option value="Appartement">Appartement</option>
        </select>
        @error('type')
        {{$message}}
    @enderror
      </div>
      <div class="row mt-5">
        <label for="prix" class="col-sm-2 col-form-label">Prix (en €):</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="prix" placeholder="1 000 000€" name="prix">
        </div>
        @error('prix')
        {{$message}}
    @enderror
      </div>
      <div class="row mt-5">
        <label for="description" class="col-sm-2 col-form-label">Description:</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        @error('description')
        {{$message}}
    @enderror
      </div>
      <button type="submit" class="btn btn-primary mt-5">Créez !</button>
  </form>
</div>
@endsection