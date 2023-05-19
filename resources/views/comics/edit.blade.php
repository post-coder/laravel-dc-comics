@extends('layouts/main')

@section('content')
<div class="container py-3">
  <h1>Modifica il fumetto {{$comic->title}}</h1>

  <form action="{{route('comics.update', $comic)}}" method="POST" class="py-5">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title">Titolo</label>
      <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title') ?? $comic->title}}">
      @error('title')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description">Descrizione</label>
      <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{old('description') ?? $comic->description}}</textarea>
      @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="thumb">Link immagine</label>
      <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb"  value="{{old('thumb') ?? $comic->thumb}}">
      @error('thumb')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="price">Prezzo</label>
      <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price"  value="{{old('price') ?? $comic->price}}">
      @error('price')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="series">Serie</label>
      <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series"  value="{{old('series') ?? $comic->series}}">
      @error('series')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="sale_date">Data di lancio</label>
      <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" id="sale_date"  value="{{old('sale_date') ?? $comic->sale_date}}">
      @error('sale_date')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="type">Tipo</label>
      <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type"  value="{{old('type') ?? $comic->type}}">
      @error('type')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifica</button>

  </form>

</div>

@endsection