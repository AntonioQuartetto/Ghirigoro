<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

/*-- Homepage -- */
Route::get('/', [BookController::class, 'homepage'])->name('homepage');

/*-- Book Routes ---*/ 

Route::get('/libri', [BookController::class, 'index'])->name('books.index');
Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');


/*-- Categories Routes --- */

Route::get('/categorie', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categorie/salva', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categorie/{cat}/dettagli', [CategoryController::class, 'show'])->name('category.show');





