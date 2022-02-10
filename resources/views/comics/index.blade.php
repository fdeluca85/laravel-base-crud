@extends('layouts.base')

@section('pageContent')
<div class="container">
  <h1>Fumetti in vendita</h1>
  <a href="{{route("comics.create")}}"><button type="submit" class="btn btn-primary">Crea</button></a>
</div>


<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Visita</th>
        <th scope="col">Modifica</th>
        <th scope="col">Cancella</th>


      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $comic)
        <tr>
            <th>{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
            <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-info">Vai</button></a></td>
            <td><a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-primary">Modifica</button></a></td>
            <td><form action="{{route("comics.destroy", $comic->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form></td>


        </tr>
      @endforeach
    </tbody>
  </table>
{{-- @dd($comics) --}}
    
@endsection