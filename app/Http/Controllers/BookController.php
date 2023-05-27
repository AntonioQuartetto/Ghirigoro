<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        
        
        $books = Book::all();
        
        return view('book.index', ['books' => $books]);
        
    }
    
    public function create(){
        return view('book.create');
    }
    
    
    public function store(BookRequest $request){
        
        // $file_name= $request->file('image')->getClientOriginalName(); //cerco il nome del file
        // $file_extension = $request->file('image')->getClientOriginalExtension(); //cerco l'estensione del file
        //dd($request->hasFile('image'));
        //dd($request->file('image'));
        //dd($request->file('image'))->isValid();

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
        
        return redirect()->route('book.index')->with('success', 'Libro aggiunto con successo');
        
    }
    public function show($book){
        
        
        $book = Book::find($book);
        if(!$book){
            abort(404);
        }
        
        return view('book.show', ['book' => $book]);
        
    }
    
}
