@extends('canevas')
@section('title', 'Nouvelle série')
@section('content')
<h1>Création d'une nouvelle série</h1>
<form action="/serie/create" method="post">
          @csrf
          <label for="title"><b>Titre:</b></label>
          <input type="text" placeholder="Enter title" name="title" required>

          <label for="author"><b>Author:</b></label>
          <input type="text" placeholder="Enter author" name="author" required>

          <label for="description"><b>Description:</b></label>
          <textarea rows="4" cols="40" name="description">
          </textarea>

          <label for="nbvol"><b>Number of vol.:</b></label>
          <input type="number" placeholder="Enter number of vol." name="nbvol" required>

          <label for="date"><b>Date de création :</b></label>
          <input type="date" name="date" value="2023-06-13" max="2023-06-13">

          <label for="couverture"><b>Couverture:</b></label>
          <input type="text" placeholder="Enter couverture" name="couverture" required>

          <label for="done"><b>La série est finie : </b><input type="checkbox" name="done"></label>

          <button type="submit">Créer la série</button>
          @if (Session::has('message'))
          {{ session('message') }}
          @endif
</form>

@endsection