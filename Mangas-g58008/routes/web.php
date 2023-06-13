<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    [
        \App\Http\Controllers\MangasCtrl::class, 'loadAccueil'
    ]
);


Route::get('/serie/create', function () {
    return view('newserie');
})->name('newserie');

Route::post(
    '/serie/create',
    [
        \App\Http\Controllers\MangasCtrl::class, 'createSerie'
    ]
);
