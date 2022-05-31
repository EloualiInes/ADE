<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class,"index"]);
Route::post('/', [MainController::class,"index"]);
Route::get("/etablissement", [MainController::class,'etablissement']);
// Faire sûrement un controlleur emploiDuTemps(resource ? + bloqué certaines routes du coup)
Route::post("/liste",[MainController::class,'liste']);
Route::get("/liste",[MainController::class,'liste']);
// Route::post('/liste', function() {
//    return view('listeEmploiDuTemps',compact('listeFiliere'));
// })->name('listeEmploiDuTemps');

Route::post("/traitement", [MainController::class,'chxPages']);