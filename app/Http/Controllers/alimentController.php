<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class alimentController extends Controller
{
    public function create(){
        $aliment = new Aliment();
        $aliment->libelle = request('libelle');
        $aliment->quantite = request('quantite');
        $aliment->categorie_id = request('categorie_id');

        $aliment->save();
        return redirect('/listeAliment');

    }

    public function listeAliment(){
        $aliments = Aliment::all();
        return view('aliment\listeAliment',compact('aliments'));
    }

    public function modifAliment($id){
        $aliment = Aliment::find($id);
        return view('aliment\modif',compact('aliment'));
    }

    public function updateAliment(Request $request, $id){
        $aliment = Aliment::find($id);
        $aliment->libelle = $request->get('libelle');
        $aliment->quantite = $request->get('quantite');
        $aliment->categorie_id = $request->get('categorie_id');

        $aliment->save();
        return redirect('/listeAliment');
    }

    public function recherche(){
        $q = request()->input('q');
        $aliments = Aliment::where('libelle','like',"%$q%")
           ->orwhere('quantite','like',"%$q%")
           ->paginate(5);
          return view('aliment\recherche',compact('aliments'));
    }

    public function destroyAliment($id){
        $aliments = Aliment::find($id);
        $aliments->delete();
       
        return redirect()->back();     
    }
}
