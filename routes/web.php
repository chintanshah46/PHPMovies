<?php

use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StarWarsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ActorController::class, 'index']);
Route::get('/actors/{actor}', [ActorController::class, 'show']);

Route::get('/movies/', [MovieController::class, 'index']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);


Route::get('/starwars/', [StarWarsController::class, 'index']);