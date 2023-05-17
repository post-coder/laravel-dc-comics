@extends('layouts/main')

@section('content')
<div class="container">
  <h1>Aggiungi un fumetto</h1>

  <form action="{{route('comics.store')}}" method="POST" class="py-5">
    @csrf

    <div class="mb-3">
      <label for="title">Titolo</label>
      <input class="form-control" type="text" name="title" id="title">
    </div>

    <div class="mb-3">
      <label for="description">Descrizione</label>
      <textarea class="form-control" name="description" id="description"></textarea>
    </div>

    <div class="mb-3">
      <label for="thumb">Link immagine</label>
      <input class="form-control" type="text" name="thumb" id="thumb">
    </div>

    <div class="mb-3">
      <label for="price">Prezzo</label>
      <input class="form-control" type="number" name="price" id="price">
    </div>

    <div class="mb-3">
      <label for="series">Serie</label>
      <input class="form-control" type="text" name="series" id="series">
    </div>

    <div class="mb-3">
      <label for="sale_date">Data di lancio</label>
      <input class="form-control" type="date" name="sale_date" id="sale_date">
    </div>

    <div class="mb-3">
      <label for="type">Tipo</label>
      <input class="form-control" type="text" name="type" id="type">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>

  </form>

</div>

@endsection