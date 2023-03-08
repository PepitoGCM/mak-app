<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesorioController;
use App\Http\Controllers\BijouterieController;
use App\Http\Controllers\LenceriaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bijouterie', [BijouterieController::class, 'index'])->name('bijouterie.index');
Route::get('bijouterie/create', [BijouterieController::class, 'create'])->name('bijouterie.create');
Route::get('bijouterie/{id}', [BijouterieController::class, 'show'])->name('bijouterie.show');
