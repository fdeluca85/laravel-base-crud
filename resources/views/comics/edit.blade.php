@extends('layouts.base')

@section('pageContent')
<h1>Modifica il prodotto: {{$comic->title}}</h1>
<a href="{{route("comics.index")}}"><button type="button" class="btn btn-info">Torna indietro</button></a>

<form  action="{{route("comics.update", $comic->id)}}" method="POST" class="mt-5">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="title">Titolo</label>
      <small id="title" class="form-text text-muted">Inserisci il titolo</small>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" value="{{old("title") ? old("title") : $comic->title}}">

      @error('title')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
    <label for="series">Serie</label>
      <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie" value="{{old("series") ? old("series") : $comic->series}}">
      @error('series')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sale_date">Data di vendita</label>
        <input input type="datetime" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old("sale_date") ? old("sale_date") : $comic->sale_date}}">
        @error('sale_date')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>   

    <div class="form-group">
        <label for="type">Tipologia</label>
        <select class="form-control @error('type') is-invalid @enderror" id="type" name="type"">
            <option value="" disabled selected>Definisci la tipologia</option>
           @if (old("type"))
                <option value="comic book" {{old("type") == "comic book" ? "selected" : ""}}>Comic book</option>
                <option value="graphic novel" {{old("type") == "graphic novel" ? "selected" : ""}}>Graphic novel</option>
            @else
                <option value="comic book" {{$comic->type == "comic book" ? "selected" : ""}}>Comic book</option>
                <option value="graphic novel" {{$comic->type == "graphic novel" ? "selected" : ""}}>Graphic novel</option>
            @endif
        </select>
        @error('type')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci url immagine" value="{{old("thumb") ? old("thumb") : $comic->thumb}}">
        @error('thumb')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old("price") ? old("price") : $comic->price}}">
        @error('price')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Inserisci una descrizione"> {{old("description") ? old("description") : $comic->description}}"</textarea>
        @error('description')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary">Modifica</button>
  </form>
  
@endsection