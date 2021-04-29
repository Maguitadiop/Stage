<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class personneController extends Controller
{
    public function create(){
        $personne = new Personne();
        $personne->nom = request('nom');
        $personne->prenom = request('prenom');
        $personne->date_naiss = request('date_naiss');
        $personne->age = request('age');
        $personne->sexe = request('sexe');
        $personne->famille_id = request('famille_id');

        $personne->save();

        return redirect('/listePersonne');
    }

    public function listePersonne(){
        $personnes = Personne::all();
        return view('personne\listePersonne',compact('personnes'));
    }

    public function modifPersonne($id){
        $personne = Personne::find($id);
        return view('personne\modif',compact('personne'));
    }

    public function updatePersonne(Request $request, $id){
        $personne= Personne::find($id);
        $personne->nom = $request->get('nom');
        $personne->prenom = $request->get('prenom');
        $personne->date_naiss = $request->get('date_naiss');
        $personne->age = $request->get('age');
        $personne->sexe = $request->get('sexe');
        $personne->famille_id = $request->get('famille_id');

        $personne->save();
        return redirect('/listePersonne');
    }

    public function recherche(){
        $q = request()->input('q');
        $personnes = Personne::where('nom','like',"%$q%")
           ->orwhere('prenom','like',"%$q%") ->orwhere('date_naiss','like',"%$q%")
           ->orwhere('age','like',"%$q%")->orwhere('sexe','like',"%$q%")->orwhere('famille_id','like',"%$q%")
           ->paginate(5);
          return view('personne\recherche',compact('personnes'));
    }
    public function destroyPersonne($id){
        $famille = Personne::find($id);
        $famille->delete();
       
        return redirect()->back();     
    }
}
