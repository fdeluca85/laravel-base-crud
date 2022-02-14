@extends('layouts.base')

@section('pageContent')
<h1>Crea un nuovo prodotto</h1>
<a href="{{route("comics.index")}}"><button type="button" class="btn btn-info">Torna indietro</button></a>

<form  action="{{route("comics.store")}}" method="POST" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
      <small id="title" class="form-text text-muted">Inserisci il titolo</small>
    </div>

    <div class="form-group">
    <label for="series">Serie</label>
      <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
    </div>

    <div class="form-group">
        <label for="sale_date">Data di vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>   

    <div class="form-group">
        <label for="type">Tipologia</label>
        <select class="form-control" id="type" name="type">
            <option value="comic book">Comic book</option>
            <option value="graphic novel">Graphic novel</option>
        </select>
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci url immagine">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Inserisci una descrizione"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Crea</button>
  </form>

  @if ($errors->any())
    <div class="alert alert-danger mt-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
@endsection