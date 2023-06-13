<?php

namespace App\Http\Controllers;

use App\Models\Mangas;
use Illuminate\Http\Request;

class MangasCtrl extends Controller
{

    public function loadAccueil()
    {
        $series = Mangas::getSeries();
        return view('welcome', ['series' => $series]);
    }
}
