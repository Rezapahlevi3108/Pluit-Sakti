<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/detail-film', [MainController::class, 'detail_film'])->name('detail_film');
Route::get('/sedang-tayang', [MainController::class, 'sedang_tayang'])->name('sedang_tayang');
Route::get('/terpopuler', [MainController::class, 'terpopuler'])->name('terpopuler');
Route::get('/mendatang', [MainController::class, 'mendatang'])->name('mendatang');
Route::get('/genre', [MainController::class, 'genre'])->name('genre');
