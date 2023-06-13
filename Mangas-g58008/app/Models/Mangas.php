<?php

namespace App\Models;

use PDO; // sans cela, PDO serait interprété comme \App\Models\PDO
use \Illuminate\Support\Facades\DB;


class Mangas
{
          public static function getSeries()
          {
                    $pdo = DB::getPdo();
                    $series = DB::select("SELECT * FROM series;");
                    return $series;
          }

          public static function createSerie($title, $author, $nbvol, $date, $couverture, $isFinish, $description)
          {
                    $pdo = DB::getPdo();
                    DB::insert(
                              "INSERT INTO series (titre, auteur, nombre_volumes, date_premiere_parution, couverture, serie_finie, description) VALUES (?, ?, ?, ?, ?, ?, ?)",
                              [$title, $author, $nbvol, $date, $couverture, $isFinish, $description]
                    );
          }


          public static function getCharacters($serie_id)
          {
                    $pdo = DB::getPdo();
                    $characters = DB::select("SELECT * FROM personnages WHERE serie_id = :serie_id;", ['serie_id' => $serie_id]);
                    return $characters;
          }
}
