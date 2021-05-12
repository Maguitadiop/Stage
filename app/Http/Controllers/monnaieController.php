<?php

namespace App\Http\Controllers;

use App\Models\DonationMonnaie;
use App\Models\Monnaie;
use Illuminate\Http\Request;

class monnaieController extends Controller
{
    public function create()
    {
        $monnaie = new Monnaie();
        $monnaie->devise = request('devise');
        $monnaie->montant = request('montant');
        $monnaie->categorie_id = 3;

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

    public function DonnerViaPannier()
    {
        
        for($i=0;$i<sizeof($_POST['choix']);$i++)
        {
        $monnaie=Monnaie::find($_POST['choix'][$i]);
        
        if($monnaie->montant==$_POST['montants'][$i]){$monnaie->montant = 0; $monnaie->save();}
        else{
            $monnaie->montant = $monnaie->montant - $_POST['montants'][$i];
            $monnaie->save();
        }
        }
        for($i=0;$i<sizeof($_POST['choix']);$i++)
        {
            $produit = Monnaie::find($_POST['choix'][$i]);
            $don = new DonationMonnaie();
            $don->famille_id= $_POST['famille_id'];
            $don->categorie_id = 3;
            $don->monnaie_id= $_POST['choix'][$i];
            $don->montant = $_POST['montants'][$i];
            $don->devise = $produit->devise;
            $don->save();
        } 
        return redirect('/listeDonationMonnaie');
    }
}
