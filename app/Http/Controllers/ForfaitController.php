<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;
use App\Models\Produit;
class ForfaitController extends Controller
{
    
    public function FrontForfait(){
        $forfait=Forfait::where('type','1')->get();
        $forfait1=Forfait::where('type','2')->get();
        $forfait2=Forfait::where('type','3')->get();
        return view('pages.offre-forfait',compact('forfait','forfait1','forfait2'));
    }

    public function Whatsapp($mt){
        
        return view('pages.whatsapp',compact('mt'));
    }


    public function shop(){
        $shops=Produit::all();
        return view('pages.shop',compact('shops'));
    }

    public function WhatsappPost(Request $request){
        $camtel=$request->input('camtel');
        $prix=$request->input('prix');
        return redirect('https://api.whatsapp.com/send/?phone=+237653936197&text=Salut Datao Solutions je veux un abonnement de '.trim($prix).' au '.trim($camtel));
    }

    public function FrontForfait1(){
        $forfait=Forfait::where('type','4')->get();
        $forfait1=Forfait::all();
        return view('pages.offre-forfait1',compact('forfait','forfait1'));
    }

    public function create(){
        
        return view('forfait.create');
    }
    
    public function store(Request $request){
        $validateDate = $request->validate([
            'nom' => 'required',
            'subname' => 'required',
            'type' => 'required',
            'prix' => 'required',
            'volume' => 'required',
            'validite' => 'required',
        ]);

        $collection = Forfait::create($validateDate);
            
        return redirect('forfait');
    }

    public function index(){
        $forfaits =   Forfait::all();

        return view('forfait.index',compact([
            'forfaits'
        ]));
    }

    public function edit($id){
        $forfait= Forfait::findOrFail($id);
        
        return view('forfait.edit',compact([
            'forfait'
        ]));
    }
    
    public function update(Request $request, $id){
        $validateDate = $request->validate([
            'nom' => 'required',
            'subname' => 'required',
            'type' => 'required',
            'prix' => 'required',
            'volume' => 'required',
            'validite' => 'required',
        ]);

        $forfait = Forfait::findOrFail($id);
        $forfait->update($validateDate);
        
        return redirect('forfait');
    }

    public function destroy($id){
        $delete = Forfait::findOrFail($id);
        $delete->delete();
        return redirect ("forfait");
    }
}
