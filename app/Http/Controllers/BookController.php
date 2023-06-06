<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->except('homepage','index');
    }

    public function homepage(){
        return view('homepage');
    }

    public function index(){
        
        
        $books = Book::all();
        
        return view('books.index', ['books' => $books]);
        
    }
    
    public function create(){
        return view('books.create');
    }
    
    
    public function store(BookRequest $request){
       

        $path_image = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image')->getClientOriginalName();
            //$path_extension = $request->file('image')->getClientOriginalExtension();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }
        
        Book::create([
            'title' => $request->title,
            'pages' => $request->pages,
            'author' => $request->author,
            'year' => $request->year,
            'image' => $path_image
        ]);
        
        return redirect()->route('books.index')->with('success', 'Libro aggiunto con successo');
        
    }
    public function show(Book $book){
        
        return view('books.show', compact('book'));
        
    }

    public function edit(Book $book){

        return view('books.edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book){

        
        $path_image = $book->image;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image')->getClientOriginalName();
            //$path_extension = $request->file('image')->getClientOriginalExtension();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }
        
        $book->update([
            'title' => $request->title,
            'pages' => $request->pages,
            'author' => $request->author,
            'year' => $request->year,
            'image' => $path_image
        ]);
        
        return redirect()->route('books.index')->with('success', 'Modifica avvenuta con successo');
    }
     public function destroy(Book $book){

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo');
     }
}
