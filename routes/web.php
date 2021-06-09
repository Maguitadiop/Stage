<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Aliment

Route::get('/ajoutAliment', function(){
    return view('aliment/ajoutAliment');
});
Route::post('/ajoutAliment','App\Http\Controllers\alimentController@create');
Route::get('/listeAliment','App\Http\Controllers\alimentController@listeAliment');
Route::get('/listeAliment/editAliment/{id}','App\Http\Controllers\alimentController@modifAliment');
Route::post('/listeAliment/updateAliment/{id}','App\Http\Controllers\alimentController@updateAliment');
Route::get('/rechercheAliment','App\Http\Controllers\alimentController@recherche');
Route::get('/listeAliment/destroyAliment/{id}','App\Http\Controllers\alimentController@destroyAliment');

//Textile

Route::get('/ajoutTextile', function(){
    return view('textile/ajoutTextile');
});
Route::post('/ajoutTextile','App\Http\Controllers\textileController@create');
Route::get('/listeTextile','App\Http\Controllers\textileController@listeTextile');
Route::get('/listeTextile/editTextile/{id}','App\Http\Controllers\textileController@modifTextile');
Route::post('/listeTextile/updateTextile/{id}','App\Http\Controllers\textileController@updateTextile');
Route::get('/rechercheTextile','App\Http\Controllers\textileController@recherche');
Route::get('/listeTextile/destroyTextile/{id}','App\Http\Controllers\textileController@destroyTextile');

//Monnaie
Route::get('/ajoutMonnaie', function(){
    return view('monnaie/ajoutMonnaie');
});
Route::post('/ajoutMonnaie','App\Http\Controllers\monnaieController@create');
Route::get('/listeMonnaie','App\Http\Controllers\monnaieController@listeMonnaie');
Route::get('/listeMonnaie/editMonnaie/{id}','App\Http\Controllers\monnaieController@modifMonnaie');
Route::post('/listeMonnaie/updateMonnaie/{id}','App\Http\Controllers\monnaieController@updateMonnaie');
Route::get('/rechercheMonnaie','App\Http\Controllers\monnaieController@recherche');
Route::get('/listeMonnaie/destroyMonnaie/{id}','App\Http\Controllers\monnaieController@destroyMonnaie');

//famille
Route::get('/ajoutFamille', function(){
    return view('famille/ajoutFamille');
});
Route::get('/listeFamille','App\Http\Controllers\FamilleController@listeFamille');
Route::post('/ajoutFamille','App\Http\Controllers\FamilleController@create');
Route::get('/rechercheFamille','App\Http\Controllers\FamilleController@recherche');
Route::get('/listeFamille/editFamille/{id}','App\Http\Controllers\FamilleController@modifFamille');
Route::post('/listeFamille/updateFamille/{id}','App\Http\Controllers\FamilleController@updateFamille');



//Personne 
Route::get('/ajoutPersonne', function(){
    return view('personne/ajoutPersonne');
});
Route::post('/ajoutPersonne','App\Http\Controllers\PersonneController@create');
Route::get('/listePersonne','App\Http\Controllers\PersonneController@listePersonne');
Route::get('/listePersonne/editPersonne/{id}','App\Http\Controllers\PersonneController@modifPersonne');
Route::post('/listePersonne/updatePersonne/{id}','App\Http\Controllers\PersonneController@updatePersonne');
Route::get('/recherchePersonne','App\Http\Controllers\PersonneController@recherche');


//Donation

Route::get('/PanierDonationAliment', function(){
    return view('Donation/DonationAliment');
});
Route::post('/PanierDonationAliment', function(){
    return view('Donation/DonationAliment');
});
Route::post('/panierDonationAliment/updatealiment','App\Http\Controllers\alimentController@DonnerViaPannier');
Route::get('/listeDonationAliment','App\Http\Controllers\donationController@listeDonationAliment');
Route::get('/rechercheDonationAliment','App\Http\Controllers\donationController@recherche');

Route::post('/PanierDonationTextile', function(){
    return view('Donation/donationTextile');
});
Route::post('/panierDonationTextile/updateTextile','App\Http\Controllers\textileController@DonnerViaPannier');
Route::get('/listeDonationTextile','App\Http\Controllers\donationController@listeDonationTextile');
Route::get('/rechercheDonationTextile','App\Http\Controllers\donationController@rechercheDonTex');

Route::post('/PanierDonationMonnaie', function(){
    return view('Donation/donationMonnaie');
});
Route::post('/panierDonationMonnaie/updateMonnaie','App\Http\Controllers\monnaieController@DonnerViaPannier');
Route::get('/listeDonationMonnaie','App\Http\Controllers\donationController@listeDonationMonnaie');
Route::get('/rechercheDonationMonnaie','App\Http\Controllers\donationController@rechercheDonationMonnaie');


Route::get('/listeDonation', function(){
    return view('Donation/listeDonation');
});



