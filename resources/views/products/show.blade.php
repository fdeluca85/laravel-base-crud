@extends('layouts.base')

@section('pageContent')
<div class="container">
    <h1>{{$comicPage->title}}</h1>
    <img src="{{$comicPage->thumb}}" alt="$comicPage->title">
    <p>{{$comicPage->description}}</p>
</div>

@endsection