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

          public static function getMessages($channel)
          {
                    $pdo = DB::getPdo();
                    $messages = DB::select("SELECT content, u.displayName, c.name, added_on, c.id FROM messages m JOIN channels c ON m.chan_id = c.id JOIN users u ON m.author_id = u.id WHERE chan_id=$channel ORDER BY added_on ASC;");
                    return $messages;
          }

          public static function putMessage($channel, $author, $message)
          {
                    $pdo = DB::getPdo();
                    DB::insert(
                              "INSERT INTO messages (content, author_id, chan_id) VALUES (?, ?,?)",
                              [$message, $author, $channel]
                    );
          }
}
