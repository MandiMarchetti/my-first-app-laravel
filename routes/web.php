<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/libri', [BookController::class, 'index'])->name('books.index');
Route::get('/libri/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/libri/edit', [BookController::class, 'edit'])->name('books.edit');
Route::get('/libri/add', [BookController::class, 'create'])->name('books.create');

// miosito.com/libri - Pagina lista delle risrose
// miosito.com/libri/{id} - Pagina di dettaglio
// miosito.com/libri/edit - Pagina con il form per la modifica
// miosito.com/libri/add - Pagina con il form per l'aggiunta


Route::get('/login', function () {
    return view('login');
});
