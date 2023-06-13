@extends('canevas')
@section('title', 'Accueil')
@section('content')
<h2>Les meilleures séries Manga</h2>
<div class="series">
    @foreach ($series as $serie)
    <div class="serie">
        <p>{{ $serie->titre }}</p>
        <div class="affichage-serie">
            <img src='img/{{ $serie->couverture }}' alt="couverture" height="100px">
            <div>
                <p>Auteur : {{ $serie->auteur }}</p>
                <p>Nombre de volumes : {{ $serie->nombre_volumes }}</p>
                <p>Date de création : {{ $serie->date_premiere_parution }}</p>
                <p>Serie finie : {{ $serie->date_premiere_parution }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection