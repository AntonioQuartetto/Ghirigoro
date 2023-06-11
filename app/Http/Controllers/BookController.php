<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->only('create', 'edit');
    }

   

    public function index(){
        
        
        //$books = Book::all();
        if(Auth::user()){
            $books = Book::where('user_id', Auth::user()->id)->get();
        }
        else{
            //abort(401);
            $books = Book::all();
        }
       
        
        return view('books.index', ['books' => $books]);
        
    }
    
    public function create(){

        $authors = Author::all();

        return view('books.create', compact('authors'));
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
            'author_id' => $request->author_id,
            'year' => $request->year,
            'image' => $path_image,
            'user_id' => Auth::user()->id
        ]);
        
        return redirect()->route('books.index')->with('success', 'Libro aggiunto con successo');
        
    }
    public function show(Book $book){
        
        return view('books.show', compact('book'));
        
    }

    public function edit(Book $book){

        if(!(Auth::user()->id == $book->user_id)){
            abort(401);
        };

        $authors = Author::all();

        return view('books.edit', compact('book', 'authors'));
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
