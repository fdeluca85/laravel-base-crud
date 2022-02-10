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

      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $comics)
        <tr>
            <th>{{$comics->id}}</th>
            <td>{{$comics->title}}</td>
            <td>{{$comics->series}}</td>
            <td>{{$comics->price}}</td>
            <td>{{$comics->type}}</td>
            <td><a href="{{route("comics.show", $comics->id)}}"><button type="button" class="btn btn-info">Vai</button></a></td>

        </tr>
      @endforeach
    </tbody>
  </table>
{{-- @dd($comics) --}}
    
@endsection