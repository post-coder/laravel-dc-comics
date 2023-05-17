@extends('layouts/main')

@section('content')

<main id="comic-show">

  <div class="container">
    
    <div class="row mb-5">
      <div class="col-4 offset-4">
        <img id="comic-image" src="{{$comic->thumb}}" alt="immagine del fumetto selezionato">
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-3">Titolo</div>
      <div class="col-9">{{$comic->title}}</div>
    </div>
    <div class="row mb-4">
      <div class="col-3">Descrizione</div>
      <div class="col-9">{{$comic->description}}</div>
    </div>
    <div class="row mb-4">
      <div class="col-3">Prezzo</div>
      <div class="col-9">{{$comic->price}}</div>
    </div>
    <div class="row mb-4">
      <div class="col-3">Serie</div>
      <div class="col-9">{{$comic->series}}</div>
    </div>
    <div class="row mb-4">
      <div class="col-3">Data di lancio</div>
      <div class="col-9">{{$comic->sale_date}}</div>
    </div>
    <div class="row mb-4">
      <div class="col-3">Tipo</div>
      <div class="col-9">{{$comic->type}}</div>
    </div>

  </div>

</main>

@endsection