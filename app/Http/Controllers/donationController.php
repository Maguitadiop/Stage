<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationMonnaie;
use App\Models\DonationTextile;
use Illuminate\Http\Request;

class donationController extends Controller
{
public function listeDonationAliment()
{
    $donations = Donation::all();
    return view('Donation\listeDonationAliment',compact('donations'));
}
public function recherche(){
    $q = request()->input('q');
    $donations = Donation::where('libelle','like',"%$q%")
       ->orwhere('quantite','like',"%$q%")
       ->paginate(5);
      return view('Donation\recherche',compact('donations'));
   }

public function listeDonationTextile(){
    $donations = DonationTextile::all();
    return view('Donation\listeDonationTextile',compact('donations'));
}
public function rechercheDonTex(){
    $q = request()->input('q');
    $donations = DonationTextile::where('type','like',"%$q%")
       ->orwhere('taille','like',"%$q%")->orwhere('couleur','like',"%$q%")
       ->paginate(5);
      return view('Donation\rechercheDonTex',compact('donations'));
   }

   public function listeDonationMonnaie(){
       $donations = DonationMonnaie::all();
       return view('Donation\listeDonationMonnaie',compact('donations'));
   }

   public function rechercheDonationMonnaie(){
    $q = request()->input('q');
    $donations = DonationMonnaie::where('devise','like',"%$q%")
       ->orwhere('montant','like',"%$q%")
       ->paginate(5);
      return view('Donation\rechercheDonationMonnaie',compact('donations'));
   }
}