@extends('layouts.base')

@section('pageContent')
<ul>
    @foreach ($comicsItems as $comicsItem)
    <li>{{$comicsItem->title}}</li> 
    @endforeach
    
</ul>
{{-- @dd($comics) --}}
    
@endsection