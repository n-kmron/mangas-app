<?php

namespace App\Http\Controllers;

use App\Models\Mangas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;

class MangasCtrl extends Controller
{

    public function loadAccueil()
    {
        $series = Mangas::getSeries();
        return view('welcome', ['series' => $series]);
    }

    public function createSerie()
    {
        try {
            $isFinish = true;
            if (empty($_POST["done"])) {
                $isFinish = false;
            }
            Mangas::createSerie($_POST["title"], $_POST["author"], $_POST["nbvol"], $_POST["date"], $_POST["couverture"], $isFinish, $_POST['description']);
            return redirect('/serie/create')->with('message', "La série a bien été enregistrée");
        } catch (QueryException $e) {
            echo '<script type="text/javascript">
                                        alert("Please try again, there is a problem");
                                        </script>';
            return redirect('/serie/create')->with('message', "La série n'a pas pu être enregistrée");
        }
    }



    public function getCharacters($serie_id)
    {
        $result = Mangas::getCharacters($serie_id);
        return json_encode($result);
    }

    public function displayCharacters($serie_id)
    {
        $json_characters = MangasCtrl::getCharacters($serie_id);
        $characters = json_decode($json_characters);
        $series = Mangas::getSeries();
        return view('welcome', ['characters' => $characters, 'series' => $series]);
    }
}
