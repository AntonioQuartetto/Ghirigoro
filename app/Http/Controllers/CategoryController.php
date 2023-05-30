<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index(){

        $categoria = Category::all(); 

        return view('category.index', ['categories' => $categoria]);

    }

    public function create(){
        return view('category.create');
    }

    public function store(CategoryRequest $request){

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.index')->with('success', 'Categoria aggiunta con successo');
    
    }

    public function show($cat){
        
        $categoria = Category::find($cat);
        if(!$cat){
            abort(404);
        }
        
            
            

        return view('category.show', ['category' => $categoria]);
    }
}
