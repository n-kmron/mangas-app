@extends('canevas')
@section('title', 'Accueil')
@section('content')
<h2>Les meilleures séries Manga</h2>
<div class="series">
    @foreach ($series as $serie)
    <div class="serie">
        <p class="charactersLink"><b>{{ $serie->titre }}</b><span>{{ $serie->id }}</span></p>
        <div class=" affichage-serie">
            <img src='/img/{{ $serie->couverture }}' alt="couverture" height="100px">
            <div>
                <div>
                    <p><b>Auteur :</b> <i>{{ $serie->auteur }}</i></p>
                    @if(!empty($serie->description))
                    <p><b>Description :</b> <i>{{ $serie->description }}</i></p>
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
        </div>
        <p class="charactersResult"></p>
    </div>
    @endforeach
</div>
@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("div.serie").each(function() {
            let serieId = $(this).find("p.charactersLink span").text()

            $(this).find("p.charactersLink").click(function() {
                let charactersResult = $(this).siblings("p.charactersResult");
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