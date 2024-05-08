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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('db.comics_list');
/*dd(compact("comics"));
[
    "comics"=>$comics
]*/

    return view('comics.index', compact("comics"));

})->name('comics.index');


Route::get('/comics/{id}', function ($id) {

    abort_unless($id >= 0 && $id < count(config('db.comics_list')), 404);
    $comic = config('db.comics_list')[$id];

    return view('comics.show', compact('comic'));

})->name('comics.show');




Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');