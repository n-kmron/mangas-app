@extends('canevas')
@section('title', 'Accueil')
@section('content')

<div class="container swiper">
    <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
            @foreach ($series as $serie)
            <div class="card swiper-slide">
                <div class="image-box">
                    <img src='/img/{{ $serie->couverture }}' alt="couverture">
                </div>
                <div class="profile-details">
                    <div class="details">
                        <h3 class="charactersLink name"><b>{{ $serie->titre }}</b></h3>
                        <hr>
                        <h4 class="author"><b>Auteur :</b> <i>{{ $serie->auteur }}</i></h4>
                        @if(!empty($serie->description))
                        <h4 class="description"><b>Description :</b> <i>{{ $serie->description }}</i></h4>
                        @endif
                        <p><b>Nombre de volumes :</b> <i>{{ $serie->nombre_volumes }}</i></p>
                        <p><b>Date de création :</b> <i>{{ $serie->date_premiere_parution }}</i></p>
                        @if($serie->serie_finie == 0)
                        <p><b>Serie finie :</b> <i>non</i></p>
                        @else
                        <p><b>Serie finie :</b> <i>oui</i></p>
                        @endif
                    </div>
                </div>
                <button class="characterBtn" data-id="{{ $serie->id }}">Voir les personnages</button>
                <div class="charactersResult" data-id="{{ $serie->id }}"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".container").each(function() {
            let serieId = $(`.charactersResult`).data("id");

            $(this).find(".characterBtn").click(function() {
                console.log("ok: " + serieId);
                let charactersResult = $(`.charactersResult[data-id="${serieId}"] `);
                charactersResult.empty();
                let url = "/api/serie/" + serieId + "/characters";

                $.getJSON(url, function(characters) {
                    if (characters.length === 0) {
                        let p = $("<p></p>").text("Il n'y a aucun personnage ici !");
                        charactersResult.append(p);
                    } else {
                        let title = $("<h4> Les personnages: </h4>");
                        charactersResult.append(title);
                        characters.forEach(function(character) {
                            let p = $("<p></p>");
                            let text = character.nom + " (type: " + character.type + ") - " + character.description;
                            p.text(text);
                            charactersResult.append(p);
                        });
                    }
                });
            });
        });
    });
</script>