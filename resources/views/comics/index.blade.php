@extends('layouts/main')

@section('content')

{{-- prendere tutti i fumetti e mostrarli in pagina --}}

<table class="table table-striped">
  <thead>
    <th>
      Titolo
    </th>
    <th>
      Prezzo
    </th>
    <th>
      Serie
    </th>
    <th>
      Data di lancio
    </th>
    <th>
      Tipo
    </th>
    <th>

    </th>
  </thead>

  <tbody>

    @foreach ($comics as $comic)
      <tr>
        <td>{{$comic->title}}</td>
        <td>{{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>
        <td>
          <a href="{{route('comics.show', $comic->id)}}">apri</a>
        </td>
      </tr>    
    @endforeach

  </tbody>
</table>

<hr class="mb-5">

<div class="container text-center py-5">
  <a href="{{route('comics.create')}}">Aggiungi un fumetto</a>
</div>


@endsection