@extends('layouts/main')

@section('content')
<div class="container py-3">
  <h1>Modifica il fumetto {{$comic->title}}</h1>

  <form action="{{route('comics.update', $comic)}}" method="POST" class="py-5">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title">Titolo</label>
      <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
    </div>

    <div class="mb-3">
      <label for="description">Descrizione</label>
      <textarea class="form-control" name="description" id="description">{{$comic->description}}</textarea>
    </div>

    <div class="mb-3">
      <label for="thumb">Link immagine</label>
      <input class="form-control" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
    </div>

    <div class="mb-3">
      <label for="price">Prezzo</label>
      <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
    </div>

    <div class="mb-3">
      <label for="series">Serie</label>
      <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
    </div>

    <div class="mb-3">
      <label for="sale_date">Data di lancio</label>
      <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div class="mb-3">
      <label for="type">Tipo</label>
      <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
    </div>

    <button type="submit" class="btn btn-primary">Modifica</button>

  </form>

</div>

@endsection