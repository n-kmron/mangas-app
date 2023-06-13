<?php

namespace App\Http\Controllers;

use App\Models\Mangas;
use Illuminate\Http\Request;
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
            Mangas::createSerie($_POST["title"], $_POST["author"], $_POST["nbvol"], $_POST["date"], $_POST["couverture"], $isFinish);
            //return redirect('newserie')->with('message', "La série n'a pas pu être enregistrée");
            return view('newserie');
        } catch (QueryException $e) {
            echo '<script type="text/javascript">
                                        alert("Please try again, there is a problem");
                                        </script>';
            return redirect('newserie')->with('message', "La série n'a pas pu être enregistrée");
        }
    }
}
