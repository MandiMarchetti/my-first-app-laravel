<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Metodo para a pagina lista delle risrose
    public function index()
    {
        // Aqui você buscaria os livros do banco de dados e passaria para a view
        // Exemplo: $books = Book::all();
        return view('books.index'); // Certifique-se de criar a view em resources/views/books/index.blade.php
    }

    // Metodo para a pagina di dettaglio
    public function show($id)
    {
        // Aqui você buscaria o livro pelo ID do banco de dados
        // Exemplo: $book = Book::findOrFail($id);
        return view('books.show', compact('id')); // Certifique-se de criar a view em resources/views/books/show.blade.php
    }

    // Metodo para a pagina com o form para a modifica
    public function edit()
    {
        // Aqui você buscaria os dados do livro a ser editado
        return view('books.edit'); // Certifique-se de criar a view em resources/views/books/edit.blade.php
    }

    // Metodo para a pagina com o form para l'aggiunta
    public function create()
    {
        return view('books.create'); // Certifique-se de criar a view em resources/views/books/create.blade.php
    }
}
