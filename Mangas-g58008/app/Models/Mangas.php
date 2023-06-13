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

          public static function createSerie($title, $author, $nbvol, $date, $couverture, $isFinish)
          {
                    $pdo = DB::getPdo();
                    DB::insert(
                              "INSERT INTO series (titre, auteur, nombre_volumes, date_premiere_parution, couverture, serie_finie) VALUES (?, ?, ?, ?, ?, ?)",
                              [$title, $author, $nbvol, $date, $couverture, $isFinish]
                    );
          }
}
