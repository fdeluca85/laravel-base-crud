@extends('layouts.base')

@section('pageContent')
<h1>Modifica il prodotto: {{$comic->title}}</h1>
<a href="{{route("comics.index")}}"><button type="button" class="btn btn-info">Torna indietro</button></a>

<form  action="{{route("comics.update", $comic->id)}}" method="POST" class="mt-5">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
      <small id="title" class="form-text text-muted">Inserisci il titolo</small>
    </div>

    <div class="form-group">
    <label for="series">Serie</label>
      <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
    </div>

    <div class="form-group">
        <label for="sale_date">Data di vendita</label>
        <input input type="datetime" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
    </div>   

    <div class="form-group">
        <label for="type">Tipologia</label>
        <select class="form-control" id="type" name="type"">
            <option value="comic book" {{$comic->type == "comic book" ? "selected" : ""}}>Comic book</option>
            <option value="graphic novel" {{$comic->type == "graphic novel" ? "selected" : ""}}>Graphic novel</option>
        </select>
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci url immagine" value="{{$comic->thumb}}">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}}">
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Inserisci una descrizione"> {{$comic->description}}"</textarea>
    </div>


    <button type="submit" class="btn btn-primary">Modifica</button>
  </form>
  
@endsection