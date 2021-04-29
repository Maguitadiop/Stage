<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    public function create(){
        $famille = new famille();
        $famille->nom = request('nom');
        $famille->adresse = request('adresse');
        $famille->telephone = request('telephone');
        $famille->email = request('email');

        $famille->save();
        return redirect('/listeFamille');
    }

    public function listeFamille(){
        $Familles = famille::all();
        return view('famille\listeFamille',compact('Familles'));
    }

    public function modifFamille($id){
        $famille = famille::find($id);
        return view('famille\modif',compact('famille'));
    }

    public function updateFamille(Request $request, $id){
        $famille = famille::find($id);
        $famille->nom = $request->get('nom');
        $famille->adresse = $request->get('adresse');
        $famille->telephone = $request->get('telephone');
        $famille->email = $request->get('email');

        $famille->save();
        return redirect('/listeFamille');
    }

    public function recherche(){
        $q = request()->input('q');
        $Familles = famille::where('nom','like',"%$q%")
           ->orwhere('adresse','like',"%$q%") ->orwhere('telephone','like',"%$q%")
           ->orwhere('email','like',"%$q%")
           ->paginate(5);
          return view('famille\recherche',compact('Familles'));
    }

    public function destroyFamille($id){
        $famille = famille::find($id);
        $famille->delete();
       
        return redirect()->back();     
    }
}