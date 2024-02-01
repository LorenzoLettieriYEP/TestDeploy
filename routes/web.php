<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

//? ROTTE CRUD GIOCHI
Route::get('/games/create', [GameController::class, 'create'])->name('game_create');
Route::post('/games/store', [GameController::class, 'store'])->name('game_store');
Route::get('/games/index', [GameController::class, 'index'])->name('game_index');
Route::get('/games/show/{game}', [GameController::class, 'show'])->name('game_show');
Route::get('/games/edit/{game}', [GameController::class, 'edit'])->name('game_edit');
Route::put('/games/update/{game}', [GameController::class, 'update'])->name('game_update');
Route::delete('/games/delete/{game}',[GameController::class, 'destroy'])->name('game_delete');