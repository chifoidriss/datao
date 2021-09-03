<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use DB;
class ProduitController extends Controller
{
    public function create(){
       $category=Categorie::all();
        return view ('produit.create',compact('category'));
    }


    public function store(Request $request){
        $produit = new Produit();
        $produit->fill($request->only([
            'category_id',
            'description',
            'nom',
            'prix',
            'quantite'
        ]));
        
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('products/'.date('F').date('Y'), 'public');
            $produit->image = $image;
        }
        $produit->save();
        
        return redirect('produit');
    }

    public function index() {

         $produit = DB::table('produit')->join('categorie','categorie.id','=','produit.category_id')->select('produit.*','categorie.nom as namec')->get();

        //$produit = Produit::with(['categorie'])->get();
       

        return view('produit.index', compact('produit'));
    }

    public function edit($id){
        $produit =  Produit::findOrFail($id);
        $category = Categorie::all();
        return view('produit.edit',compact([
            'produit','category'
        ]));
    }
    
    public function update(Request $request, $id){
   
        $produit = Produit::findOrFail($id);
        $produit->fill($request->only([
            'category_id',
            'description',
            'nom',
            'prix',
            'quantite'
        ]));
        
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('products/'.date('F').date('Y'), 'public');
            $produit->image = $image;
        }
        $produit->save();
            
        return redirect('produit');


    }

    public function destroy($id){

        $delete=Produit::findOrFail($id);
        $delete->delete();
        return redirect ("produit");
    }
}
