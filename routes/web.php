<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::post('/search', [PageController::class, 'search'])->name('search');

/*-- Book Routes ---*/ 

// Route::get('/libri', [BookController::class, 'index'])->name('books.index');
// Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
// Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
// Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');
// Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])->name('books.edit');
// Route::put('/libri/{book}', [BookController::class, 'update'])->name('books.update');
// Route::delete('/libri/{book}', [BookController::class, 'destroy'])->name('books.delete');

Route::resource('books', BookController::class); 


/*-- Categories Routes --- */

// Route::get('/categorie', [CategoryController::class, 'index'])->name('category.index');
// Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('category.create');
// Route::post('/categorie/salva', [CategoryController::class, 'store'])->name('category.store');
// Route::get('/categorie/{category}/dettagli', [CategoryController::class, 'show'])->name('category.show');
// Route::get('/categorie/{category}/modifica', [CategoryController::class, 'edit'])->name('category.edit');
// Route::put('/categorie/{category}', [CategoryController::class, 'update'])->name('category.update');
// Route::delete('/categorie/{category}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::resource('category', CategoryController::class); 

/*-- Authors Routes --*/

Route::resource('authors', AuthorController::class);







