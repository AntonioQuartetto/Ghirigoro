<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function search(SearchRequest $request){
        
        $books = Book::where('title', 'like' , '%' . $request->search . '%')->get();
       
        return view('books.index', compact('books'));
    }
}
