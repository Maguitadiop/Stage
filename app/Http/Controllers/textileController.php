<?php

namespace App\Http\Controllers;

use App\Models\DonationTextile;
use App\Models\Textile;
use Illuminate\Http\Request;

class textileController extends Controller
{
    public function create(){
        $textile = new Textile();
        $textile->type = request('type');
        $textile->taille = request('taille');
        $textile->couleur = request('couleur');
        $textile->categorie_id = 2;

        $textile->save();
        return redirect('/listeTextile');
    }

    public function listeTextile(){
        $textiles = Textile::all();
        return view('textile\listeTextile',compact('textiles'));
    }

    public function modifTextile($id){
        $textile = Textile::find($id);
        return view('textile\modif',compact('textile'));
    }

    public function updateTextile(Request $request, $id){
        $textile = Textile::find($id);
        $textile->type = $request->get('type');
        $textile->taille = $request->get('taille');
        $textile->couleur = $request->get('couleur');
        $textile->categorie_id = $request->get('categorie_id');

        $textile->save();
        return redirect('/listeTextile');
    }

    public function recherche(){
        $q = request()->input('q');
        $textiles = Textile::where('type','like',"%$q%")
           ->orwhere('taille','like',"%$q%") ->orwhere('couleur','like',"%$q%")
           ->paginate(5);
          return view('textile\recherche',compact('textiles'));
    }

    public function destroyTextile($id){
        $textiles = Textile::find($id);
        $textiles->delete();
       
        return redirect()->back();     
    }

    
    public function DonnerViaPannier(){
        
        for($i=0;$i<sizeof($_POST['choix']);$i++)
        {
            $textile = Textile::find($_POST['choix'][$i]);
            $don = new DonationTextile();
            $don->categorie_id = 2;
            $don->type = $textile->type;
            $don->famille_id= $_POST['famille_id'];
            $don->taille = $textile->taille;
            $don->couleur = $textile->couleur;
            $don->save();

        }
        for($i=0;$i<sizeof($_POST['choix']);$i++)
        {
           $textile=Textile::find($_POST['choix'][$i]);
           $textile->delete();

        }
        
        return redirect('/listeDonationTextile');
    }
}



