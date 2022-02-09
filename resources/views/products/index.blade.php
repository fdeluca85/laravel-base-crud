@extends('layouts.base')

@section('pageContent')
<h1>Fumetti in vendita</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Serie</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Tipo</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comicsItems as $comicsItem)
        <tr>
            <th>{{$comicsItem->id}}</th>
            <td>{{$comicsItem->title}}</td>
            <td>{{$comicsItem->description}}</td>
            <td>{{$comicsItem->series}}</td>
            <td>{{$comicsItem->price}}</td>
            <td>{{$comicsItem->type}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
{{-- @dd($comics) --}}
    
@endsection