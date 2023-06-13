@extends('canevas')
@section('title', 'Accueil')
@section('content')
<h2>Les meilleures séries Manga</h2>
<div class="series">
    @foreach ($series as $serie)
    <div class="serie">
        <a href="/api/serie/{{ $serie->id }}/characters" alt="Cliquez pour voir les personnages"><b>{{ $serie->titre }}</b></a>
        <div class=" affichage-serie">
            <img src='/img/{{ $serie->couverture }}' alt="couverture" height="100px">
            <div>
                <div>
                    <p>Auteur : {{ $serie->auteur }}</p>
                    <p>Nombre de volumes : {{ $serie->nombre_volumes }}</p>
                    <p>Date de création : {{ $serie->date_premiere_parution }}</p>
                    @if($serie->serie_finie == 0)
                    <p>Serie finie : non</p>
                    @else
                    <p>Serie finie : oui</p>
                    @endif
                </div>
            </div>
        </div>
        @php
        $urlId = request()->segment(3);
        @endphp

        @if ($serie->id == $urlId)
        @isset($characters)
        <h5>Les personnages:</h5>
        @forelse ($characters as $character)
        <p>{{ $character->nom }} (type: {{ $character->type }}) : {{ $character->description }}</p>
        @empty
        <p>No characters found.</p>
        @endforelse
        @endisset @endif

    </div>
    @endforeach
</div>
@endsection