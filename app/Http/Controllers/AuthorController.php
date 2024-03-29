<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('create', 'edit');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        Author::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthday' => $request->birthday
        ]);

        return redirect()->route('authors.index')->with('success', 'Autore aggiunto con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {   

        $books = Book::all();

        return view('authors.show', compact('author', 'books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author)
    {
        $author->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthday' => $request->birthday
        ]);

        return redirect()->route('authors.index')->with('success', 'Modifica avvenuta con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Autore eliminato con successo');
    }
}
