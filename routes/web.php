<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\PublicController;


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
    return view('index');
})->name('home');

//rotta per i film
Route::get('/movies', [MovieController::class, 'index'])->name('index.movies');

//rotta pagina dettoglio film
Route::get('/movie/detail/{name}', [MovieController::class, 'show'])->name('show.movies');

//rotta serie tv
Route::get('/series', [SerieController::class, 'index'])->name('index.series');

//rotta della pagina del dettaglio delle Serie TV
Route::get('/serie/detail/{name}',[SerieController::class, 'show'])->name('show.series');


//rotta per visualizzare un form per conttatare
Route::get('/contact-us',[PublicController::class,'form'])->name('form');
Route::post('/contact-email',[PublicController::class,'sendEmail'])->name('send.email');

