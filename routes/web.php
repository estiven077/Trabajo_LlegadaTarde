<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GoalController;


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
    return view('welcome');
});

Route::get('games/pruebas', [GameController::class, 'pruebas']);
Route::get('players/pruebas', [PlayerController::class, 'pruebas']);
Route::get('presidents/pruebas', [PresidentController::class, 'pruebas']);
Route::get('teams/pruebas', [TeamController::class, 'pruebas']);
Route::get('goals/pruebas', [GoalController::class, 'pruebas']);


// President
Route::get('president/create', [PresidentController::class, 'create'])->name('president.create');
Route::post('president/store', [PresidentController::class, 'store'])->name('president.store');

// Team
Route::get('team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('team/store', [TeamController::class, 'store'])->name('team.store');

// Player
Route::get('player/create', [PlayerController::class, 'create'])->name('player.create');
Route::post('player/store', [PlayerController::class, 'store'])->name('player.store');

// Game
Route::get('game/create', [GameController::class, 'create'])->name('game.create');
Route::post('game/store', [GameController::class, 'store'])->name('game.store');

// Goal
Route::get('goal/create', [GoalController::class, 'create'])->name('goal.create');
Route::post('goal/store', [GoalController::class, 'store'])->name('goal.store');



