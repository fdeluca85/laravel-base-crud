@extends('layouts.base')

@section('pageContent')
<div class="container">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p>Data di uscita: {{$comic->sale_date}} - Prezzo: {{$comic->price}} €</p>
    <p>{!!$comic->description!!}</p>
    
    <div>
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-info">Torna indietro</button></a>
        
    </div>
</div>

@endsection