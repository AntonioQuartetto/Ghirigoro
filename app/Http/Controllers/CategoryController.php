<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    


    public function __construct(){
        $this->middleware('auth')->only('create', 'edit');
    }


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

    public function show($category){
        
        $categoria = Category::find($category);
        if(!$category){
            abort(404);
        }
        

        return view('category.show', ['category' => $categoria]);
    }

    public function edit(Category $category){

        return view('category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category){


        $category->update([
            'name' => $request->name,
            
        ]);
        
        return redirect()->route('category.index')->with('success', 'Modifica avvenuta con successo');
    }
     public function destroy(Category $category){

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Categoria eliminata con successo');
     }
}
