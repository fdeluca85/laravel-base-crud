@extends('layouts.base')

@section('pageContent')
<div class="container">
    <h1>{{$comics->title}}</h1>
    <img src="{{$comics->thumb}}" alt="$comicPage->title">
    <p>{!!$comics->description!!}</p>
    <div>
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-info">Torna indietro</button></a>
    </div>
</div>

@endsection