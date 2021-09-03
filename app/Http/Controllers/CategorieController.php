<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view('categorie.create');
    }
    
    public function store(Request $request){
        $validateDate = $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        $collection = Categorie::create($validateDate);
            
        return redirect('categorie');
    }

    public function index(){
        $categories =   Categorie::all();

        return view('categorie.index',compact([
            'categories'
        ]));
    }

    public function edit($id){
        $category= Categorie::findOrFail($id);
        
        return view('categorie.edit',compact([
            'category'
        ]));
    }
    
    public function update(Request $request, $id){
        $validateDate = $request->validate([
            'nom' => 'required',
            'description' => 'required'
            
        ]);

        $category = Categorie::findOrFail($id);
        $category->update($validateDate);
        
        return redirect('categorie');
    }

    public function destroy($id){
        $delete = Categorie::findOrFail($id);
        $delete->delete();
        return redirect ("categorie");
    }
}
