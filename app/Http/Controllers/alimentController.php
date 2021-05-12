<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use App\Models\Donation;
use Illuminate\Http\Request;

class alimentController extends Controller
{
    public function create(){
        $aliment = new Aliment();
        $aliment->libelle = request('libelle');
        $aliment->quantite = request('quantite');
        $aliment->categorie_id = 1;

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
    public function DonnerViaPannier()
    {
        
        for($i=0;$i<sizeof($_POST['choix']);$i++)
        {
        $aliment=Aliment::find($_POST['choix'][$i]);
        
        if($aliment->quantite==$_POST['quantiter'][$i]){$aliment->quantite = 0; $aliment->save();}
        else{
            $aliment->quantite = $aliment->quantite - $_POST['quantiter'][$i];
            $aliment->save();
        }
        }
        for($i=0;$i<sizeof($_POST['choix']);$i++)
        {
            $produit = Aliment::find($_POST['choix'][$i]);
            $don = new Donation();
            $don->categorie_id = 1;
            $don->quantite = $_POST['quantiter'][$i];
            $don->famille_id= $_POST['famille_id'];
            $don->aliment_id= $_POST['choix'][$i];
            $don->libelle = $produit->libelle;
            $don->save();
        }
        
        return redirect('/listeDonationAliment');
    }
}
