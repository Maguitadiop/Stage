<?php

namespace App\Http\Controllers;

use App\Models\Monnaie;
use Illuminate\Http\Request;

class monnaieController extends Controller
{
    public function create()
    {
        $monnaie = new Monnaie();
        $monnaie->devise = request('devise');
        $monnaie->montant = request('montant');
        $monnaie->categorie_id = request('categorie_id');

        $monnaie->save();
        return redirect('/listeMonnaie');
    }

    public function listeMonnaie()
    {
        $monnaies = Monnaie::all();
        return view('monnaie\listeMonnaie', compact('monnaies'));
    }

    public function modifMonnaie($id)
    {
        $monnaie = Monnaie::find($id);
        return view('monnaie\modif', compact('monnaie'));
    }

    public function updateMonnaie(Request $request, $id)
    {
        $monnaie = Monnaie::find($id);
        $monnaie ->devise = $request->get('devise');
        $monnaie ->montant = $request->get('montant');
        $monnaie->categorie_id = $request->get('categorie_id');

        $monnaie->save();
        return redirect('/listeMonnaie');
    }

    public function recherche()
    {
        $q = request()->input('q');
        $monnaies = Monnaie::where('devise', 'like', "%$q%")
           ->orwhere('montant', 'like', "%$q%")
           ->paginate(5);
           return view('monnaie\recherche',compact('monnaies'));
    }

    public function destroyMonnaie($id){
        $monnaies = Monnaie::find($id);
        $monnaies->delete();
       
        return redirect()->back();     
    }
}
